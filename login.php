<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $correo = $_POST['username'];
    $contraseña = $_POST['password'];

    if($correo === "MiltonVenegas@gmail.com" && $contraseña === "1234"){
        header("location: bienvenida.html");
        exit();
    } else{
        echo "Datos inválidos, por favor revisar.";
    }
}
?>
