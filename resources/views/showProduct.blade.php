@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? 'Show Product' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $product->name }}
                        </div>
                        <div class="form-group">
                            <strong>Barcode:</strong>
                            {{ $product->barcode }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $product->color }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $product->stock }}
                        </div>
                        <div class="form-group">
                            <strong>Totalobillos:</strong>
                            {{ $product->totalObillos }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $product->image }}
                        </div>
                        <div class="form-group">
                            <strong>Brand:</strong>
                            {{ $product->brand }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $product->price }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $product->status }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $product->category->name }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $product->provider->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
