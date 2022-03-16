<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoiceByClient($id)
    {
        $invoices = Invoice::with('client', 'user')->where('user_id', $id)
            ->orderBy('invoice_year', 'desc', 'invoice_month', 'desc')->get();
        return view('pages.invoices.invoice-by-client', ['invoices' => $invoices]);
    }

    public function printInvoice($id)
    {
        $invoice = Invoice::with('client', 'user')->where('id', $id)->first();
        return view('pdf.invoice', compact('invoice'));
    }
}
