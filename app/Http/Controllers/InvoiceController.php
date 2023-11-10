<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function get_all_invoice()
    {
        $invoice = Invoice::with('customer')->orderBy('id', 'DESC')->get();
        return response()->json([

            'invoices' => $invoice
        ], 200);
    }
}
