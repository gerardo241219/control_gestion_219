<!-- Modal -->
<div class="modal fade" id="registroModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Alta de Eventos y Audiencias</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <p class="labelForm">Tipo de Registro</p>
          <select class="form-select inputs" name="tipo_registro" id="tipo_registro" style="font-size: 0.9rem;">
            <option selected disabled>--Selecciona una opción--</option>
            <option value="">Audiencia</option>
            <option value="">Evento</option>
            <option value="">Evento personal</option>
          </select>
        </div>
        <form id="form-registro" class="form-registro">

          <div class="container-registro mb-2" id="evento">
            <h3 id="title-registro" class="title-modal mb-3">Nuevo evento</h3>
            <div class="form-group">
              <p class="labelForm">Titulo del evento</p>
              <input type="text" class="form-control inputs" id="titulo" placeholder="Titulo del evento">
            </div>
            <div class="form-group">
              <p class="labelForm">Descripción</p>
              <input type="text" class="form-control inputs" id="descripcion" placeholder="Descripción del evento">
            </div>
            <div class="form-group">
              <p class="labelForm">Invita</p>
              <input type="text" class="form-control inputs" id="invita" placeholder="Invita">
            </div>
            <div class="form-group">
              <p class="labelForm">Contacto</p>
              <input type="text" class="form-control inputs" id="contacto" placeholder="Contacto">
            </div>
            <div class="form-group">
              <p class="labelForm">Dirección</p>
              <input type="text" class="form-control inputs" id="direccion" placeholder="Dirección">
            </div>
            <div class="form-group">
              <p class="labelForm">Comentarios</p>
              <textarea class="form-control inputs" id="comentario" cols="30" rows="3" placeholder="Comentarios"></textarea>
            </div>
            <div class="form-group">
              <p class="labelForm">Representante</p>
              <select class="form-select inputs" name="representante" id="representante" style="font-size: 0.9rem;">
                <option selected disabled>--Selecciona una opción--</option>
              </select>
            </div>
            <div class="form-group">
              <p class="labelForm">Estado del representante</p>
              <select class="form-select inputs" name="estado_representante" id="estado_representante" style="font-size: 0.9rem;">
                <option selected disabled>--Selecciona una opción--</option>
              </select>
            </div>
            <div class="form-group">
              <p class="labelForm">Categoría</p>
              <select class="form-select inputs" name="categoria" id="categoria" style="font-size: 0.9rem;">
                <option selected disabled>--Selecciona una opción--</option>
              </select>
            </div>
            <div class="d-flex justify-content-around align-items-center">
              <div class="form-group mx-1">
                <p class="labelForm">Fecha</p>
                <input class="form-control inputs" type="date" name="fecha" id="fecha">
              </div>
              <div class="form-group mx-1">
                <p class="labelForm">Hora de inicio</p>
                <input class="form-control inputs" type="time" name="hora_inicio" id="hora_inicio">
              </div>
              <div class="form-group mx-1">
                <p class="labelForm">Hora de termino</p>
                <input class="form-control inputs" type="time" name="hora_fin" id="hora_fin">
              </div>
            </div>
            <div class="form-group inputs">
              <p class="labelForm">Indicaciones</p>
              <textarea class="form-control inputs" id="indicaciones" cols="30" rows="3" placeholder="Indicaciones"></textarea>
            </div>
            <div class="form-group inputs ">
              <fieldset class="fields">
                <legend class="legends">Marca las casillas necesarias para el registro</legend>
                <div class="d-flex aling-items-center mb-1">
                  <p class="labelForm mr-3">Asiste prensa</p>
                  <input type="checkbox" id="asiste_prensa">
                </div>
                <div class="d-flex aling-items-center mb-1">
                  <p class="labelForm mr-3">Participa</p>
                  <input type="checkbox" id="participa">
                </div>
                <div class="d-flex aling-items-center mb-1">
                  <p class="labelForm mr-3">Presidium</p>
                  <input type="checkbox" id="presidium">
                </div>
                <div class="d-flex aling-items-center mb-1">
                  <p class="labelForm mr-3">Programa</p>
                  <input type="checkbox" id="programa">
                </div>
                <div class="d-flex aling-items-center mb-1">
                  <p class="labelForm mr-3">Enviado</p>
                  <input type="checkbox" id="enviado">
                </div>
                <div class="d-flex aling-items-center mb-1">
                  <p class="labelForm mr-3">Tentativo</p>
                  <input type="checkbox" id="tentativo">
                </div>
                <div class="d-flex aling-items-center mb-1">
                  <p class="labelForm mr-3">Cubrir prensa</p>
                  <input type="checkbox" id="cubrir_prensa">
                </div>
              </fieldset>

            </div>
          </div>

          <div class="container-registro mb-2" id="evento_personal">
            <h3 id="title-registro" class="title-modal mb-3">Registrar evento personal</h3>
            <div class="form-group">
              <p class="labelForm">Titulo del evento</p>
              <input type="text" class="form-control inputs" id="titulo" placeholder="Titulo del evento">
            </div>
            <div class="form-group">
              <p class="labelForm">Cita con:</p>
              <input type="text" class="form-control inputs" id="cita_con" placeholder="Cita con:">
            </div>
            <div class="form-group">
              <p class="labelForm">Dirección</p>
              <input type="text" class="form-control inputs" id="direccion" placeholder="Dirección">
            </div>
            <div class="form-group">
              <p class="labelForm">Comentarios</p>
              <textarea class="form-control inputs" id="comentario" cols="30" rows="3" placeholder="Comentarios"></textarea>
            </div>
            <div class="d-flex justify-content-around align-items-center">
              <div class="form-group mx-1">
                <p class="labelForm">Fecha</p>
                <input class="form-control inputs" type="date" name="fecha" id="fecha">
              </div>
              <div class="form-group mx-1">
                <p class="labelForm">Hora</p>
                <input class="form-control inputs" type="time" name="hora_inicio" id="hora_inicio">
              </div>
            </div>
          </div>

          <div class="container-registro mb-2" id="audiencia">
            <h3 id="title-registro" class="title-modal mb-3">Nueva audiencia</h3>
            <div class="form-group">
              <p class="labelForm">Persona</p>
              <input type="text" class="form-control inputs" id="persona" placeholder="Persona">
            </div>
            <div class="form-group">
              <p class="labelForm">Dependencia</p>
              <input type="text" class="form-control inputs" id="dependencia" placeholder="Dependencia">
            </div>
            <div class="form-group">
              <p class="labelForm">Asunto</p>
              <textarea class="form-control inputs" id="asunto" cols="30" rows="3" placeholder="Asunto"></textarea>
            </div>
            <div class="form-group">
              <fieldset class="fields">
                <legend class="legends">Prioridad</legend>
                <div class="d-flex justify-content-start align-items-center">
                  <p class="labelForm mr-2">Alta</p>
                  <input type="radio" name="prioridad" id="prioridad_alta">
                </div>
                <div class="d-flex justify-content-start align-items-center">
                  <p class="labelForm mr-2">Normal</p>
                  <input type="radio" name="prioridad" id="prioridad_normal">
                </div>
              </fieldset>
            </div>
            <div class="form-group">
              <p class="labelForm">Contacto</p>
              <input type="text" class="form-control inputs" id="contacto" placeholder="Contacto">
            </div>
            <div class="form-group">
              <p class="labelForm">Telefono</p>
              <input type="tel" class="form-control inputs" id="telefono" placeholder="Telefono">
            </div>
            <div class="d-flex justify-content-around align-items-center">
              <div class="form-group mx-1">
                <p class="labelForm">Fecha</p>
                <input class="form-control inputs" type="date" name="fecha" id="fecha">
              </div>
              <div class="form-group mx-1">
                <p class="labelForm">Hora</p>
                <input class="form-control inputs" type="time" name="hora_inicio" id="hora_inicio">
              </div>
            </div>
            <div class="form-group">
              <p class="labelForm">Indicaciones</p>
              <select class="form-select inputs mb-1" name="categoria" id="categoria" style="font-size: 0.9rem;">
                <option selected disabled>--Selecciona una opción--</option>
              </select>
              <textarea class="form-control inputs" id="indicaciones" cols="30" rows="3" placeholder="Indicaciones"></textarea>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>