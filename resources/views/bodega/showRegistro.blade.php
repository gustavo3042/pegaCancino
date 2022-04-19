@extends('layouts.app')

@section('template_title')
    {{ $sale->name ?? 'Show Sale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">



      


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                          <h3 class="text-center">  <span class="card-title">Reporte De Cierre Del Terminal</span> </h3>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bodega.registro') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Encargado:</strong>
                            {{$order[0]->encargado}}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $order[0]->fecha }}
                        </div>



                        <div class="form-group">
                            <strong>Total Capturas:</strong>
                            ${{ $order[0]->total }}
                        </div>



                        <div class="form-group">
                            <strong>10% Sueldos:</strong>
                            ${{ $order[0]->sueldos }}
                        </div>


                        <div class="form-group">
                            <strong>Número de Registro:</strong>
                            {{ $order[0]->id }}
                        </div>

                        
                        <div class="form-group">
                            <strong>Terminal:</strong>
                            {{ $order[0]->terminal }}
                        </div>
                       

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                    <th>Tipo Pago</th>
                                    <th>Número</th>
                                    <th>Total</th>
                                  
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($items as $item)

                                <tr>
                                    <td>{{$item->brand}}</td>    
                                    <td>{{$item->quantity}}</td>
                                    <td>${{$item->budget}}</td>
                                  

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
