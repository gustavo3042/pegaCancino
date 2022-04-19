@extends('layouts.app')

@section('template_title')
    {{ $purchase->name ?? 'Show Purchase' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">

        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('purchase.index')}}">Compras</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detalles de compra</li>
            </ul>
        </nav>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                          <h3>  <span class="card-title">Detalles de Compra </span></h3>
                        </div>
                        <div class="float-right ">
                            <a class="btn btn-primary " href="{{ route('purchase.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                       
                        <div class="form-group">
                            <strong>Comprador:</strong>
                            {{ $purchase->user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Compra:</strong>
                            {{ $purchase->created_at }}
                        </div>
                        <div class="form-group">
                            <strong>Iva:</strong>
                            ${{ $purchase->iva }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                           ${{ $purchase->total }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $purchase->status }}
                        </div>

                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $purchase->provider->name }}
                        </div>



                        <div class="card-body">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                    <th> Producto </th>
                                    <th> Cantidad</th>
                                    <th>Codigo</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchaseDetails as $purchaDetail )

                                        <tr>
                                        <td> {{ $purchaDetail->bodega->name }}</td>
                                            <td> {{ $purchaDetail->quantity }}</td>
                                            <td> {{ $purchaDetail->bodega->barcode }}</td>
                                          
                                           
                                        </tr>
                                    @endforeach

                                </tbody>

                        
                            </table>
                        </div>
                    </div>
                       

               

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
