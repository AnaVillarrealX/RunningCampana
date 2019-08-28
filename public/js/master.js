window.onload=function() {
  var formulario = document.querySelector(".formulario")
  formulario.elements.first_name.focus()
  formulario.onsubmit = function(evento) {
    if(!validaciones()) {
    evento.preventDefault();
    } else {
    formulario.submit();
    }
  }

  var first_name = formulario.elements.first_name;
  var last_name = formulario.elements.last_name;
  var genre = formulario.elements.genre;
  var age = formulario.elements.age;
  var weight = formulario.elements.weight;
  var height = formulario.elements.height;
  var email = formulario.elements.email;
  var password = formulario.elements.password;
  var password_confirmation = formulario.elements.password_confirmation;

  function validaciones() {
    if (!validateFirstName(first_name.value)) return false;
    return true;
    if (!validateLastName(last_name.value)) return false;
    return true;
    if (!validateGenre(genre.value)) return false;
    return true;
    if (!validateAge(age.value)) return false;
    return true;
    if (!validateWeight(weight.value)) return false;
    return true;
    if (!validateHeight(height.value)) return false;
    return true;
    if (!validateEmail(email.value)) return false;
    return true;
    if (!validatePassword(password.value)) return false;
    return true;
    if (!validatePasswordConfirm(password_confirmation.value)) return false;
    return true;
  }

  function validateFirstName(first_name) {
    var errorFirstName = document.getElementById("errorFirstName")
    if (first_name === "" || first_name.length <= 1) {
      return false
    } else {
      formulario.elements.last_name.focus()
      return true
    }
  }

  first_name.onfocusout = function () {
    if (!validateFirstName(first_name.value)) {
      errorFirstName.innerHTML = "Debe colocar un nombre";
      errorFirstName.setAttribute("class","alert-danger");
    } else {
      errorFirstName.innerHTML = "";
      errorFirstName.removeAttribute("class","alert-danger");
    }
  }

  function validateLastName(last_name) {
    var errorLastName = document.getElementById("errorLastName")
    if (last_name === "" || last_name.length <= 1) {
      return false
    } else {
      formulario.elements.genre.focus()
      return true
    }
  }

  last_name.onfocusout = function () {
    if (!validateLastName(last_name.value)) {
      errorLastName.innerHTML = "Debe colocar un apellido";
      errorLastName.setAttribute("class","alert-danger");
    } else {
      errorLastName.innerHTML = "";
      errorLastName.removeAttribute("class","alert-danger");
    }
  }

  function validateGenre(genre) {
    var errorGenre = document.getElementById("errorGenre")
    if (genre != 'M' && genre != 'F') {
      return false
    } else {
      formulario.elements.age.focus()
      return true
    }
  }

  genre.onfocusout = function () {
    if (!validateGenre(genre.value)) {
      errorGenre.innerHTML = "Debe colocar un género válido, M o F";
      errorGenre.setAttribute("class","alert-danger");
    } else {
      errorGenre.innerHTML = "";
      errorGenre.removeAttribute("class","alert-danger");
    }
  }

  function validateAge(age) {
    var errorAge = document.getElementById("errorAge")
    if (age=="" || age >= 100 || isNaN(age)) {
      return false
    } else {
      formulario.elements.weight.focus()
      return true
    }
  }

  age.onfocusout = function () {
    if (!validateAge(age.value)) {
      errorAge.innerHTML = "Debe colocar una edad válida";
      errorAge.setAttribute("class","alert-danger");
    } else {
      errorAge.innerHTML = "";
      errorAge.removeAttribute("class","alert-danger");
    }
  }

  function validateWeight(weight) {
    var errorWeight = document.getElementById("errorWeight")
    if (weight <=0 || isNaN(weight)) {
      return false
    } else {
      formulario.elements.height.focus()
      return true
    }
  }

  weight.onfocusout = function () {
    if (!validateWeight(weight.value)) {
      errorWeight.innerHTML = "Debe colocar un peso válido (numérico)";
      errorWeight.setAttribute("class","alert-danger");
    } else {
      errorWeight.innerHTML = "";
      errorWeight.removeAttribute("class","alert-danger");
    }
  }

  function validateHeight(height) {
    var errorHeight = document.getElementById("errorHeight")
    if (height <=0 || isNaN(height)) {
      return false
    } else {
      formulario.elements.email.focus()
      return true
    }
  }

  height.onfocusout = function () {
    if (!validateHeight(height.value)) {
      errorHeight.innerHTML = "Debe colocar una altura válida (numérica)";
      errorHeight.setAttribute("class","alert-danger");
    } else {
      errorHeight.innerHTML = "";
      errorHeight.removeAttribute("class","alert-danger");
    }
  }

  function validateEmail(email) {
    var errorEmail = document.getElementById("errorEmail");
    let re = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
    if (!re.test(email.value)) {
      return false
    } else {
      formulario.elements.password.focus()
      return true
    }
  }

  email.onfocusout = function () {
    if (!validateEmail(email)) {
      errorEmail.innerHTML = "Debe colocar un email válido";
      errorEmail.setAttribute("class","alert-danger");
      email.classList.add('is-invalid');
    } else {
      errorEmail.innerHTML = "";
      errorEmail.removeAttribute("class","alert-danger");
      email.classList.remove('is-invalid');
      email.classList.add('is-valid');
    }
  }

  function validatePassword(password) {
    var errorPassword = document.getElementById("errorPassword")
    if (password.length<6) {
      return false
    } else {
      formulario.elements.password_confirmation.focus()
      return true
    }
  }

  password.onfocusout = function () {
    if (!validatePassword(password.value)) {
      errorPassword.innerHTML = "La contraseña debe tener al menos 6 caracteres";
      errorPassword.setAttribute("class","alert-danger");
    } else {
      errorPassword.innerHTML = "";
      errorPassword.removeAttribute("class","alert-danger");
    }
  }

  function validatePasswordConfirm(password_confirmation) {
    var errorPasswordConfirm = document.getElementById("errorPasswordConfirm")
    if (password_confirmation =! password) {
      return false
    } else {
      formulario.elements.avatar.focus()
      return true
    }
  }

  password_confirmation.onfocusout = function () {
    if (!validatePasswordConfirm(password_confirmation.value)) {
      errorPasswordConfirm.innerHTML = "Las contraseñas deben coincidir";
      errorPasswordConfirm.setAttribute("class","alert-danger");
    } else {
      errorPasswordConfirm.innerHTML = "";
      errorPasswordConfirm.removeAttribute("class","alert-danger");
    }
  }

}
