@extends('layouts.app')

@section('title')
    Create Sale
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Sale</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cart.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            {!! Form::text('barcode', null , ['class' => 'form-input']) !!}
                            {!! Form::text('barcode', null , ['class' => 'form-input']) !!}

                        </form>
                    </div>


                    @forelse ($categories as $category )
                        
                    @empty
                        
                    @endforelse

                </div>
            </div>
        </div>
    </section>
@endsection
