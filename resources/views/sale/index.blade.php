@extends('layouts.app')

@section('template_title')
    Sale
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

            
                <div class="card">
                    @can('sale.Prat')
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                               <h3 >{{ __('Ventas Prat') }} </h3> 
                            </span>

                             <div class="">

                                @can('cart.list')
                                <a href="{{ route('cart.list') }}" class="btn btn-success btn-sm"  data-placement="left">
                                  {{ __('Crear Venta Prat') }}
                                </a>

                               

                      

                                  <form class="form-inline my-2 my-lg-0 ">

                                    <input  type="date" name="buscar" class="form-input" value="" placeholder="Search">
                                  
                                    <button class="btn btn-success my-2 my-sm-0 " type="submit">Buscar</buton>
                                    
                                    </form>

                                    @endcan

                               

                 
                              </div>
                        </div>

                        
          


                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif



                  

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
								
										<th>Vendedor</th>
										<th>Fecha Venta</th>
										<th>Iva</th>
										<th>Total</th>
										<th>Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sales as $sale)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										
											<td>{{ $sale->user->name }}</td>
											<td>{{ $sale->created_at }}</td>
											<td>{{ $sale->iva }}</td>
											<td>{{ $sale->total }}</td>
											<td>{{ $sale->status }}</td>

                                            <td>
                                              
                                                    <a class="btn btn-sm btn-primary " href="{{ route('sales.show',$sale->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    
                                                    @can('sale.boleta')
                                                    <a href="{{route('sale.boleta',$sale)}}" class="btn btn-sm btn-success"  ><i class="fa fa-fw fa-print"></i>Boleta</a>

                                                    @endcan

                                                    @can('sale.despacho')
                                                   <a href="{{route('sale.despacho',$sale)}}" class="btn btn-sm btn-success"><i class="fa fa-fw fa-print"></i>Despacho</a>
                                                    @endcan
                                                 
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {!! $sales->links() !!}
                    </div>

                    @endcan


                    <div class="card-footer">


                        
