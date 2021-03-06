@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg">
                    <div class="card-header pb-0">
                        <h4 class="card-title"><strong>{{ __('Edit Product') }} N°{{ $product->id }}   <i class="fas fa-box-open"></i></strong></h4>
                    </div>

            <div class="card-body">
                <form action="{{ route('products.update', $product) }}" method="post" id="products-form">
                    @csrf
                    @method('put')
                    @include('products.__form')
                </form>
            </div>

            <div class="card-footer d-flex justify-content-between">
                <a href="{{ route('products.index') }}" class="btn buttonCancel">
                    <i class="fas fa-arrow-left"></i> {{ __('Cancel') }}
                </a>
                <button type="submit" class="btn buttonSave" form="products-form">
                    <i class="fas fa-edit"></i> {{ __('Update') }}
                </button>
            </div>

                </div>
            </div>
        </div>
    </div>
@endsection

