@extends('layouts.template')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de razas</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('race.create') }}" class="btn btn-info" >Añadir raza</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-borded table-striped">
             <thead>
               <th>Nombre</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($races->count())
              @foreach($races as $race)
              <tr>
                <td>{{$race->name}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('RaceController@edit', $race->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('RaceController@destroy', $race->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach
               @else
               <tr>
                <td colspan="8">No existen razas actualmente...</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
      {{ $races->links() }}
    </div>
  </div>
</section>

@endsection
