@include('app');
@include('menu');
<div class="container">
	<h1>Lista de Cursos</h1>
	<a class="d-flex justify-content-end" href=" "><button type="button" class="btn btn-primary">Nuevo</button></a>
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
			 	<a href="{">
			 	<input type="submit"  class="btn btn-warning" value="Editar">
			 	</a>

			 </td>
            <td>
			<form method="POST" action="{{ url("cursos/{$a->id}") }}">
			      @csrf
			      @method('DELETE')
			      <input type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro?')" value="Borrar">
			    </form>
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