@extends('layouts.app')

@section('template_title')
    {{ $client->name ?? 'Show Client' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Client</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clients.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $client->name }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $client->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Rut:</strong>
                            {{ $client->rut }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $client->address }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $client->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $client->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
