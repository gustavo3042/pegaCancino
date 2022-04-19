@extends('layouts.app')


@section('content')
    <main class="my-2">


        @if (Session::has('Mensaje'))
        <div class="alert alert-success">
        <strong>{{Session::get('Mensaje')}}</strong>
        </div>
        @endif

        <div class="card card-default">
            <div class="card-header">
                <span class="card-title">Agregar producto</span>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('product.addTocambio') }}" role="form" enctype="multipart/form-data">
                    @csrf
                    {!! Form::text('barcode', null, ['class' => 'form-input', 'id' => 'barcode']) !!}

                  
                   
                        
                      
                
            
                    
                </form>
            </div>
        </div>


        <div class="container px-6 mx-auto">
            <div class="flex justify-center my-6">
                <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                    @if ($message = Session::get('success'))
                        <div class="p-4 mb-3 bg-green-400 rounded">
                            <p class="text-green-800">{{ $message }}</p>
                        </div>
                    @endif
                    <h3 class="text-3xl text-bold">Carro</h3>
                    <div class="table-responsive">
                        <table class="table" cellspacing="0">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nombre</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                   
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $item)
                                    <tr>
                                        <td>
                                            <img src="{{ $item->attributes->image }}" >
                                        </td>
                                        <td>
                                             <p>{{ $item->name }}</p>
                                        </td>
                                        <td>
                                            <div>
                                                <div>

                                                    <form action="{{ route('cart.update9') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                                        <input type="number" name="quantity" value="{{ $item->quantity }}"
                                                            class="form-control" />
                                                           
                                                        <button type="submit"
                                                            class="btn btn-primary">Actualizar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>
                                                ${{ $item->price }}
                                            </span>
                                        </td>

                                      
                                        <td>
                                            <form action="{{ route('cart.removeCambio') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $item->id }}" name="id">
                                                <button class="btn btn-warning">x</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div>
                            <Strong> Total </Strong>: ${{ Cart::getTotal() }}
                            <br>
                            <strong>Iva</strong>: ${{Cart::getTotal() * 0.19}}
                            <br>
                            <strong>Subtotal</strong>: ${{Cart::getTotal() + Cart::getTotal() * 0.19 }}

                            
                        </div>
                <!--
                      <form action="{{route('cart.descuento')}}" method="POST">
                        @csrf
                        <input type="number" name="descuento" placeholder="Ingrese Descuento"
                        class="form-control" />

                        <input class="btn btn-success" type="submit" value="INGRESAR DESCUENTO">
                      </form>
                    -->
                        <br>
                        <div >

                            <div class="pull-left">
                                <a class=" btn btn-success " href="{{ route('product.saleCambio') }}" > Crear Venta </a>

                            </div>

                            <form action="{{ route('cart.clearsCambio') }}" method="POST">
                                @csrf
                                <button class="btn btn-warning">Limpiar Carro</button>
                            </form>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript">
        function setFocusToTextBox() {
            document.getElementById("barcode").focus();
           
        }

        function ready(fn) {
            if (document.readyState != 'loading') {
                fn();
            } else if (document.addEventListener) {
                document.addEventListener('DOMContentLoaded', fn);
            } else {
                document.attachEvent('onreadystatechange', function() {
                    if (document.readyState != 'loading')
                        fn();
                });
            }
        }

        // test
        window.ready(function() {
            setFocusToTextBox();
        });
    </script>


@endsection
