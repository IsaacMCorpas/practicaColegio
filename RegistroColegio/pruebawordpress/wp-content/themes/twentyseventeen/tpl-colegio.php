<?php
/*
Template Name: Registro Colegio
*/



get_header();

$nombre = $_POST['nombre'];
$nif = $_POST['nif'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$web = $_POST['web'];
$telefono = $_POST['telefono'];
$licencia = $_POST['licencia'];
$error = "";

/*SQL Consulta */

$sql = "INSERT INTO fcolegio (nombre,nif,direccion,email,web,telefono,licencia) VALUES 
('".$nombre."','".$nif."','".$direccion."','".$email."','".$web."','".$telefono."','".$licencia."');";

/**/

$wpdb->query($sql);

?>


	<div id="primary">
		<div id="content" role="main">
            <div id="center">
            <h2>Formulario del Colegio</h2>
            <form method="post" enctype="multipart/form-data"
                  action="<?php echo get_home_url(); ?>/?page_id=9">

                <select name="" id="">
                    <option value="">Seleciona tu colegio</option>
                </select>


                <label>Nombre:</label>
                <input type="text" name="nombre">
                <br><br>

                <label>NIF:</label>
                <input type="text" name="nif">
                <br><br>

                <label>Direccion:</label>
                <input type="text" name="direccion">
                <br><br>

                <label>Email:</label>
                <input type="text" name="email">
                <br><br>

                <label>Web:</label>
                <input type="text" name="web">
                <br><br>

                <label>Telefono:</label>
                <input type="text" name="telefono">
                <br><br>

                <label>Licencia:</label>
                <input type="text" name="licencia">
                <br><br>

                <input type="submit" value="Enviar">


            </form>
		</div><!-- #main -->
	</div><!-- #primary -->
</div>

    if ($nombre == "") {
    echo="El campo no puede quedar vacio</br>";
    }


<?php get_footer();
