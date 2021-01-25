<?php
    include("header.php");
?>
<?php
    include("config.php");
    $sql = "INSERT INTO persona(nombres,apellidos,categoria,inscripciones,finicial,ffinal,horario,objetivos,perfil,descripcion,competencias,oferta) VALUES ('$_POST[nombres]','$_POST[apellidos]','$_POST[categoria]','$_POST[inscripciones]','$_POST[finicial]','$_POST[ffinal]','$_POST[horario]','$_POST[objetivos]','$_POST[perfil]','$_POST[descripcion]','$_POST[competencias]','$_POST[oferta]')";
    if(mysqli_query($db,$sql)){
        echo "<p>Se ha ingresado con éxito la información</p><br>";
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($db);
?>
<p><a href="index.php">Volver</a></p>
<?php
    include("footer.php");
?>