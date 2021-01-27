<?php
    wp_register_script('form-modal', get_template_directory_uri() .  '/js/form-modal.js', '', false, true );
    wp_enqueue_script('form-modal'); 
?>

<style type="text/css">
    #overlay {
        visibility: hidden;
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        min-height: 100vh; 
        z-index: 1000;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1040;
        width: 100vw;
        height: 100vh;
        background-color: rgb(0, 0, 0, 0.5);
    }
    .modal {
        width: 450px;
        margin: 60px auto;
        overflow: scroll;
        height: 80vh;
            background-color: #fff;
        border-radius: 0.3rem;
    }

    .modal-content {
      position: relative;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: column;
      flex-direction: column;
      width: 90%; margin: 0 auto;
      pointer-events: auto;
      background-clip: padding-box;
    }
    .modal-title {
        color: #5dc3da;
        margin-top: 20px;
    }
    .modal-content h4 {
        font-size: 22px;
        color: #feca01;
    }

    .btn-close, .btn-close:visited { 
    background: transparent;
    color: #ed6a4b;
    font-weight: bold;
    line-height: normal;
    border: none;
    font-size: 1.6em;
    cursor: pointer;
    position: absolute;
    right: 0;
    top: 10px;
    padding: 0;
    margin: 0;
     }
    .btn-close:hover, .btn-close:focus { color: #dd5a3b; }

    .terminos {
        font-size: 16px;
    }
    .btn-enviar, .btn-enviar:visited { 
        background: #8aaa33;
        border: none;
        font-size: 18px;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 1px;
        padding: 8px 15px;
        color: #fff;
    }
    .btn-enviar:hover, .btn-enviar:focus { 
        background: #5dc3da;
        color: #fff;
        }
    .modal-content label {
        font-size: 16px;
    }
</style>
<!-- Modal -->
<div id="overlay">

    <div class="modal fade" id="pideinfo" tabindex="-1" aria-labelledby="pideinfolabel" aria-hidden="true">
        <div class="modal-content">
           <!-- <p class="modal-title"><b>Pide Información</b></p>-->
              <p><button type="button" class="btn-close float-right" data-dismiss="modal" aria-label="Close" onclick='overlay()'><span aria-hidden="true">&times;</span></button></p>
           
            <form id="form_solicita_info">
                <p><b class="azul">¿Qué tipo de formación te interesa?</b></p>
                <div class="form-group">
                    <label class="teal" for=""><b>Colegios</b></label>
                    <input type="text" class="form-control" id="univ" name="univ" aria-describedby="" placeholder="Ej. Colegio Trilce, Colegio San Agustín, etc." required>
                </div>
                <div class="form-group">
                    <label class="teal" for=""><b>Nivel</b></label>
                    <input type="text" class="form-control" id="nivel" name="nivel" aria-describedby="" placeholder="Cunas, Inicial, Primaria, Secundaria" required>
                </div>
                <div class="form-group">
                    <label class="teal"><b>¿Cómo te podemos contactar?</b></label><br />
                    <label style="color:red; display:none;" id="msg_error_1"><b>Es necesario seleccionar una de las opciones</b></label>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" name="tipo_contacto[]" value="Whatsapp">
                    <label class="form-check-label" for="">WhatsApp</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" name="tipo_contacto[]" value="Teléfono">
                    <label class="form-check-label" for="">Teléfono</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="" name="tipo_contacto[]" value="Email">
                    <label class="form-check-label" for="">Email</label>
                </div>
            </div>
            <div class="form-group">
                <label class="teal"><b>¿A qué hora prefieres?</b></label>
                <label style="color:red; display:none;" id="msg_error_2"><b>Es necesario seleccionar una de las opciones</b></label><br />
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" name="hora_contacto[]" value="Da igual">
                <label class="form-check-label" for="">Cualquier hora</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" name="hora_contacto[]" value="Mañana (8:00-12:00)">
                <label class="form-check-label" for="">Mañana (8:00-12:00)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" name="hora_contacto[]" value="Mediodía (12:00-16:00)">
                <label class="form-check-label" for="">Mediodía (12:00-16:00)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="" name="hora_contacto[]" value="Tarde (16:00-19:00)">
                <label class="form-check-label" for="">Tarde (16:00-19:00)</label>
            </div>
            </div>
            <div class="form-group">
                <label class="teal" for=""><b>Nombre Completo</b></label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="" placehodler="ej. María Pinto" required>
            </div>
            <div class="form-group">
                <label class="teal" for=""><b>Teléfono</b></label>
                <input type="number" class="form-control" id="telefono" name="telefono" aria-describedby="" minlength="8" maxlength="10" placehodler="ej. 5114378787" required>
            </div>
            <div class="form-group">
                <label class="teal" for=""><b>Email</b></label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="" placehodler="ej. maria.pinto@email.com" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="agreement" required>
                <label class="form-check-label terminos" for="">Confirmo que he leído y acepto el <a target="_blank" href="https://estudiaperu.pe/aviso-de-privacidad/">aviso de privacidad</a> y acepto ser contactado por cualquier institución educativa de Perú a la que facilitemos sus datos de contacto.</label>
            </div>
                <input type="hidden" name="post_title" value="<?php echo $post->post_title;?>">
                <input type="hidden" name="post_id" value="<?php echo $post->ID;?>">
                <input type="hidden" name="post_type" value="<?php echo $post->post_type;?>">
                <p class="text-center"><button type="submit" class="btn btn-enviar">enviar</button></p>
            </form>

            <div id="form_msg" style="display:none;">
                <h4 class="naranja" class="verde">Gracias por contactar con nosotros</h4>
                <p>Te contestaremos a la brevedad</p>
            </div>
        </div>
    </div>
</div>
