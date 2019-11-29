@extends ('layouts.app')

@section('title')Customer
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/customers">Back to Customers</a><br><br>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <br><h3><strong>Customer ID {{ $customer->document}}</strong></h3><br><br>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h4>Associated invoices</h4><br>
            <table class="table">
                <thead>
                <tr>
                    <th>Code #</th>
                    <th>Expedition date</th>
                    <th>Due date</th>
                    <th>Receipt date</th>
                    <th>Sale description</th>
                    <th>Total with VAT</th>
                    <th>Status</th>
                    <th>Created by</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customer->invoices as $invoice)
                    <tr>
                        <td><a href="/invoices/{{ $invoice->id }}">{{ $invoice->code }}</a></td>
                        <td>{{ $invoice->expedition_date }}</td>
                        <td>{{ $invoice->due_date }}</td>
                        <td>{{ $invoice->receipt_date }}</td>
                        <td>{{ $invoice->sale_description }}</td>
                        <td>{{ $invoice->total_with_vat }}</td>
                        <td>{{ $invoice->status }}</td>
                        <td>{{ $invoice->user->name }}</td>
                        <td><a class="btn btn-primary btn-sm" href="/invoices/{{ $invoice->id }}/edit">Edit Invoice</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
