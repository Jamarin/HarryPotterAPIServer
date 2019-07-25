@extends('layouts.template')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Characters</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('character.create') }}" class="btn btn-info" >Añadir Character</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($characters->count())
              @foreach($characters as $character)
              <tr>
                <td>{{$character->name}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('CharacterController@edit', $character->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('CharacterController@destroy', $character->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
      {{ $characters->links() }}
    </div>
  </div>
</section>

@endsection
