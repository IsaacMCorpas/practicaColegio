<?php
/*
Template Name: Registro Alummno
*/



get_header();

$nombre = $_POST['nombre'];
$fecha_de_nacimiento = $_POST['fecha_de_nacimiento'];
$comentario = $_POST['comentario'];

/*SQL Consulta */

$sql = "INSERT INTO formulario (nombre,fecha_de_nacimiento,comentario) VALUES 
('".$nombre."','".$fecha_de_nacimiento."','".$comentario."');";

/**/

$wpdb->query($sql);

?>

	<div id="primary">
		<div id="content" role="main">
            <div id="center">
            <h2>Formulario de Alumno</h2>
            <form method="post" enctype="multipart/form-data"
                  action="<?php echo get_home_url(); ?>/?page_id=5">

                <label>Nombre:</label>
                <input type="text" name="nombre">
                <br><br>

                <label>Fecha de Nacimiento:</label>
                <input type="text" name="fecha_de_nacimiento">
                <br><br>

                <label>Comentarios:</label>
                <textarea type="text" name="comentario"></textarea>
                <br><br>
                <input type="submit" value="Enviar">


            </form>
		</div><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_footer();
