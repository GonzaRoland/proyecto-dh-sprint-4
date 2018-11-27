window.onload = function(){

    //utilización de la api para selects de provincia/municipio


    fetch("https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre")
        .then(resultado => resultado.json())
        .then(data => {
            //console.log(data.provincias)
            for (var indice of data.provincias) {
                var opciones = document.createElement('option')
                opciones.value = indice.id
                opciones.innerHTML = indice.nombre
                select1.appendChild(opciones)    
            }
               
        })
   var select1 = document.getElementById("province")
   var select2 = document.getElementById("city")
    //var option = select1.querySelectorAll('option')

   select1.addEventListener("change", mostrarDatos)

    //console.log(selected);

    function mostrarDatos() {
        //console.log(select1.value)
        fetch("https://apis.datos.gob.ar/georef/api/municipios?provincia="+select1.value+"&campos=id,nombre&max=1000")
        .then(resultado => resultado.json())
        .then(data => {
            //console.log(data.municipios)
            select2.innerHTML = ""
            var defaultOption = document.createElement('option')
            defaultOption.innerHTML = 'Seleccionar...'
            select2.appendChild(defaultOption)
            for (var indice of data.municipios) {
                var opciones = document.createElement('option')
                opciones.value = indice.nombre
                opciones.innerHTML = indice.nombre
                select2.appendChild(opciones)    
            }
               
        })


    }
    
    
    
    
    
    
    
    
    //validación del formulario

    var registerForm = document.forms[1]

    //console.log(registerForm)

    var firstName = document.getElementById('first_name')
    var lastName = document.getElementById('last_name')
    var email = document.getElementById('email')
    /* var password = document.getElementById('password')
    var passwordConfirm = document.getElementById('password-confirm') */

    var firstNameError = '<strong>Ingresá un nombre válido</strong>'
    var lastNameError = '<strong>Ingresá un apellido válido</strong>'
    var emailError = '<strong>Ingresá un email válido</strong>'
    /* var passwordError = '<strong>Ingresá una contraseña de 6 o más caracteres</strong>'
    var passwordConfirmError = '<strong>Las contraseñas deben coincidir</strong>' */
          
    var firstNameErrorSpan = document.getElementById('invalid-first-name')
    var lastNameErrorSpan = document.getElementById('invalid-last-name')
    var emailErrorSpan = document.getElementById('invalid-email')
    /* var passwordErrorSpan = document.getElementById('invalid-password')
    var passwordConfirmErrorSpan = document.getElementById('invalid-password-confirm') */



    registerForm.onsubmit = function onFormSubmit(e) {
        
        

        e.preventDefault()
        
        if (validateRegisterForm()){
            swal('Operación exitosa', 'Tus datos han sido actualizados', 'success')
            registerForm.submit()
            window.location.replace("/");
        }

        
    }
    function validateRegisterForm() {
        /* var firstName = document.getElementById('first_name')
        var lastName = document.getElementById('last_name')
        var email = document.getElementById('email')
        var password = document.getElementById('password')
        var passwordConfirm = document.getElementById('password_confirm') */

        if (!validateFirstName(firstName.value)) return false
        if (!validateLastName(lastName.value)) return false
        if (!validateEmail(email.value)) return false
        /* if (!validatePassword(password.value)) return false
        if (!validatePasswordConfirm(password.value, passwordConfirm.value)) return false */

        return true

    }

    function validateFirstName(data) {
        if (data === "") {
            firstNameErrorSpan.innerHTML = firstNameError
            firstName.setAttribute('class', 'form-control is-invalid')
            return false
        }
        firstNameErrorSpan.innerHTML = ""
        firstName.setAttribute('class', 'form-control')
        return true
    }

    function validateLastName(data) {
        if (data === "") {
            lastNameErrorSpan.innerHTML = lastNameError
            lastName.setAttribute('class', 'form-control is-invalid')
            return false
        }
        lastNameErrorSpan.innerHTML = ""
        lastName.setAttribute('class', 'form-control')
        return true
    }

    function validateEmail(data) {
        var emailRegEx = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
        if (!emailRegEx.test(data) || data === "") {
            emailErrorSpan.innerHTML = emailError
            email.setAttribute('class', 'form-control is-invalid')
            return false
        }
        emailErrorSpan.innerHTML = ""
        email.setAttribute('class', 'form-control')
        return true
        
    }

    /* function validatePassword(password) {
        var passwordRegEx = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/
        if (!passwordRegEx.test(password)) {
            passwordErrorSpan.innerHTML = passwordError
            return false
        }
        passwordErrorSpan.innerHTML = ""
        return true
    }

    function validatePasswordConfirm(password, repeat) {
        if (password != repeat) {
            passwordConfirmErrorSpan.innerHTML = passwordConfirmError
            return false
        }
        passwordConfirmErrorSpan.innerHTML = ""
        return true
    } */



}