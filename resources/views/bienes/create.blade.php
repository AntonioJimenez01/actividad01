@extends('layouts.app')

@section('links')
@endsection

@section('content')
  <div class="container mt-3">
    <div class="card text-center">
      <div class="card-header">
        <h3 class="float-left">Alta de Hadware</h3>
        <a href="{{url('bien')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right"><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
      </div>
      {!! Form::model($bien, ['action' => 'BienController@store']) !!}
      <div class="card-body">
        <div class="form-row">
           <div class="form-group col-md-4">
             <label for="noserie">No de serie</label>
             <input type="text" id="noserie" name="noserie" value="{{ old('noserie') }}" class="form-control text-center" placeholder="">
           </div>
          <div class="form-group col-md-4">
            <label for="noinventario">No de inventario</label>
            <input type="text" id="noinventario" name="noinventario" value="{{ old('noinventario') }}" class="form-control text-center" placeholder="">
          </div>
          <div class="form-group col-md-4">
            <label for="tipo">Tipo</label>
            <select class="form-control" name="tipo" id="tipo">
              <option value="" @if(old('tipo') == "") selected @endif>Elija una opcion</option>
              <option value="1" @if(old('tipo') == "Laptop") selected @endif>Laptop</option>
              <option value="2" @if(old('tipo') == "Escritorio") selected @endif>Escritorio </option>
                <option value="3" @if(old('tipo') == "Servidor") selected @endif>Servidor </option>
            </select>
         </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-4">
             <label for="marca">Marca</label>
             <input type="text" id="marca" name="marca" value="{{ old('marca') }}" class="form-control text-center" placeholder="">
           </div>
          <div class="form-group col-md-4">
            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="modelo" value="{{ old('modelo') }}" class="form-control text-center" placeholder="">
          </div>
          <div class="form-group col-md-4">
            <label for="estatus">Estatus</label>
            <select class="form-control" name="estatus" id="estatus">
              <option value="" @if(old('estatus') == "") selected @endif>Eliga un opcion</option>
              <option value="1" @if(old('estatus') == "Tarjeta") selected @endif>Disponible</option>
              <option value="2" @if(old('estatus') == "Tarjeta") selected @endif>Asignado </option>
            </select>
         </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="responsable">Responsable</label>
            <select class="form-control" name="responsable" id="responsable">
              <option value="" @if(old('responsable') == "") selected @endif>Eliga un opcion</option>
              <option value="1" @if(old('responsable') == "Tarjeta") selected @endif>responsable 1</option>
              <option value="2" @if(old('responsable') == "Tarjeta") selected @endif>responsable 2 </option>
            </select>
         </div>
          <div class="form-group col-md-4">
            <label for="ubicacion">Ubicacion</label>
            <select class="form-control" name="ubicacion" id="ubicacion">
              <option value="" @if(old('ubicacion') == "") selected @endif>Eliga un opcion</option>
              <option value="1" @if(old('ubicacion') == "Tarjeta") selected @endif>Ubicacion 2</option>
              <option value="2" @if(old('ubicacion') == "Tarjeta") selected @endif>Ubicacion 1 </option>
            </select>
         </div>
        </div>
        <div class="form-group row justify-content-center my-5">
          <label for="descripcion" class="col-sm-2 col-form-label">Descripcion </label>
          <div class="col-sm-10">
            <textarea class="form-control" name = "descripcion" id="descripcion" value = "{{ old('descripcion') }}" rows="3"></textarea>
          </div>
        </div>
        <div class="form-group row justify-content-center my-5">
          <label for="Observaciones" class="col-sm-2 col-form-label">Observaciones</label>
          <div class="col-sm-10">
            <textarea class="form-control" name = "Observaciones" id="Observaciones" value = "{{ old('Observaciones') }}" rows="3"></textarea>
          </div>
        </div>
        <div class="row justify-content-center mt-4">
          <button type="submit" class="btn btn-danger btn-block col-md-3"><i class="fas fa-save fa-fw fa-lg"></i> Guardar</button>
        </div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
