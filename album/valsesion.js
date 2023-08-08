var isLoggedIn = false;
function login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Simulamos una autenticación exitosa para este ejemplo.
    if (username === "usuario" && password === "contraseña") {
        isLoggedIn = true;
        showLoggedInContent();
    } 
}

function showLoggedInContent() {
    document.getElementById("loginForm").style.display = "none";
}
