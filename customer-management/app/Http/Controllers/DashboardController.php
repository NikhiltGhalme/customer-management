<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCustomers = Customer::count();
        $totalOrders = Order::count();
        $totalRevenue = Order::where('status', '!=', 'cancelled')->sum('amount');
        $recentCustomers = Customer::latest()->take(5)->get();

        return view('dashboard', compact('totalCustomers', 'totalOrders', 'totalRevenue', 'recentCustomers'));
    }
}
