@extends('layouts.app')

@section('content')

<h3>Productos con bajo stock</h3>

<a class="btn btn-primary" href="{{route('bodegas.index')}}">Volver</a>








<div class="card">

    <div class="card-header">

        <h3>Coral</h3>



    </div>


  @if($Coral->count())

  <div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Coral  as $product)
                    <tr>
                       

                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>

          

            @elseif($Coral->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

           @else


           <div class="alert alert-success">

            <strong>Productos con mas de 509 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


 </div>


</div>




<div class="card">

    <div class="card-header">

        <h3>Supremas</h3>



    </div>
    @if($Suprema->count())
    <div class="card-body">


        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                       

                      
                        <th>Barcode</th>
                        <th>Color</th>
                        <th>Stock</th>
                    
                        <th>Price</th>
                        
                       

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Suprema as $product)
                        <tr>
                           

                          
                            <td>
                                <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                            </td>
                            <td>{{ $product->color }}</td>
                            <td>{{ $product->stock }}</td>
                        
                        
                            <td>{{ $product->price }}</td>
                        
                            
                            

                            
                        </tr>
                    @endforeach
                </tbody>



                @elseif($Suprema->count() <= 0)

                <div class="alert alert-danger">
    
                    <strong>No hay productos ingresados</strong>
                     
                   </div>

                @else

                <div class="alert alert-success">
 
                 <strong>Productos con mas de 50 obillos</strong>
                  
                </div>
 
                 @endif


            </table>
        </div>


    </div>


</div>



<div class="card">

    <div class="card-header">

        <h3>Crebel</h3>



    </div>

    @if($Crebel->count())

    <div class="card-body">


        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                       

                       
                        <th>Barcode</th>
                        <th>Color</th>
                        <th>Stock</th>
                    
                        <th>Price</th>
                        
                       

                        <th></th>
                    </tr>
                </thead>

               
                <tbody>

                      
                    @foreach ($Crebel as $product)
                        <tr>
                           

                           
                            <td>
                                <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                            </td>
                            <td>{{ $product->color }}</td>
                            <td>{{ $product->stock }}</td>
                        
                        
                            <td>{{ $product->price }}</td>
                        
                            
                            

                            
                        </tr>
                    @endforeach
                </tbody>


                @elseif($Crebel->count() <= 0)

                <div class="alert alert-danger">
    
                    <strong>No hay productos ingresados</strong>
                     
                   </div>

                @else

               <div class="alert alert-success">

                <strong>Productos con mas de 50 obillos</strong>
                 
               </div>

                @endif

            </table>
        </div>


    </div>


</div>




<div class="card">

    <div class="card-header">

        <h3>Chilote</h3>



    </div>


@if($Chilote->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Chilote as $product)
                    <tr>
                       

                        
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Chilote->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>




<div class="card">

    <div class="card-header">

        <h3>Sureña</h3>



    </div>


