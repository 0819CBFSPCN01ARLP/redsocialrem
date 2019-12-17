window.onload = function () {

  // VALIDACION SUBIDA DE POST
  let postForm = document.querySelector('#postForm');
  if (postForm != null) {
    postForm.onsubmit = function (event) {
      let validate = validatePost();
      if (!validate) {
        event.preventDefault();
      }
    }
  }

  function validatePost() {
    let image = document.querySelector('#postImage');
    let path = image.value;
    let extension = path.substring(path.lastIndexOf('.') + 1).toLowerCase();
    let text = document.querySelector('#postText');

    if (extension == '') {
      alert('La imagen es obligatoria.')
      return false;
    }
    else if (extension != 'jpg' && extension != 'png' && extension != 'jpeg') {
      alert('Solo se permiten archivos .jpg, .jpeg y .png');
      return false;
    }
    if (text.value.trim() == '') {
      alert('El texto de la publicación no puede estar vacío.');
      return false;
    }
    else {
      return true;
    }
  }

  // VALIDACION SUBIDA COMENTARIO
  let commentForms = document.querySelectorAll('.commentForm');

  for (comment of commentForms) {
    comment.onsubmit = function (event) {
      let text = comment.elements[3];
      let validate = validateComment(text);
      if (!validate) {
        event.preventDefault();
      }
    }
  }

  function validateComment(text) {
    if (text.value.trim() == '') {
      alert('El texto es obligatorio');
      return false;
    }
    else {
      return true;
    }
  }

  // VALIDACION SUBIDA FOTO DE PERFIL
  let profileForm = document.querySelector('#profileForm');
  if (profileForm != null) {
    profileForm.onsubmit = function (event) {
      let validate = validateProfile();
      if (!validate) {
        event.preventDefault();
      }
    }
  }

  function validateProfile() {
    let profile = document.querySelector('#profileFile');
    let path = profile.value;
    let extension = path.substring(path.lastIndexOf('.') + 1).toLowerCase();

    if (extension == '') {
      alert('La imagen es obligatoria.')
      return false;
    }
    else if (extension != 'jpg' && extension != 'png' && extension != 'jpeg') {
      alert('Solo se permiten archivos .jpg, .jpeg y .png');
      return false;
    }
    else {
      return true;
    }
  }

  // VALIDACION DE LOGIN
  let loginForm = document.querySelector('#login');

  if (loginForm != null) {
    loginForm.onsubmit = function (event) {
      let validate = validateLogin();
      if (!validate) {
        event.preventDefault();
      }
    }
  }

  function validateLogin() {
    let email = document.querySelector('#email');
    let password = document.querySelector('#password');

    // validacion del correo
    let validate = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value);
    if (!validate) {
      alert('El correo no tiene un formato válido.');
      return false;
    }
    else if (password.value.trim() == '') {
      alert('La contraseña es obligatoria.');
      return false;
    }
    else {
      return true;
    }
  }

  // VALIDACION DE REGISTRO
  let registerForm = document.querySelector('#register');

  if (registerForm != null) {
    registerForm.onsubmit = function (event) {
      let validate = validateRegister();
      if (!validate) {
        event.preventDefault();
      }
    }
  }

  function validateRegister() {
    let name = document.querySelector('#name');
    let surname = document.querySelector('#surname');
    let email = document.querySelector('#email');
    let password = document.querySelector('#password');
    let confirm = document.querySelector('#confirm');

    // validacion del correo
    let validate = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value);
    if (!validate) {
      alert('El correo no tiene un formato válido.');
      return false;
    }
    else if (name.value.trim() == '') {
      alert('El nombre es obligatorio.');
    }
    else if (surname.value.trim() == '') {
      alert('El apellido es obligatorio.');
    }
    else if (password.value.trim() == '') {
      alert('La contraseña es obligatoria.');
      return false;
    }
    else if (confirm.value.trim() == '') {
      alert('El confirmar contraseña es obligatorio.');
    }
    else {
      return true;
    }
  }

  // VALIDACION DE ELIMINACION
  let dels = document.querySelectorAll(".delete");

  for (com of dels) {
    com.onsubmit = function (event) {
      let val = confirm('Está seguro que desea eliminarlo?');
      if (!val) {
        event.preventDefault();
      }
    }
  }

  let delPosts = document.querySelectorAll(".deletePost");

  for (come of delPosts) {
    come.onsubmit = function (event) {
      let val = confirm('Está seguro que desea eliminarlo?');
      if (!val) {
        event.preventDefault();
      }
    }
  }

}
