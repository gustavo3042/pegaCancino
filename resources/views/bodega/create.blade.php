@extends('layouts.app')

@section('template_title')
    Create Product
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                       <h3> <span class="card-title">Crear producto para bodega Palmeras</span> </h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('bodegas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('bodega.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
