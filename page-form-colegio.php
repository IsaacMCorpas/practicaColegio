<?php
/**
 * Created by PhpStorm.
 * User: rita
 * Date: 01/10/2018
 * Time: 17:07
 */
/*
 Template Name: registrar colegio
 */

get_header();

if (isset($_POST)){
    $nombre=$_POST['nombre'];
    $nif=$_POST['nif'];
    $direccion=$_POST['direccion'];
    $email=$_POST['email'];
    $web=$_POST['web'];
    $telefono=$_POST['telefono'];
    $licencia=$_POST['licencia'];
    global $wpdb;
    $dato = array('id' => 0, 'nombre' => $nombre , 'nif' => $nif , 'direccion' => $direccion ,'email' => $email , 'web' => $web, 'telefono' => $telefono, 'licencia' =>$licencia );
    $wpdb->insert( 'colegio', $dato );
    }
?>
    <form enctype="multipart/form-data"
          action="<?php echo get_home_url(); ?>/?page_id=49" method="post" >
        <fieldset>
            <legend>Registrar Colegios:</legend>
            <br>
            Nombre:<br>
            <input type="text" name="nombre" value=""><br>
            NIF:<br>
            <input type="text" name="nif" value=""><br>
            dirección:<br>
            <input type="text" name="direccion" value=""><br>
            e-mail:<br>
            <input type="email" name="email" value=""><br>
            web:<br>
            <input type="text" name="web" value=""><br>
            teléfono:<br>
            <input type="text" name="telefono" value=""><br>
            licencia:<br>
            <input type="text" name="licencia" value=""><br>

            <br>
            <input type="submit" name="registrar" value="Registrar">
        </fieldset>
    </form>

<?php
get_footer();
?>