<?php
    include("header.php");
?>
    <?php
    echo "<h1>Formulario Labor Social</h1>"
    ?>
    <form action="ingreso.php" method="post">
        <label for="nombres">Nombres:</label><br>
        <input type="text" id="nombres" name="nombres" autocomplete="off" required><br>

        <label for="apellidos">Apellidos:</label><br>
        <input type="text" id="apellidos" name="apellidos" autocomplete="off" required><br>

        <label for="categoria">Categoria:</label><br>
        <input type="text" id="categoria" name="categoria" autocomplete="off" required><br>

        <label for="inscripciones">Inscripciones:</label><br>
        <input type="text" id="inscripciones" name="inscripciones" autocomplete="off" required><br>

        <label for="finicial">Fecha Inicial:</label><br>
        <input type="date" id="finicial" name="finicial" autocomplete="off" required><br>

        <label for="ffinal">Fecha Final:</label><br>
        <input type="date" id="ffinal" name="ffinal" autocomplete="off" required><br>

        <label for="horario">Horario:</label><br>
        <input type="text" id="horario" name="horario" autocomplete="off" required><br>

        <label for="objetivos">Objetivos:</label><br>
        <input type="text" id="objetivos" name="objetivos" autocomplete="off" required><br>
        
        <label for="perfil">Perfil:</label><br>
        <input type="text" id="perfil" name="perfil" autocomplete="off" required><br>

        <label for="descripcion">Descripcion:</label><br>
        <input type="text" id="descripcion" name="descripcion" autocomplete="off" required><br>

        <label for="competencias">Competencias:</label><br>
        <input type="text" id="competencias" name="competencias" autocomplete="off" required><br>

        <label for="oferta">Oferta:</label><br>
        <input type="text" id="oferta" name="oferta" autocomplete="off" required><br>
        <br>      

        <input type="submit" value="Registrar Labor Social">
    </form>
    <p><a href="index.php">Volver</a></p>
<?php
    include("footer.php");
?>