<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        // Simpan order ke database
        $order = Order::create([
            'order_id'    => 'INV-' . time(),
            'user_id'     =>  1, // Ambil user ID yang login
            'total_price' => $request->total_price,
            'status'      => 'pending',
        ]);

        // Konfigurasi Midtrans (gunakan config() dengan benar)
        Config::$serverKey = config('midtrans.server_key');
        Config::$clientKey = config('midtrans.client_key'); // Tambahkan jika perlu
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Buat parameter pembayaran
        $transaction_details = [
            'order_id'    => $order->order_id,
            'gross_amount' => $order->total_price,
        ];

        $customer_details = [
            'first_name' => 'Ilham Arief',
            'email'      => 'meanhills019@gmail.com',
        ];

        $transaction = [
            'transaction_details' => $transaction_details,
            'customer_details'    => $customer_details,
        ];

        // Buat Snap Token
        try {
            $snapToken = Snap::getSnapToken($transaction);
            return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashed == $request->signature_key) {
            $order = Order::where('order_id', $request->order_id)->first();
            if ($request->transaction_status == 'capture' || $request->transaction_status == 'settlement') {
                $order->update(['status' => 'paid']);
            } elseif ($request->transaction_status == 'cancel' || $request->transaction_status == 'expire' || $request->transaction_status == 'deny') {
                $order->update(['status' => 'failed']);
            }
        }
    }
}
