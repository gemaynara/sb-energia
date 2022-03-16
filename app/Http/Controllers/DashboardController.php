<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Distributor;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboardClient()
    {

        $year = date('Y');
        $user = auth()->user();

        $consumption = Invoice::where('user_id', $user->id)
            ->select('invoice_month', 'invoice_year as year',
                DB::raw('SUM(consumption) as consumption'), DB::raw('(consumption*fare_value) as total'))
            ->where('invoice_year', $year)
            ->groupBy('invoice_month', 'invoice_year', 'total')
            ->orderBY('invoice_month', 'asc')
            ->take(6)
            ->get();

        return ['consumption' => $consumption];


    }

    public function dashboardAdmin()
    {

        $year = date('Y');
        $user = auth()->user();
        $clients = Client::all()->count();
        $distributors = Distributor::all()->count();

        return ['clients' => $clients, 'distributors' => $distributors];


    }
}
