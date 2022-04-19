@extends('layouts.app')
@section('title','Reporte por rango de fecha')
@section('styles')
<style type="text/css">
    .unstyled-button {
        border: none;
        padding: 0;
        background: none;
      }
</style>

@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Reporte Por Rango Cierre Del Terminal
        </h3>
      
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                 

                    {!! Form::open(['route'=>'report.results', 'method'=>'POST']) !!}

                    <div class="row ">

                        <div class="col-12 col-md-3">
                            <span>Fecha inicial</span>
                            <div class="form-group">
                                <input class="form-control" type="date"
                                value="{{old('fecha_ini')}}"
                                name="fecha_ini" id="fecha_ini">
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <span>Fecha final</span>
                            <div class="form-group">
                                <input class="form-control" type="date"
                                value="{{old('fecha_fin')}}"
                                name="fecha_fin" id="fecha_fin">
                            </div>
                        </div>

                        <div class="col-12 col-md-3 text-center mt-4">
                            <div class="form-group">
                               <button type="submit" class="btn btn-primary btn-sm">Consultar</button>
                               <a class="btn btn-dark" href="{{route('bodega.registro')}}">volver</a>
                            </div>
                        </div>

                      

                       

                    </div>

                    <br>

               


                    
                    {!! Form::close() !!}

                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fecha</th>
                                    <th>Total</th>
                                    <th>Sueldos</th>
                                   
                                </tr>
                            </thead>








                            <tbody>
                                @foreach ($order as $sale)
                                <tr>
                                   
                                      <td>{{$sale->id}}</td>
                                   
                                    <td>
                                   {{$sale->fecha}}
                                    </td>
                                    <td>{{$sale->total}}</td>
                                    <td>{{$sale->sueldos}}</td>
                                  
                                </tr>
                                @endforeach
                            </tbody>

                        

                        </table>
                    </div>
                </div>

                <br>
               
            </div>

            <div style="padding: 30px;" class="card-footer">
                   
                <div class="row">
                  
                    <div class="col-12 col-md-3 text-center">
                        <span>Total de ingresos: <b> </b></span>
                        <div class="form-group">



                            <strong>s/ {{$total}}</strong>

                            
                        </div>
                    </div>

                    <div class="col-12 col-md-3 text-center">
                        <span>10% Sueldos: <b> </b></span>
                        <div class="form-group">
                            <strong>{{$sueldos}}</strong>
                        </div>
                    </div>


                    <div class="col-12 col-md-4 text-center">
                        <span>Cantidad de registros: <b></b></span>
                        <div class="form-group">
                            <strong>{{$order->count()}}</strong>
                        </div>
                    </div>


                
                </div>

                <br>

                

            </div>  

            <br>

            <div class="card-footer">


                <div class="row">


                    <div class="col-12 col-md-4 text-center">
                        <span>Total Credito: <b></b></span>
                        <div class="form-group">
                            <strong>{{$credito->count()}}</strong>
                        </div>
                    </div>


                    <div class="col-12 col-md-4 text-center">
                        <span>Total Red Compra: <b></b></span>
                        <div class="form-group">
                            <strong>{{$redCompra->count()}}</strong>
                        </div>
                    </div>


                    <div class="col-12 col-md-4 text-center">
                        <span>Total Red Compra: <b></b></span>
                        <div class="form-group">
                            <strong>{{$efectivo->count()}}</strong>
                        </div>
                    </div>


                </div>


            </div>


        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
<script>
    window.onload = function(){
        var fecha = new Date(); //Fecha actual
        var mes = fecha.getMonth()+1; //obteniendo mes
        var dia = fecha.getDate(); //obteniendo dia
        var ano = fecha.getFullYear(); //obteniendo año
        if(dia<10)
          dia='0'+dia; //agrega cero si el menor de 10
        if(mes<10)
          mes='0'+mes //agrega cero si el menor de 10
        document.getElementById('fecha_fin').value=ano+"-"+mes+"-"+dia;
      }
</script>

@endsection
