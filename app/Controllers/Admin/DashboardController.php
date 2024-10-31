<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\OrderModel;

class DashboardController extends BaseController
{
    public function index(): string
    {
        $orderModel = new OrderModel();

        // Menghitung jumlah order berdasarkan status
        $waitingCount = $orderModel->where('status', 'pending')->countAllResults();
        $processCount = $orderModel->where('status', 'process')->countAllResults();
        $completedCount = $orderModel->where('status', 'done')->countAllResults();

        $data = [
            'title' => 'Dashboard - SIGAP',
            'waitingCount' => $waitingCount,
            'processCount' => $processCount,
            'completedCount' => $completedCount,
        ];

        return view('admin/dashboard/index', $data);
    }
}
