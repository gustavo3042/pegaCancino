@extends('layouts.app')

@section('template_title')
    Purchase
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                            <h3>   {{ __('Compras Prat') }} </h3> 
                            </span>

                             <div class="float-right">
                                 <a href="{{route('cart.list2')}}" class="btn btn-primary btn-sm float-right"  data-placement="left">Compras local Prat</a>


                                 <a href="{{route('cart.list4')}}" class="btn btn-success btn-sm float-right"  data-placement="left">Compras local Palmeras</a>

                                 <!--
                                <a href="{{ route('purchase.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar a mano') }}
                                </a>



                            -->
                            <form class="form-inline my-2 my-lg-0 float-right ">

                        

                                <input  type="date" name="buscar" class="form-control" value="" placeholder="Ingrese Codigo">
                              
                                
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

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										
										<th>Encargado</th>
										<th>Fecha Compra</th>
										<th>Iva</th>
										<th>Total</th>
										<th>Status</th>
										

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchases as $purchase)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											
											<td>{{ $purchase->user->name }}</td>
											<td>{{ $purchase->created_at }}</td>
											<td>{{ $purchase->iva }}</td>
											<td>{{ $purchase->total }}</td>
											<td>{{ $purchase->status }}</td>
											

                                            <td>
                                                <form action="{{ route('purchase.destroy',$purchase->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('purchase.show',$purchase->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('purchase.edit',$purchase->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    <a href="{{route('purchase.pdf',$purchase)}}" class="btn btn-sm btn-success"><i class="fas fa-file-pdf"></i>Pdf</a>
                                                    @csrf
                                                    @method('DELETE')
                                                   <!-- <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button> -->
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {!! $purchases->links() !!}
                    </div>


                    @can('cart.create2')
                    <div class="card">

                        <div class="card-header">

                            <span id="card_title">
                                <h3>   {{ __('Compras Palmeras') }} </h3> 
                                </span>

                            <form class="form-inline my-2 my-lg-0 float-right ">

                        

                                <input  type="date" name="buscar2" class="form-control" value="" placeholder="Ingrese Codigo">
                              
                                
                                <button class="btn btn-success my-2 my-sm-0 " type="submit">Buscar</buton>
                                
                                </form>

                        </div>

                     <div class="card-body">

                        

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										
										<th>Encargado</th>
										<th>Fecha Compra</th>
										<th>Iva</th>
										<th>Total</th>
										<th>Status</th>
										

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchasePalmeras as $purchase)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											
											<td>{{ $purchase->user->name }}</td>
											<td>{{ $purchase->created_at }}</td>
											<td>{{ $purchase->iva }}</td>
											<td>{{ $purchase->total }}</td>
											<td>{{ $purchase->status }}</td>
											

                                            <td>
                                          
                                                    <a class="btn btn-sm btn-primary " href="{{ route('purchase.show2',$purchase->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('purchase.edit',$purchase->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    <a href="{{route('purchase.pdf2',$purchase)}}" class="btn btn-sm btn-success"><i class="fas fa-file-pdf"></i>Pdf</a>
                                                
                                                   
                                                 <!--  <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button> -->
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>


                    </div>

                    {!! $purchasePalmeras->links() !!}


                    @endcan

                </div>



                </div>
               
            </div>
        </div>
    </div>
@endsection
