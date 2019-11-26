<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Http\Requests\validateInvoice;
use App\Invoice;
use App\Product;
use App\Seller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('invoices.index', [
            'invoices' => Invoice::all()
        ]);
    }

    public function create()
    {
        $customers = Customer::all();
        $sellers = Seller::all();
        return view('invoices.create', compact( 'sellers', 'customers'));
    }

    public function store(validateInvoice $request)
    {
        $invoice = new Invoice();
        $invoice->id = $request->get('id');
        $invoice->expedition_date = $request->get('expedition_date');
        $invoice->due_date = $request->get('due_date');
        $invoice->receipt_date = $request->get('receipt_date');
        $invoice->seller_id = $request->get('seller_id');
        $invoice->sale_description = $request->get('sale_description');
        $invoice->customer_id = $request->get('customer_id');
        $invoice->status = $request->get('status');
        $invoice->save();
        return redirect('/invoices');
    }

    public function show(Invoice $invoice)
    {
        $customers = Customer::all();
        $sellers = Seller::all();
        return view('invoices.show', compact( 'sellers', 'customers'), [
            'invoice' => $invoice
        ]);
    }

    public function edit(Invoice $invoice)
    {
        $customers = Customer::all();
        $sellers = Seller::all();
        return view('invoices.edit', compact( 'sellers', 'customers'), [
            'invoice' => $invoice ]);
    }

    public function update(validateInvoice $request, Invoice $invoice)
    {
        $invoice->expedition_date = $request->get('expedition_date');
        $invoice->due_date = $request->get('due_date');
        $invoice->receipt_date = $request->get('receipt_date');
        $invoice->seller_id = $request->get('seller_id');
        $invoice->sale_description = $request->get('sale_description');
        $invoice->customer_id = $request->get('customer_id');
        $invoice->status = $request->get('status');
        $invoice->save();
        return redirect('/invoices');
    }

    public function destroy($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();
        return redirect('/invoices');

    }

    public function confirmDelete($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('invoices.confirmDelete', [
        'invoice' => $invoice ]);
    }
}
