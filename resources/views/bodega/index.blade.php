@extends('layouts.app')



@section('template_title')
    Product
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                               <h3> {{ __('Bodega Palmeras') }}</h3>
                            </span>

                            <div class="float-right">


                               

                                @can('bodegas.create')

                                <a href="{{ route('bodegas.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
                                </a>

                                @endcan

                                @can('bodegas.reports')

                                <a href="{{ route('bodegas.reports') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                    {{ __('Productos con stock bajo') }}
                                  </a>

                               
                                  @endcan

                                  <a class="btn btn-dark" href="{{route('bodega.registro')}}">Registro de Cierre</a>

                                <form class="form-inline my-2 my-lg-0 float-right ">

                        

                                    <input  type="search" name="buscar" class="form-input" value="" placeholder="Ingrese Codigo">
                                  
                                    
                                    <button class="btn btn-success my-2 my-sm-0 " type="submit">Buscar</buton>
                                    
                                    </form>


                                    


                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="container mt-4">

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Name</th>
                                        <th>Barcode</th>
                                        <th>Color</th>
                                        <th>Stock</th>
                                       
                                       
                                      
                                        <th>Price</th>
                                        <th>Cantidad Dinero</th>
                                      
                                        <th>Categoria</th>
                                     

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bodegas as $bodega)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $bodega->name }}</td>
                                            <td>
                                                <div class="mb-3"> {!! DNS1D::getBarcodeHTML($bodega->barcode, 'C128') !!} </div>
                                            </td>
                                            <td>{{ $bodega->color }}</td>
                                            <td>{{ $bodega->stock }}</td>
                                            
                                      
                                          
                                            <td>{{ $bodega->price }}</td>

                                            <td>{{$bodega->price * $bodega->stock}}</td>
                                           
                                            <td>{{ $bodega->category->name }}</td>
                                       

                                            <td>
                                                <form action="{{ route('bodegas.destroy', $bodega->id) }}" method="POST">

                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('bodegas.show', $bodega->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Show</a>

                                                        @can('bodegas.edit')    
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('bodegas.edit', $bodega->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Edit</a>
                                                            @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('bodegas.destroy')<!--
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> Delete</button> -->

                                                            @endcan
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $bodegas->links() !!}
            </div>

            <br>




          


            <div class="card ">

                <div class="card-header">

                    <h3 class="text-center">TOTAL DE OBILLOS POR TIPO DE LANA</h3>
                </div>


                <div class="card-body">

                    <table class="table table-striped table-hover">

                        
                        <tr>

                            <th>Total Obillos Suprema: {{$Supremas}}</th>
                        </tr>


                       



                        <tr>

                            <th>Total Obillos Crebel: {{$Crebel}}</th>
                        </tr>


                        <tr>

                            <th>Total Obillos Chilote: {{$Chilote}}</th>
                        </tr>


                        <tr>

                            <th>Total Obillos Sureña: {{$Surena}}</th>
                        </tr>


                        
                        <tr>

                            <th>Total Obillos Versatil: {{$Versatil}}</th>
                        </tr>


                        <tr>

                            <th>Total Obillos Baby Maxi: {{$BabyMaxi}}</th>
                        </tr>


                        <tr>

                            <th>Total Obillos Pintitas: {{$Pintitas}}</th>
                        </tr>
                        


                        <tr>

                            <th>Total Obillos Dulce Algodon: {{$Dulce_Algodon}}</th>
                        </tr>

                        <tr>

                            <th>Total Obillos Ibis: {{$Ibis}}</th>
                        </tr>


                        
                        <tr>

                            <th>Total Obillos Sol: {{$Sol}}</th>
                        </tr>


                        
                        <tr>

                            <th>Total Obillos Tiara: {{$Tiara}}</th>
                        </tr>


                        
                        <tr>

                            <th>Total Obillos Mamba: {{$Mamba}}</th>
                        </tr>


                        <tr>

                            <th>Total Obillos Dacolor: {{$Dacolor}}</th>
                        </tr>


                        <tr>

                            <th>Total Obillos Dalai Lana: {{$Dalai_Lana}}</th>
                        </tr>


                        <tr>

                            <th>Total Obillos Flora: {{$Flora}}</th>
                        </tr>


                        <tr>

                            <th>Total Obillos Lurex: {{$Lurex}}</th>
                        </tr>

                        <tr>

                            <th>Total Obillos Mamut: {{$Mamut}}</th>
                        </tr>


                        <tr>

                            <th>Total Obillos Spray: {{$Spray}}</th>
                        </tr>


                        <tr>

                            <th>Total Obillos Algodon Reciclado: {{$Algodon_100_Reciclado}}</th>
                        </tr>


                        <tr>

                            <th>Total Obillos Macrame 3MM: {{$Macrame3MM}}</th>
                        </tr>

                        <tr>

                            <th>Total Obillos Latina: {{$Latina}}</th>
                        </tr>


                        <tr>

                            <th>Total Obillos Boom Batik: {{$Boom_Batik}}</th>
                        </tr>


                        <tr>

                            <th>Total Obillos Anakena: {{$Anakena}}</th>
                        </tr>


                        <tr>

                            <th>Total Obillos Coral: {{$Coral}}</th>
                        </tr>

                        <tr>

                            <th>Total Obillos Chanille: {{$Chanille}}</th>
                        </tr>

                        <tr>

                            <th>Total Obillos Trapito: {{$Trapito}}</th>
                        </tr>

                        <tr>

                            <th>Total Obillos Super Economico: {{$Super_Economica}}</th>
                        </tr>


                        <tr>

                            <th>Total Obillos Adora: {{$Adora}}</th>
                        </tr>


                        <tr>

                            <th>Total Obillos Fresquita: {{$Fresquita}}</th>
                        </tr>

                        
                        <tr>

                            <th>Total Obillos Fresquita M: {{$FresquitaM}}</th>
                        </tr>


                        <tr>

                            <th>Total Obillos Macrame 500 grs: {{$Macrame500Grs}}</th>
                        </tr>

                   

                    <tr>

                        <th>Total Obillos Nativa: {{$Nativa}}</th>
                    </tr>


                    <tr>

                        <th>Total Obillos Crebel 50Grs: {{$Crebel50Grs}}</th>
                    </tr>


                    <tr>

                        <th>Total Obillos Algodon Color: {{$AlgodonColor}}</th>
                    </tr>


                    <tr>

                        <th>Total Obillos Ideal 40 Grs: {{$Ideal40Grs}}</th>
                    </tr>


                    <tr>

                        <th>Total Obillos Trapito M: {{$TrapitoM}}</th>
                    </tr>



                    

                    </table>
                    

                  

                </div>


            </div>
        </div>
    </div>
@endsection