<body>
    <main role="main" class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Imprimir texto con acentos</h1>
                <p>Imprimir texto que puede llevar acentos o letras ñ, entre otros caracteres especiales</p>
                <a class="mb-2 btn btn-info btn-sm" href="../index.html">Ir al índice de los ejemplos</a>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group">
                    <select class="form-control" id="listaDeImpresoras"></select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" id="btnImprimir">Imprimir
                        en impresora seleccionada
                    </button>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <h2>Log</h2>
                <button class="btn btn-warning btn-sm" id="btnLimpiarLog">Limpiar
                    log
                </button>
                <pre id="estado"></pre>
            </div>
        </div>
    </main>

    <!-- Cargar el script conector -->
    <script src="{{asset('js/ConectorPlugin.js')}}"></script>
    <!-- Cargar el script del ejemplo -->
    <script type="text/javascript">
    
    const $estado = document.querySelector("#estado"),
        $listaDeImpresoras = document.querySelector("#listaDeImpresoras"),
        $btnLimpiarLog = document.querySelector("#btnLimpiarLog"),
        $btnImprimir = document.querySelector("#btnImprimir");
    
    const obtenerListaDeImpresoras = () => {
        loguear("Cargando lista...");
        ConectorPlugin.obtenerImpresoras()
            .then(listaDeImpresoras => {
                loguear("Lista cargada");
                listaDeImpresoras.forEach(nombreImpresora => {
                    const option = document.createElement('option');
                    option.value = option.text = nombreImpresora;
                    $listaDeImpresoras.appendChild(option);
                })
            })
            .catch(() => {
                loguear("Error obteniendo impresoras. Asegúrese de que el plugin se está ejecutando");
            });
    }
    
    const loguear = texto => $estado.textContent += (new Date()).toLocaleString() + " " + texto + "\n";
    const limpiarLog = () => $estado.textContent = "";
    
    $btnLimpiarLog.addEventListener("click", limpiarLog);
    
    
    $btnImprimir.addEventListener("click", async () => {
        let nombreImpresora = $listaDeImpresoras.value;
        if (!nombreImpresora) return loguear("Selecciona una impresora");
        const cadenaConAcentos = "María José come Ñampi\n";
        const respuestaAlImprimir = await new ConectorPlugin()
            .texto("Tratando de imprimir acentos sin forzar:\n")
            .texto(cadenaConAcentos)

            
             
            .texto("Ahora tratando de imprimir acentos, pero forzando:\n")
           
            /*
            Nota: solo hace falta llamar a "textoConAcentos" una vez, eso "habilita" los acentos
            y las siguientes llamadas a "text" ya deben soportar acentos
            */
            .textoConAcentos(cadenaConAcentos)
            .texto("Texto con acentos y centrado:")
            .establecerJustificacion(ConectorPlugin.Constantes.AlineacionCentro)
            .texto(cadenaConAcentos)
            .feed(3) // Dejar 3 saltos de línea. Esto es muy importante
            .cortar()
            .imprimirEn(nombreImpresora); // Siempre debes invocar a "imprimirEn" al final, pasando el nombre de la impresora
        if (respuestaAlImprimir === true) {
            loguear("Impreso correctamente");
        } else {
            loguear("Error. La respuesta es: " + respuestaAlImprimir);
        }
    });
    
    obtenerListaDeImpresoras();


 
    
    
    </script>
    </body>



                    </div>

                </div>

            

                <br>

                <div class="card">

                    @can('sale.salePalmeras')

                    <div class="card-header">
                      <span id="card_title">
                        <h3 >{{ __('Ventas Palmeras') }} </h3> 
                      </span>


                      @can('cart.palmeras')

                      <a href="{{ route('cart.list3') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                          {{ __('Crear Venta Palmeras') }}
                        </a>

                     
                        @endcan

                          <form class="form-inline my-2 my-lg-0 float-right ">

                        

                            <input  type="date" name="buscar2" class="form-input" value="" placeholder="Search">
                          
                            
                            <button class="btn btn-success my-2 my-sm-0 " type="submit">Buscar</buton>
                            
                            </form>
    
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Cliente</th>  
										<th>Vendedor</th>
										<th>Fecha Venta</th>
										<th>Iva</th>
										<th>Total</th>
										<th>Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($salesPalmeras as $sale)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
									
											<td>{{ $sale->user->name }}</td>
											<td>{{ $sale->created_at }}</td>
											<td>{{ $sale->iva }}</td>
											<td>{{ $sale->total }}</td>
											<td>{{ $sale->status }}</td>

                                            <td>
                                
                                                    <a class="btn btn-sm btn-primary " href="{{ route('sale.showPalmeras',$sale->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    
                                                    @can('sale.boleta2')
                                                    <a href="{{route('sale.boleta2',$sale)}}" class="btn btn-sm btn-success"><i class="fa fa-fw fa-print"></i>Boleta</a>

                                                    @endcan
                         
                                                    @can('sale.despacho2')
                                                   <a href="{{route('sale.despacho2',$sale)}}" class="btn btn-sm btn-success"><i class="fa fa-fw fa-print"></i>Despacho</a>
                                                    @endcan
                                                    
                                                
                                             
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {!! $salesPalmeras->links() !!}
                    </div>

                    @endcan

                   
            </div>


    



            <br>


              <div class="card">

        

                <div class="card-header">

                    <h3 class="text-center">Sala Ventas Prat</h3>

                   

                    <a class="btn btn-primary" href="{{route('cart.salaVentaPrat')}}">Sala Ventas Prat</a>


                    <form class="form-inline my-2 my-lg-0 float-right ">

                        

                        <input  type="text" name="buscar3" class="form-input" value="" placeholder="Search">
                      
                        
                        <button class="btn btn-success my-2 my-sm-0 " type="submit">Buscar</buton>
                        
                        </form>
                  


                </div>


                

        

                <div class="card-body">

                    



                    <div class="table-responsive">
                    <table class="table table-striped table-hover">

                        <thead>

                            <tr>
                                    <th>ID</th>
                                    <th>ProductoID</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                               
                                <th>Total</th>

                                <th>Acciones</th>
                             



                            </tr>


                            <tbody>
                                @foreach ($salaV1 as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->producto}}</td>
                                        <td>{{$item->barcode}}</td>
                                        <td>{{$item->nombre}}</td>
                                        <td>{{$item->total}}</td>
                                      
                             
                                        <td>

                                            <a class="btn btn-sm btn-primary " href="{{ route('sale.SalaPrat',[$item->id,$item->producto]) }}"><i class="fa fa-fw fa-eye"></i> Show</a>


                                        </td>


                                    </tr>
                                @endforeach


                            </tbody>

                        </thead>

                    </table>


            </div>
                </div>

              </div>


              <!-- fin sala ventas -->
<br>


              <div class="card">


                <div class="card-header">


                    <h3 class="text-center">Sala Ventas Palmeras</h3>

                    <a class="btn btn-primary" href="{{route('cart.salaVentaPalmeras')}}">Sala ventas Palmeras</a>


                    <form class="form-inline my-2 my-lg-0 float-right ">

                        

                        <input  type="text" name="buscar4" class="form-input" value="" placeholder="Search">
                      
                        
                        <button class="btn btn-success my-2 my-sm-0 " type="submit">Buscar</buton>
                        
                        </form>


                </div>


                <div class="card-body">


                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
    
                            <thead>
    
                                <tr>
                                        <th>ID</th>
                                        <th>ProductoID</th>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                   
                                    <th>Total</th>
    
                                    <th>Acciones</th>
                                 
    
    
    
                                </tr>
    
    
                                <tbody>
                                    @foreach ($salaV2 as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->producto}}</td>
                                            <td>{{$item->barcode}}</td>
                                            <td>{{$item->nombre}}</td>
                                            <td>{{$item->total}}</td>
                                          
                                 
                                            <td>
    
                                                <a class="btn btn-sm btn-primary " href="{{ route('sale.SalaPalmeras',[$item->id,$item->producto]) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                        
    
                                            </td>
    
    
                                        </tr>
                                    @endforeach
    
    
                                </tbody>
    
                            </thead>
    
                        </table>
    
    
                </div>




                </div>



              </div>
               
            </div>
        </div>
    </div>
@endsection
