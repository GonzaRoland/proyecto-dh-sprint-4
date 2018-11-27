window.onload = function(){
/* console.log('HOLA')
 */
/*     console.log(prodNameErrorSpan)
 */
    var registerForm = document.forms[1]

    var prodName = document.getElementById('prod_name')
    var price = document.getElementById('price')
    var prodDescription = document.getElementById('prod_description')
    var stock = document.getElementById('stock')
    var image = document.getElementById('image')

    var prodNameError = '<strong>Ingrese un nombre válido</strong>'
    var priceError = '<strong>Ingrese un precio válido para el producto</strong>'
    var prodDescriptionError = '<strong>Ingrese una descripción del producto</strong>'
    var stockError = '<strong>Ingrese un stock inicial del producto</strong>'
    var imageError = '<strong>El producto debe tener una imagen</strong>'
          
    var prodNameErrorSpan = document.getElementById('invalid-prod-name')
    var priceErrorSpan = document.getElementById('invalid-price')
    var prodDescriptionErrorSpan = document.getElementById('invalid-prod-description')
    var stockErrorSpan = document.getElementById('invalid-stock')
    var imageErrorSpan = document.getElementById('invalid-image')



    registerForm.onsubmit = function onFormSubmit(e) {
        
        

        e.preventDefault()
        
        if (validateRegisterForm()){
            swal('Operacion exitosa', 'El producto ha sido agregado', 'success')
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

        if (!validateProdName(prodName.value)) return false
        if (!validatePrice(price.value)) return false
        if (!validateProdDescription(prodDescription.value)) return false
        if (!validateStock(stock.value)) return false
        if (!validateImage(image.value)) return false

        return true

    }

    function validateProdName(data) {
        if (data === "") {
            prodNameErrorSpan.innerHTML = prodNameError
            prodName.setAttribute('class', 'form-control is-invalid')
            return false
        }
        prodNameErrorSpan.innerHTML = ""
        prodName.setAttribute('class', 'form-control')
        return true
    }

    function validatePrice(data) {
        if (data === "" || isNaN(data)) {
            priceErrorSpan.innerHTML = priceError
            price.setAttribute('class', 'form-control is-invalid')
            return false
        }
        priceErrorSpan.innerHTML = ""
        price.setAttribute('class', 'form-control')
        return true
    }

    function validateProdDescription(data) {
        
        if (data === "") {
            prodDescriptionErrorSpan.innerHTML = prodDescriptionError
            prodDescription.setAttribute('class', 'form-control is-invalid')
            return false
        }
        prodDescriptionErrorSpan.innerHTML = ""
        prodDescription.setAttribute('class', 'form-control')
        return true
        
    }

    function validateStock(data) {
        
        if (data === "" || isNaN(data)) {
            stockErrorSpan.innerHTML = stockError
            stock.setAttribute('class', 'form-control is-invalid')
            return false
        }
        stockErrorSpan.innerHTML = ""
        stock.setAttribute('class', 'form-control')
        return true
    }

    function validateImage(data) {
        if (data == "") {
            imageErrorSpan.innerHTML = imageError
            image.setAttribute('class', 'form-control is-invalid')
            return false
        }
        imageErrorSpan.innerHTML = ""
        image.setAttribute('class', 'form-control')
        return true
    }



}