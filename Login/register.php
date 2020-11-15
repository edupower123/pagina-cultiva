<?php 

    include "code register.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Cultiva</title>
    <link rel="stylesheet" href="css/estilos.css">

    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
</head>
<body>

<div class="container-all">

    <div class="ctn-form">
        <img src="img/LOGO REGISTER.png" alt="" class="logo">
        <h1 class="Title">Registrarse</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="">Nombre de Usuario</label>
            <input type="text" name="username">
            <span class="msg-error"><?php echo $username_err; ?></span>
            <label for="">Email</label>
            <input type="text" name="email">
            <span class="msg-error"> <?php echo $email_err; ?></span>
            <label for="">Contraseña</label>
            <input type="password" name="password">
            <span class="msg-error"><?php echo $password_err; ?></span>
            
            <input type="submit" value="Registrase">
    
        </form>

        <span class="text-footer">¿Ya te has registrado?
            <a href="index.php">Iniciar Sesión</a>
        </span>
    </div>

    <div class="ctn-text">
        <div class="capa"></div>
        <h1 class="title-description">Loren imfdnadsiufausdnfi</h1>
        <p class="text-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor nemo quia, ad facilis sunt modi ullam aliquam quod minus quis incidunt. Numquam impedit ea sit voluptates, eius officiis unde fugit!</p>
    </div>
</div>
</body>
</html>
