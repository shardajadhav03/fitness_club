var nam = document.forms['form1']['name']
var email = document.forms['form1']['email']
var phone = document.forms['form1']['number']


var name_error = document.getElementById('name_error')
var email_error = document.getElementById('email_error')
var phone_error = document.getElementById('phone_error')


nam.addEventListener('textInput', nam_verify);
email.addEventListener('textInput', email_verify);
phone.addEventListener('textInput', phone_verify);


function validated() {
    if (nam.value.length < 1) {
        nam.style.border = "1px solid red";
        name_error.style.display = "block";
        nam.focus();
        return false;
    }

    if (email.value.length < 8) {
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        email.focus();
        return false;
    }
    
    if (phone.value.length < 11) {
        phone.style.border = "1px solid red";
        phone_error.style.display = "block";
        phone.focus();
        return false;
    }

}

function nam_verify() {
    if (nam.value.length >= 0) {
        nam.style.border = "1px solid silver";
        name_error.style.display = "none";
        return true;
    }
}
function email_verify() {
    if (email.value.length >= 8) {
        email.style.border = "1px solid silver";
        email_error.style.display = "none";
        return true;
    }
}
function phone_verify() {
    if (phone.value.length >= 10) {
        phone.style.border = "1px solid silver";
        phone_error.style.display = "none";
        return true;
    }
}
