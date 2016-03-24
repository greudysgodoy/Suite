@extends('templates.templateGerente')

@section('content')
<div align="center">  
  <div class="panel panel-default" style="width: 50%">
    <div class="panel-heading" > 
      <h4 align="center"> <B>Calificacion de Servicios</B> </h4>
    </div>
      <div class="panel-body">
        <div class="col-lg-12 col-md-8 col-sm-6 col-xs-6" >   
          <div class="row">
            <div class="contenedor-formulario">
                <form class="formulario" name="formularios" method="post">
                  <div>
                      <div  class="input-group">            
                      <input type="text" id="cedula" name="cedula">
                      <label class="label" for="cedula">Cédula Cliente</label>
                    </div>
                    <div class="input-group"> 
                      <input type="text" id="codigoSer" name="codigoSer">
                      <label class="label" for="codigoSer">Código Servicio</label>
                    </div>
                    <div> 
                          <div>
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
                          </div>
                    </div>
      
                    
                    <input id="btn-reset" type="reset" value="Cancelar">
                    <input id="btn-submit" type="submit" value="Aceptar">
                  </div>

                </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
@stop