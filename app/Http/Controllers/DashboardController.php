<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboardClient()
    {

        $year = date('Y');
        $user = auth()->user();

        $consumption = Invoice::where('user_id', $user->id)
            ->select(DB::raw('invoice_month'), 'invoice_year as year',
                DB::raw('SUM(consumption) as consumption'), DB::raw('(consumption*fare_value) as total'))
            ->where('invoice_year', $year)
            ->groupBy(DB::raw('invoice_month'), 'invoice_year', 'total')
            ->orderBY('invoice_month', 'asc')
            ->get();

        return ['consumption' => $consumption];


    }
}