@if($Surena->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Surena as $product)
                    <tr>
                       

                     
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>

            @elseif($Surena->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>





<div class="card">

    <div class="card-header">

        <h3>Versatil</h3>



    </div>


@if($Versatil->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Versatil as $product)
                    <tr>
                       

                      
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Versatil->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>








<div class="card">

    <div class="card-header">

        <h3>Suprema 40GR</h3>



    </div>


@if($Suprema_40GR->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Suprema_40GR as $product)
                    <tr>
                       

                     
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Suprema_40GR->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>



<div class="card">

    <div class="card-header">

        <h3>Bebe Maxi</h3>



    </div>


@if($Baby_Maxi->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

            
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Baby_Maxi as $product)
                    <tr>
                       

                      
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>



            @elseif($Baby_Maxi->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>


            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>





<div class="card">

    <div class="card-header">

        <h3>Pintitas</h3>



    </div>


@if($Pintitas->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Pintitas as $product)
                    <tr>
                       

                      
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Pintitas->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>


            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>




<div class="card">

    <div class="card-header">

        <h3>Dulce Algodon</h3>



    </div>


@if($Dulce_Algodon->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Dulce_Algodon as $product)
                    <tr>
                       

                        
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Dulce_Algodon->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>


            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>





<div class="card">

    <div class="card-header">

        <h3>Hilo Ibis</h3>



    </div>


@if($Ibis->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                    
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Ibis as $product)
                    <tr>
                       

                   
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Ibis->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>




<div class="card">

    <div class="card-header">

        <h3>Algodon 100% Reginella</h3>



    </div>


@if($Algodon_100_Reginella->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Algodon_100_Reginella as $product)
                    <tr>
                       

                     
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Algodon_100_Reginella->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>




<div class="card">

    <div class="card-header">

        <h3>Hilo Sol</h3>



    </div>


@if($Sol->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Sol as $product)
                    <tr>
                       

                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Sol->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>





<div class="card">

    <div class="card-header">

        <h3>Tiara</h3>



    </div>


@if($Tiara->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Tiara as $product)
                    <tr>
                       

                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Tiara->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>




<div class="card">

    <div class="card-header">

        <h3>Mamba</h3>



    </div>


@if($Mamba->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Mamba as $product)
                    <tr>
                       

                       
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Mamba->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>





<div class="card">

    <div class="card-header">

        <h3>Dacolor</h3>



    </div>


@if($Dacolor->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Dacolor as $product)
                    <tr>
                       

                       
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Dacolor->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>





<div class="card">

    <div class="card-header">

        <h3>Dalai Lana</h3>



    </div>


@if($Dalai_Lana->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                   
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Dalai_Lana as $product)
                    <tr>
                       

                      
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Dalai_Lana->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>





<div class="card">

    <div class="card-header">

        <h3>Flora</h3>



    </div>


@if($Flora->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Flora as $product)
                    <tr>
                       

                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Flora->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>




<div class="card">

    <div class="card-header">

        <h3>Lurex</h3>



    </div>


@if($Lurex->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

               
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Lurex as $product)
                    <tr>
                       

                      
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Lurex->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>






<div class="card">

    <div class="card-header">

        <h3>Mamut</h3>



    </div>


@if($Mamut->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                 
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Mamut as $product)
                    <tr>
                       

                       
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Mamut->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>





<div class="card">

    <div class="card-header">

        <h3>Sultan</h3>



    </div>


@if($Sultan->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

             
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Sultan as $product)
                    <tr>
                       

                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Sultan->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>





<div class="card">

    <div class="card-header">

        <h3>Spray</h3>



    </div>


@if($Spray->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                   
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Spray as $product)
                    <tr>
                       

                       
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>

            @elseif($Spray->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>





<div class="card">

    <div class="card-header">

        <h3>Kinder Bebe</h3>



    </div>


@if($Kinder_Bebe->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                 
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Kinder_Bebe as $product)
                    <tr>
                       

                        
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>

            @elseif($Kinder_Bebe->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>




<div class="card">

    <div class="card-header">

        <h3>Algodon Reciclado</h3>



    </div>


@if($Algodon_100_Reciclado->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                 
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Algodon_100_Reciclado as $product)
                    <tr>
                       

                       
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>

            @elseif($Algodon_100_Reciclado->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>





<div class="card">

    <div class="card-header">

        <h3>Macrame 3MM</h3>



    </div>


@if($Algodon_MacrameMM->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Algodon_MacrameMM  as $product)
                    <tr>
                       

                       
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>

            @elseif($Algodon_MacrameMM ->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>





<div class="card">

    <div class="card-header">

        <h3>Latina</h3>



    </div>


@if($Latina->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Latina  as $product)
                    <tr>
                       

                       
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Latina->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>




<div class="card">

    <div class="card-header">

        <h3>Boom Batik</h3>



    </div>


@if($Boom_Batik->count())

<div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                    
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Boom_Batik  as $product)
                    <tr>
                       

                        
                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>

            @elseif($Boom_Batik->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>






<div class="card">

    <div class="card-header">

        <h3>Anakena</h3>



    </div>


  @if($Anakena->count())

  <div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Anakena  as $product)
                    <tr>
                       

                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>

            @elseif($Anakena->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>

<div class="card">

    <div class="card-header">

        <h3>Chanille</h3>



    </div>


  @if($Chanille->count())

  <div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Chanille  as $product)
                    <tr>
                       

                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Chanille->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>




<div class="card">

    <div class="card-header">

        <h3>Trapito</h3>



    </div>


  @if($Trapito->count())

  <div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Trapito  as $product)
                    <tr>
                       

                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Trapito->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>




<div class="card">

    <div class="card-header">

        <h3>Super Economica</h3>



    </div>


  @if($Super_Economica->count())

  <div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Super_Economica  as $product)
                    <tr>
                       

                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Super_Economica->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>





<div class="card">

    <div class="card-header">

        <h3>Adora</h3>



    </div>


  @if($Adora->count())

  <div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Adora  as $product)
                    <tr>
                       

                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Adora->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>



<div class="card">

    <div class="card-header">

        <h3>Fresquita M</h3>



    </div>


  @if($Fresquita_M->count())

  <div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Fresquita_M  as $product)
                    <tr>
                       

                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>

            @elseif($Fresquita_M->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>



<div class="card">

    <div class="card-header">

        <h3>Fresquita</h3>



    </div>


  @if($Fresquita->count())

  <div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Fresquita  as $product)
                    <tr>
                       

                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>

            @elseif($Fresquita->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>



            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>



<div class="card">

    <div class="card-header">

        <h3>Nativa</h3>



    </div>


  @if($Nativa->count())

  <div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Nativa  as $product)
                    <tr>
                       

                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Nativa->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


<div class="card">

    <div class="card-header">

        <h3>Macrame 500 Grs</h3>



    </div>


  @if($Macrame_500Grs->count())

  <div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Macrame_500Grs  as $product)
                    <tr>
                       

                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>

            @elseif($Macrame_500Grs->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>



<div class="card">

    <div class="card-header">

        <h3>Algodon Color</h3>



    </div>


  @if($AlgodonColor->count())

  <div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($AlgodonColor  as $product)
                    <tr>
                       

                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($AlgodonColor->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>




<div class="card">

    <div class="card-header">

        <h3>Crebel 50 Grs</h3>



    </div>


  @if($Crebel50Grs->count())

  <div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Crebel50Grs  as $product)
                    <tr>
                       

                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>

            @elseif($Crebel50Grs->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>


            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>




<div class="card">

    <div class="card-header">

        <h3>Ideal 40 Grs</h3>



    </div>


  @if($Ideal40Grs->count())

  <div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($Ideal40Grs  as $product)
                    <tr>
                       

                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>


            @elseif($Ideal40Grs->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>



<div class="card">

    <div class="card-header">

        <h3>Trapito M</h3>



    </div>


  @if($TrapitoM->count())

  <div class="card-body">


    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                   

                  
                    <th>Barcode</th>
                    <th>Color</th>
                    <th>Stock</th>
                
                    <th>Price</th>
                    
                   

                    <th></th>
                </tr>
            </thead>

           
            <tbody>

                  
                @foreach ($TrapitoM  as $product)
                    <tr>
                       

                        <td>
                            <div class="mb-3"> {!! DNS1D::getBarcodeHTML($product->barcode, 'C128') !!} </div>
                        </td>
                        <td>{{ $product->color }}</td>
                        <td>{{ $product->stock }}</td>
                    
                    
                        <td>{{ $product->price }}</td>
                    
                        
                        

                        
                    </tr>
                @endforeach
            </tbody>

            @elseif($TrapitoM->count() <= 0)

            <div class="alert alert-danger">

                <strong>No hay productos ingresados</strong>
                 
               </div>

            @else

           <div class="alert alert-success">

            <strong>Productos con mas de 50 obillos</strong>
             
           </div>

            @endif

        </table>
    </div>


</div>


</div>







@endsection