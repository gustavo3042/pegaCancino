@extends('layouts.app')

@section('template_title')
   {{ $bodega->name ?? 'Show Product Palmeras' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h3>   <span class="card-title">DETALLES DEL PRODUCTO</span>  </h3>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bodegas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $bodega->name }}
                        </div>
                        <div class="form-group">
                            <strong>Barcode:</strong>
                            {{ $bodega->barcode }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $bodega->color }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $bodega->stock }}
                        </div>
                      
                      
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $bodega->price }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $bodega->status }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $bodega->category->name }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $bodega->provider->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
