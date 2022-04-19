


<div>


    <div class="card">
  
  
        <div class="card-header">


            <a class="btn btn-secondary  mb-4 " href="{{route('users.create')}}">Nueva orden</a>
          
            <input wire:model="search" class="form-control" placeholder="Ingrese dato">
          
          </div>
  
  @if ($users->count())
  
  
      <div class="card-body">
  
  
  <table class="table table-striped">
  
  
    <thead>
  
      <tr>
  
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th></th>
  
      </tr>
    </thead>
  
  
    <tbody>
  
    @foreach ($users as $user)
      <tr>
        <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
  
  
              <td width="10px">
  
  <a class="btn btn-primary" href="{{route('users.edit',$user)}}">Editar</a>
  
              </td>
      </tr>
  
    @endforeach
  
    </tbody>
  
  
  
  </table>
  
  
  
      </div>
  
      <div class="card-footer">
  
  
  {{$users->links()}}
      </div>
  
    @else
  
  
      <div class="card-body">
  
  <strong>No hay registros</strong>
  
      </div>
  
    @endif
  
    </div>
  
  </div>
  