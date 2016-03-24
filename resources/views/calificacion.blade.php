@extends('templates.templateGerente')

@section('content')
<divclass="col-lg-12 col-md-8 col-sm-6 col-xs-6" >    
  <div class="row">
    <div class="contenedor-formulario">
      <div class="wrap">
        <form class="formulario" name="formularios" method="post">
          <div>
              <h3 align="center"><b>Calificaciones</b></h3>
              <br>
              <div>
                  <h3 align="center">Piscina</h3>
                  <p class="clasificacion">
                 <input id="radio1" type="radio" name="estrellas" value="5">
                 <label for="radio1">★</label>
                 <input id="radio2" type="radio" name="estrellas" value="4">
                   <label for="radio2">★</label>
                 <input id="radio3" type="radio" name="estrellas" value="3">
                   <label for="radio3">★</label>
                 <input id="radio4" type="radio" name="estrellas" value="2">
                 <label for="radio4">★</label>
                 <input id="radio5" type="radio" name="estrellas" value="1">
                 <label for="radio5">★</label>
                 </p>
                 <input id="btn-reset" type="reset" value="Cancelar">
                  <input id="btn-submit" type="submit" value="Enviar">
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
@stop