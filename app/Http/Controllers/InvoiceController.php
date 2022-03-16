<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $clients = Client::with('user')->get();
        return view('pages.invoices.index', ['clients' => $clients]);
    }

    public function myInvoices()
    {
        $user = auth()->user();
        $invoices = Invoice::with('client', 'user')->where('user_id', $user->id)
            ->orderBy('invoice_year', 'desc', 'invoice_month', 'desc')->get();

        return view('pages.invoices.my-invoices', ['invoices' => $invoices]);
    }

    public function invoiceByClient($id)
    {
        $client = User::find($id);
        $invoices = Invoice::with('client', 'user')->where('user_id', $id)
            ->orderBy('invoice_year', 'desc', 'invoice_month', 'desc')->get();
        return view('pages.invoices.invoice-by-client', ['invoices' => $invoices, 'client'=>$client]);
    }

    public function printInvoice($id)
    {
        $invoice = Invoice::with('client', 'user')->where('id', $id)->first();
        return view('pdf.invoice', compact('invoice'));
    }
}
