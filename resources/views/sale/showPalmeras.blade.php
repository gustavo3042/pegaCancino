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
                          <h3>  <span class="card-title">Detalles de Venta</span> </h3>
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
                            <strong>Total sin descuento:</strong>
                            ${{ number_format($sale->totalSinDesc,1) }}
                        </div>

                        
                        <div class="form-group">
                            <strong>Descuento:</strong>
                         ${{ number_format($sale->totalSinDesc - $sale->total ) }}
                         
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $sale->status }}
                        </div>


                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                    <th> Producto </th>
                                    <th> Cantidad</th>
                                    <th> Codigo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saleDetails as $saleDetail )

                                        <tr>
                                        <td> {{ $saleDetail->bodega->name }}</td>
                                            <td> {{ $saleDetail->quantity }}</td>
                                            <td> {{ $saleDetail->bodega->barcode }}</td>
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
