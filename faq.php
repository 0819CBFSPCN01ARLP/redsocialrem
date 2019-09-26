<?php
  require_once("php/incluir.php");
 ?>

 <!DOCTYPE html>
<html lang="es" dir="ltr">
  <?php incluir_template("head", ["titulo" => "FAQ"]); ?>
<!-- encabezado -->
  <?php incluir_template("header"); ?>

<!-- Cuerpo -->
  <body>
    <div class="accordion row" id="accordionExample">
      <div class="col-10">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              ¿Cómo creo una cuenta en REM?
            </button>
          </h2>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <h4>Para crear una cuenta de REM:</h4>
            <ul>
                <li>Ve a www.rem.com</li>
                <li> Escribe tu nombre, correo electrónico o número de teléfono celular, contraseña, fecha de nacimiento y sexo.</li>
                <li>Haz clic en 'Registrarte'.</li>
                <li>Para terminar de crear la cuenta, debes confirmar tu correo electrónico o número de teléfono celular.</li>
            </ul>
            <h6>Avisanos si tienes problemas para crear tu cuenta REM</h6>
          </div>
        </div>
      </div>
      <div class="card col-10">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              ¿Cómo inicio sesión en mi cuenta REM?
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            <h4>Para iniciar sesión en tu cuenta REM:</h4>
              <p>Ve a www.rem.com. En la parte superior, debajo de correo electrónico o teléfono, ingresa una de las siguientes opciones:</p>
                <ul>
                  <li>Correo electrónico: puedes iniciar sesión con cualquier correo electrónico que esté incluido en tu cuenta REM.</li>
                  <li>Número de teléfono: si tienes un número de celular registrado en tu cuenta, puedes ingresarlo aquí.</li>
                  <li>Nombre de usuario: también puedes iniciar sesión con tu nombre de usuario si definiste uno.</li>
                </ul>
                  <p>En 'Contraseña', ingresa la contraseña.</p>
                  <p>Haz clic en 'Iniciar sesión'.</p>
                <br>
                  <h6>Avisanos si tienes problemas para iniciar sesión en tu cuenta REM</h6>
          </div>
        </div>
      </div>
      <div class="card col-10">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              ¿Cómo cambio mi contraseña en REM?
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            <h4>Para cambiar la contraseña:</h4>
              <ul>
                <li>Haz clic en la esquina superior derecha de cualquier página de REM y selecciona 'Configuración'.</li>
                <li>Haz clic en 'Seguridad e inicio de sesión'.</li>
                <li>Haz clic en 'Editar' junto a 'Cambiar contraseña'.</li>
                <li>Escribe la contraseña actual y la nueva.</li>
                <li>Haz clic en 'Guardar cambios'.</li>
                <li>Haz clic en 'Iniciar sesión'.</li>
              </ul>
              <h6>Si sigues teniendo problemas, podemos ayudarte a recuperar tu cuenta.</h6>
          </div>
        </div>
      </div>
    </div>
    </body>
  </body>
  <br>
  <?php incluir_template("footer"); ?>
</html>
