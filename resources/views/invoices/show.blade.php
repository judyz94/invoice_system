@extends ('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title"><strong>{{ __('Details Invoice') }} #{{ $invoice->code }}</strong></h4>
                    </div>

                    <!-- Invoice detail information -->
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-md-3">{{ __('Code') }}</dt>
                            <dd class="col-md-3">{{ $invoice->code }}</dd>

                            <dt class="col-md-3">{{ __('Expedition date') }}</dt>
                            <dd class="col-md-3">{{ $invoice->expedition_date }}</dd>

                            <dt class="col-md-3">{{ __('Due date') }}</dt>
                            <dd class="col-md-3">{{ $invoice->due_date }}</dd>

                            <dt class="col-md-3">{{ __('Receipt date') }}</dt>
                            <dd class="col-md-3">{{ $invoice->receipt_date }}</dd>

                            <dt class="col-md-3">{{ __('Sale description') }}</dt>
                            <dd class="col-md-3">{{ $invoice->sale_description }}</dd>

                            <dt class="col-md-3">{{ __('Total with VAT') }}</dt>
                            <dd class="col-md-3">{{ $invoice->total_with_vat }}</dd>

                            <dt class="col-md-3">{{ __('Seller ID') }}</dt>
                            <dd class="col-md-3">{{ $invoice->seller->document }}</dd>

                            <dt class="col-md-3">{{ __('Customer ID') }}</dt>
                            <dd class="col-md-3">{{ $invoice->customer->document }}</dd>

                            <dt class="col-md-3">{{ __('Status') }}</dt>
                            <dd class="col-md-3">{{ $invoice->status }}</dd>

                            <dt class="col-md-3">{{ __('Created by') }}</dt>
                            <dd class="col-md-3">{{ $invoice->user->name }}</dd>
                        </dl>

                        <!-- Details of the invoice -->
                        <div class="table-responsive-lg">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>{{ __('Product #') }}</th>
                                    <th>{{ __('Product Name') }}</th>
                                    <th>{{ __('Unit Price') }}</th>
                                    <th>{{ __('Quantity') }}</th>
                                    <th>{{ __('Total Price') }}</th>
                                    <th>{{ __('Actions') }}</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($invoice->products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>${{ number_format($product->pivot->price) }}</td>
                                        <td>{{ $product->pivot->quantity }}</td>
                                        <td>${{ number_format($invoice->total = $product->pivot->price * $product->pivot->quantity) }}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group" aria-label="{{ __('Actions') }}">
                                                <a href="{{ route('invoiceProduct.edit', [$invoice, $product]) }}" class="btn btn-link"
                                                   title="{{ __('Edit Detail') }}">
                                                    <i class="fas fa-edit" style="color:black"></i>
                                                </a>
                                                <button type="button" class="btn btn-link text-danger"
                                                        data-route="{{ route('invoiceProduct.destroy', [$invoice, $product]) }}"
                                                        data-toggle="modal"
                                                        data-target="#confirmDeleteModal"
                                                        title="{{ __('Delete Detail') }}">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Form added invoice details -->
                    <div class="col-md-12">
                        <div class="card-header d-flex justify-content-between">
                            <h5><strong>{{ __('Add a new product to this invoice') }}</strong></h5>
                        </div>
                        <form action="{{ route('invoices.products.store', $invoice) }}" method="post">
                            @csrf
                            <div class="card-body">
                             @include('invoicesProducts.__form')
                                <button class="btn btn-success btn-block col-md-1" type="submit"><i class="fas fa-plus"></i> {{ __('Add') }}</button>
                            </div>
                        </form>
                    </div>
                    <br>

                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('invoices.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> {{ __('Back to Invoices') }}
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('modals')
    @include('partials.__confirm_delete_modal')
@endpush
@push('scripts')
    <script src="{{ asset(mix('js/delete-modal.js')) }}"></script>
@endpush

