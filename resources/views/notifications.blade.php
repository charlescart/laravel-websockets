@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-center">
                <div class="border-info col-12 col-sm-6 col-md-3">
                    <a href="{{route('product.index')}}">Productos</a>
                    <a href="{{route('notification')}}">Notificaciones</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div id="stock-notification" class="alert alert-success invisible" role="alert">
                        <strong></strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/product/product-update.js') }}" defer></script>
@endpush
