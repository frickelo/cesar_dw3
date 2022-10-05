@include('app');
@include('menu');
<div class="container">
	<h1>Lista de Cursos</h1>
	<a class="btn pull-righ" href="{{route('cursos.create')}} "><button type="button" class="btn btn-primary">Nuevo</button></a>
	
	<form class="form-inline my-2 my-lg-0 float-right">
              <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
              <button class="btn btn-success" type="submit">Buscar</button>
              </form>
              <br>
<div class="table-responsive-sm">
	<table class="table table-hover" id="tabla">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Fecha de inicio</th>
				<th>Fecha de Fin</th>
				<th>Estado</th>
								
			</tr>
		</thead>
		<tbody>
			@foreach ($cursos as $a)
			<tr>
				<td>{{$a->nombre}}</td>
				<td>{{$a->descripcion}}</td>
				<td>{{$a->fecha_inicio}}</td>
				<td>{{$a->fecha_fin}}</td>
				<td>{{$a->estado}}</td>
				
			 <td>
			 <div class="btn-group">
			 	<a href="{{url('/cursos/'.$a->id.'/edit')}}">
			 	<input type="submit"  class="btn btn-warning" value="Editar">
			 	</a>
 
			   <form method="POST" action="{{ url("cursos/{$a->id}") }}">
			      @csrf
			      @method('DELETE')
			      <input type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro?')" value="Borrar">
			    </form>

				<a href="{{route('cursos.show', $a->id )}}"><input type="submit" class="btn btn-info" value="Ver"> </a>
                </div>
                </td>
            </tr>
			@endforeach
		</tbody>
	</table>
    <div class="d-flex justify-content-end">
    {{ $cursos->links() }}
    </div>
   </div> 
  </tbody>
 </div>
</div>