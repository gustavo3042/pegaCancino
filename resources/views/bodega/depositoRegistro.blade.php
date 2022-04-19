@extends('layouts.app')


@section('content')


<div class="card">



<div class="card-header">


    <h3 class="text-center">REGISTROS DE DEPOSITOS</h3>

  <br>
    <a class="btn btn-dark" href="{{route('bodega.deposito')}}">Generar Depósito</a>

    <a class="btn btn-dark" href="{{route('bodega.reports_dateDep')}}">Reporte Depósito</a>

    <form class="form-inline my-2 my-lg-0 float-right ">



        <input  type="date" name="buscar" class="form-input" value="" placeholder="Ingrese Codigo">
      
        
        <button class="btn btn-success my-2 my-sm-0 " type="submit">Buscar</buton>

        </form>

</div>


@if (Session::has('danger'))

<div class="alert alert-danger" role="alert">


{{Session::get('danger')}}

</div>

@endif


<div class="card-body">



    <div class="table-responsive">
        <table class="table table-striped table-dark">
            <thead class="thead">
                <tr>
                    <th>Encargado</th>
                    <th>Fecha</th>
                    <th>Total</th>
                

                    <th>Acciones</th>
                
                </tr>
            </thead>
            <tbody>
               @foreach ($most as $item)
                   
               <tr>


            <td>{{$item->encargado}}</td>
            <td>{{$item->fecha}}</td>
            <td>${{$item->total}}</td>
          


            <td>
<a class="btn btn-secondary" href="{{route('bodega.showDeposito',$item->id)}}">Ver</a>


<a class="btn btn-secondary" href="{{route('bodega.boleta2',$item->id)}}">PDF</a>

            </td>

            

               

            

               </tr>

               @endforeach
               
            </tbody>
        </table>
    </div>



</div>

</div>

@endsection