<?php
include("con_db.php");

if(isset($_POST['register'])){
    if(strlen($_POST['name']) >= 1 && strlen($_POST['correo']) >= 1 &&strlen($_POST['numero']) >= 1){
        $name = $_POST['name'];
        $correo = $_POST['correo'];
        $numero = $_POST['numero'];
        $consulta = "INSERT INTO datos(nombre, correo, numero) VALUES ('$name','$correo','$numero')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
            ?>
            <h2 class="success">Se registro el empleado correctamente</h2>
            <?php
        }else{
            ?>
            <h2 class="error">ups ha ocurrido un erro</h2>
            <?php
        }
    }else{
        ?>
        <h2 class="error">por favor completa los campos</h2>
        <?php
    }
}
?>