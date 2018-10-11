<?php
/**
 * Created by PhpStorm.
 * User: rita
 * Date: 03/10/2018
 * Time: 18:23
 */
/*
 Template Name: registrar grupo
 */

get_header();

global $wpdb;

    if (isset($_POST)) {
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $aula = $_POST['aula'];
        $idcolegio = $_POST['idcolegio'];


        $dato = array('id' => 0, 'nombre' => $nombre, 'edad' => $edad, 'aula' => $aula, 'idcolegio' => $idcolegio);
        $wpdb->insert('grupo', $dato);
    }

    $sql="SELECT id,nombre FROM colegio ";
    $colegios = $wpdb->get_results($sql);

?>
    <form enctype="multipart/form-data"
          action="<?php echo get_home_url(); ?>/?page_id=53" method="post" >
        <fieldset>
            <legend>Registrar Grupos:</legend>
            <br>
            Nombre:<br>
            <input type="text" name="nombre" value=""><br>
            Edad:<br>
            <input type="text" name="edad" value=""><br>
            Aula:<br>
            <input type="text" name="aula" value=""><br>
            colegio:<br>
            <select name="idcolegio">
                <option value="" selected disabled >seleccione un colegio...</option>
                <?php
                foreach($colegios  as $uncolegio) {?>
                <option value="<?php echo $uncolegio->id ; ?>"><?php echo $uncolegio->nombre; ?></option>
                <?php  } ?>
            </select>
            <br>
            <br>
            <input type="submit" name="registrar" value="Registrar">
        </fieldset>
    </form>

<?php
get_footer();
?>