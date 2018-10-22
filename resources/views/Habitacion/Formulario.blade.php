
<button type="button"  class="btn btn-primary " data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Habitación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  id="CrearHabitacion" enctype="multipart/form-data" >
      <input type = "hidden" name="_token" value="{{csrf_token()}}" id="tokCrearHabitacion">
        <div class="form-row "  >
          <div class="form-group col-md-3">
            <label for="Direccion">Dirección</label>
            <input type="text" class="form-control" id="Direccion" name="Direccion" >
          </div>
          <div class="form-group col-md-3">
            <label for="Mcuadrados">Metros Cuadrados</label>
            <input type="number" class="form-control" id="Mcuadrados" name="Mcuadrados">
          </div>
          <div class="form-group col-md-3">
              <label for="Piso">Piso</label>
              <select class="form-control" id="Piso">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              </select>
          </div>
          <div class="form-group col-md-3">
              <label for="Techo">Techo</label>
              <select class="form-control" id="Techo">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              </select>
          </div>
        </div>
          <div class="form-group">
            <label for="Detalles">Detalle</label>
            <textarea class="form-control" name="detalle" rows="3"></textarea>
          </div>
          <div class="form-group  col-md-6">
            <input type="file"  id="file" class="custom-file-input" id="validatedCustomFile" name="file[]" multiple required>
              <label class="custom-file-label" for="validatedCustomFile" >Seleccione imagenes</label>
              <div class="invalid-feedback">Example invalid custom file feedback</div>
              <output id="list"></output>
          </div>
          <!-- <a class="btn btn-primary" href="#" id ="Enviar-Habitacion" role="button">Enviar</a> -->
          <button type="submit" class="btn btn-secondary">Cerrar</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

@section('scritps')
{!!Html::script('js/Habitacion/Habitacion.js')!!}
@endsection
