@extends('layouts.app')

@section('template_title')
    {{ $sale->name ?? 'Show Sale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">



        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('sale.index')}}">Ventas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detalles de venta</li>
            </ul>
        </nav>


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                          <h3>  <span class="card-title">Sala Venta Prat {{$producto}}</span> </h3>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Client Id:</strong>
                            
                        </div>
                        <div class="form-group">
                            <strong>Vendedor:</strong>
                            {{ $sale->user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Venta:</strong>
                            {{ $sale->created_at }}
                        </div>
                        <div class="form-group">
                            <strong>Iva:</strong>
                            ${{ number_format($sale->iva,1) }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                         ${{ number_format($sale->total,1) }}
                        </div>
                      
                      
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $sale->status }}
                        </div>

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>

                                        <th>ID</th>
                                    <th> Producto </th>
                                    <th>Stock</th>
                                    <th>Codigo</th>
                                    <th>Precio producto</th>
                                    <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saleDetails as $saleDetail )

                                        <tr>

                                            <th>{{$saleDetail->id}}</th>
                                        <td> {{ $saleDetail->product->name }}</td>
                                            <td> {{ $saleDetail->quantity }}</td>
                                            <td> {{ $saleDetail->product->barcode }}</td>
                                            <td>{{$saleDetail->precio}}</td>

                                            <td>

                                                <a class="btn btn-success btn-sm" href="{{route('cart.cambiar',[$saleDetail->id,$producto])}}">Cambiar</a>


                                            </td>
                                            
                                        </tr>
                                    @endforeach

                                </tbody>

                        
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
