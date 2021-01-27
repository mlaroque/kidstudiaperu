var contact_form_elem_modal = document.getElementById("form_solicita_info");
var tipo_contact_checks = contact_form_elem_modal.querySelectorAll("input[name='tipo_contacto[]']");
var hora_contact_checks = contact_form_elem_modal.querySelectorAll("input[name='hora_contacto[]']");

for (var i = 0; i < tipo_contact_checks.length; i++) {

    tipo_contact_checks[i].addEventListener("change", function(ev) {

        if (document.querySelectorAll("input[name='tipo_contacto[]'").length > 0) document.getElementById("msg_error_1").style.display = "none";
    });
}

for (var i = 0; i < tipo_contact_checks.length; i++) {

    hora_contact_checks[i].addEventListener("change", function(ev) {

        if (document.querySelectorAll("input[name='hora_contacto[]'").length > 0) document.getElementById("msg_error_2").style.display = "none";
    });
}

contact_form_elem_modal.addEventListener('submit', submitForm);

function submitForm(e){

    e.preventDefault();

    let tipoConsultaChecks = contact_form_elem_modal.querySelectorAll("input[name='tipo_contacto[]']:checked");
    let horaContactoChecks = contact_form_elem_modal.querySelectorAll("input[name='hora_contacto[]']:checked");

    if (tipoConsultaChecks.length == 0) {

        document.getElementById("msg_error_1").style.display = "block";        
        window.location.hash = "msg_error_1";

        return false;
    }

    if (horaContactoChecks.length == 0) {

        document.getElementById("msg_error_2").style.display = "block";        
        window.location.hash = "msg_error_2";

        return false;
    }

    var formInputs = contact_form_elem_modal.querySelectorAll("input,select,textarea");
    var httpRequest = new XMLHttpRequest();
    var formData = new FormData();

    for (var i=0; i < formInputs.length; i++) {

        if (formInputs[i].getAttribute("type") == "checkbox") {

            if (formInputs[i].checked) formData.append(formInputs[i].name, formInputs[i].value);
        }

        else {

            formData.append(formInputs[i].name, formInputs[i].value);
        }
    }

    // var gResponse = document.querySelector('[name="g-recaptcha-response"]').value;

    httpRequest.onreadystatechange = function() {

        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {

            if (httpRequest.responseText == "success") {

                // document.getElementById("entered_email").innerHTML = document.getElementById("email").value;
                document.getElementById("form_solicita_info").style.display = "none";
                document.getElementById("form_msg").style.display = "block";
            }

            else {

                console.log(httpRequest.responseText);
                alert("Un error sucedió y no pudimos recibir tu contacto. Inténtalo más tarde.");
            }
        }
    }

    // if (gResponse && gResponse !== "") {

        httpRequest.open('POST', window.location.protocol + "//" + window.location.hostname + "/wp-content/themes/LCtheme2020/ws/solicita-info-univ-carreras.php");
        httpRequest.send(formData);
    // }

    return false;
}

function overlay() {
    el = document.getElementById("overlay");
    el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
}



