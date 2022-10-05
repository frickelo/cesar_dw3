@include('app');
<div class="container">
	<div class="jumbotron">
   <div class="form-row align-items-center">
    <div class="form-group col-md-12">
	<h1>Detalle curso</h1>
	<label for="nombre">Nombre del curso</label>
	<input type="text" class="form-control" name="nombre" id="nombre" value="{{$cursos->nombre}}" disable ="true">
	<label for="descripcion">Descripción</label>
	<input type="text" class="form-control" name="descripcion" id="descripcion" value="{{$cursos->descripcion}}" disable ="true">
    <label for="fecha_inicio">Fecha de inicio</label>
	<input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="{{$cursos->fecha_inicio}}">
    <label for="fecha_fin">Fecha de finalización</label>
	<input type="date" class="form-control" name="fecha_fin" id="fecha_fin" value="{{$cursos->fecha_fin}}">
	<label for="estado">Estado</label>
	<select class="custom-select " aria-label="Default select example" name="estado" value="{{$cursos->estado}}"disable ="true">
    <option selected>Selecione</option>
	  <option value="En curso">En curso</option>
	  <option value="Proximamente">Proximamente</option>
	  <option value="Finalizado">Finalizado</option>
	</select>
	
	<br>
    <a class="pull-right" href="{{route('cursos.index')}} "><button type="button" class="btn btn-danger">Cancelar</button></a>
		
	</form>
</div>
</div>
</div>
</div>