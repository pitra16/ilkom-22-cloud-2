<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Yajra\DataTables\Facades\DataTables;

class ActivityLogController extends Controller
{

    public function dataTable()
    {
        $logs = Activity::with('causer')->latest();

        return DataTables::of($logs)
            ->addColumn('user', function ($log) {
                return $log->causer ? $log->causer->name : 'Guest';
            })
            ->addColumn('properties', function ($log) {
                return json_encode($log->properties, JSON_PRETTY_PRINT);
            })
            ->editColumn('created_at', function ($log) {
                return $log->created_at->format('Y-m-d H:i:s');
            })
            ->make(true);
    }

    public function index()
    {
        return view('backend.activitylog.index');
    }
}
