<?php
    include("header.php");
?>
<?php
    include("config.php");
    $sql = "SELECT * FROM persona";    
    if(mysqli_query($db,$sql)){
        $resultado = mysqli_query($db,$sql);
        echo "<h1>Tabla Labor Social</h1>";
        echo "<table>";
        echo "<tr>";
        echo "<td>Nombres</td>";
        echo "<td>Apellidos</td>";
        echo "<td>Categoria</td>";
        echo "<td>Inscripciones</td>";
        echo "<td>Fecha Inicial</td>";
        echo "<td>Fecha Final</td>";
        echo "<td>Horario</td>";
        echo "<td>Objetivos</td>";
        echo "<td>Perfil</td>";
        echo "<td>Descripcion</td>";
        echo "<td>Competencias</td>";
        echo "<td>Oferta</td>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td>$row[nombres]</td>";
            echo "<td>$row[apellidos]</td>";
            echo "<td>$row[categoria]</td>";
            echo "<td>$row[inscripciones]</td>";
            echo "<td>$row[finicial]</td>";
            echo "<td>$row[ffinal]</td>";
            echo "<td>$row[horario]</td>";
            echo "<td>$row[objetivos]</td>";
            echo "<td>$row[perfil]</td>";
            echo "<td>$row[descripcion]</td>";
            echo "<td>$row[competencias]</td>";
            echo "<td>$row[oferta]</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    } 
    mysqli_close($db);  
?>
<p><a href="index.php">Volver</a></p>
<?php
    include("footer.php");
?>