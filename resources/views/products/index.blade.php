@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-center">
                <div class="border-info col-12 col-sm-6 col-md-3">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('notification')}}">Notificaciones</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @foreach($products as $product)
                        <form class="" action="{{route('product.update',$product->id)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group mb-2">
                                        <label for="staticEmail2" class="sr-only">Producto</label>
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="{{$product->name}}">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label for="inputPassword2" class="sr-only">Stock</label>
                                    <input type="text" class="form-control {{ $errors->has('stock') ? ' is-invalid' : '' }}" id="inputPassword2" placeholder="Stock" name="stock" value="{{$product->stock}}">
                                    @if ($errors->has('stock'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('stock') }}</strong>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary mb-2 float-md-right">Guardar</button>
                                </div>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
