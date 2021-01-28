<?php
// Aqui recibimos los datos del formulario de index.php
echo "<h1>".$_POST['nombre']."</h1>"; // $_POST Muestra los datos recogidos en el metodo $_POST, en este caso nombre
echo "<h1>".$_POST['apellidos']."</h1>";
echo "<h1>".$_POST['email']."</h1>";


var_dump($_POST); // Nos muestra TODOS los datos que nos van a llegar del metodo $_POST, el array super-global y los datos que se encuentran en el