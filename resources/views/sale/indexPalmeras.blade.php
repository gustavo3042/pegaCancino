

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                    <th>No</th>
                    
                <!--	<th>Cliente</th>  -->
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
                        
                    <!--	<td>{{ $sale->client_id }}</td> -->
                        <td>{{ $sale->user->name }}</td>
                        <td>{{ $sale->date }}</td>
                        <td>{{ $sale->iva }}</td>
                        <td>{{ $sale->total }}</td>
                        <td>{{ $sale->status }}</td>

                        <td>
                            <form action="{{ route('sales.destroy',$sale->id) }}" method="POST">
                                <a class="btn btn-sm btn-primary " href="{{ route('sales.show',$sale->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                
                                @can('sale.boleta')
                                <a href="{{route('sale.boleta',$sale)}}" class="btn btn-sm btn-success"><i class="fa fa-fw fa-print"></i>Boleta</a>

                                @endcan
                               <!-- <a class="btn btn-sm btn-success" href="{{ route('sales.edit',$sale->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a> -->
                                @can('sale.despacho')
                               <a href="{{route('sale.despacho',$sale)}}" class="btn btn-sm btn-success"><i class="fa fa-fw fa-print"></i>Despacho</a>
                                @endcan
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

