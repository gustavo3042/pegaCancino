@extends('layouts.app')


@section('content')
    <section class="content container-fluid">
        <div class="row">



     


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                          <h3>  <span class="card-title">Detalles del Traslado</span> </h3>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                      
                        <div class="form-group">
                            <strong>Encargado Traslado:</strong>
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


                        <div class="form-group">
                            <strong>Número Registro:</strong>
                            {{ $sale->id }}
                        </div>


                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                    <th>Producto </th>
                                    <th>Cantidad</th>
                                    <th>Dinero Producto</th>
                                    <th>Codigo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saleDetails as $saleDetail )

                                        <tr>
                                        <td> {{ $saleDetail->product->name }}</td>
                                            <td> {{ $saleDetail->quantity }}</td>
                                            <td> {{ $saleDetail->precio * $saleDetail->quantity }}</td>
                                            <td> {{ $saleDetail->product->barcode }}</td>
                                            
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


