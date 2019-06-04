function validate(form) {
    var nick = document.getElementById("nick").value.length;
    var email = document.getElementById("email").value.length;
    var password_lng = document.getElementById("password").value.length;
    var password = document.getElementById("password").value;
    var password_repeat = document.getElementById("password_repeat").value;

    var error = document.getElementById("error");

    if ((nick >= 5) && (email != 0) && (password_lng >= 8)) {
        if (password == password_repeat) {
            return true;
        }
    } else {
        error.innerHTML = "Please complete all fields correctly";
        error.style.color = "red";
        error.style.fontSize = "25";
        return false;
    }

}