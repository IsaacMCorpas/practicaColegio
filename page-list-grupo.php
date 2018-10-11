<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 08/10/2018
 * Time: 15:21
 */

/*
 Template Name: listagrupo
 */

get_header();

global $wpdb;

$sql="SELECT id,nombre FROM colegio ";
$colegios = $wpdb->get_results($sql);

if (isset($_POST)) {

    $idcolegio = $_POST['idcolegio'];
    $sql = "SELECT * FROM grupo WHERE idcolegio=" . $idcolegio;
    $grupos = $wpdb->get_results($sql);
}

?>


    <form enctype="multipart/form-data"
          action="<?php echo get_home_url(); ?>/?page_id=53" method="post" >
        <button type="submit" onclick="">++ Añadir Grupo</button>
    </form>
    <br>
    <br>
<form enctype="multipart/form-data"
      action="<?php echo get_home_url(); ?>/?page_id=60" method="post" >
    colegio:<br>
    <select name="idcolegio">
        <option value="" selected disabled >seleccione un colegio...</option>
        <?php
        foreach($colegios  as $uncolegio) {?>
            <option value="<?php echo $uncolegio->id ; ?>"><?php echo $uncolegio->nombre; ?></option>
        <?php  } ?>
    </select>
    <input type="submit" name="registrar" value="buscar">

</form>
    <br><br>
    <fieldset>
        <legend>Lista de Colegios:</legend>
        <br>
        <table>
            <tr>
                <th>NOMBRE</th>
                <th>EDAD</th>
                <th>AULA</th>
            </tr>

            <?php
            foreach($grupos  as $ungrupo) {?>
                <tr>
                    <td><?php echo $ungrupo->nombre; ?></td>
                    <td><?php echo $ungrupo->edad; ?></td>
                    <td><?php echo $ungrupo->aula; ?></td>
                </tr>
            <?php  } ?>

        </table>
    </fieldset>
<?php
get_footer();
?>