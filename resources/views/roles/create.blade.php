@extends('layouts.app')

@section('content')

<!--
<nav aria-label="breadcrumb">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Panel administrador</a></li>
        <li class="breadcrumb-item"><a href="{{route('sale.index')}}">Ventas</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detalles de venta</li>
    </ul>
</nav>

-->
<h3>Crear nuevo rol</h3>

<div class="card">

    <div class="card-body">

{!! Form::open(['route'=>'roles.store']) !!}


@include('roles.partials.form')

{!! Form::submit('Crear Rol',['class'=>'btn btn-primary']) !!}


{!! Form::close() !!}

    </div>

  </div>


@endsection