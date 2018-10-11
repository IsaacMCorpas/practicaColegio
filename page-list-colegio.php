<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 05/10/2018
 * Time: 23:56
 */

/*
 Template Name: listacolegio
 */

get_header();

global $wpdb;

$sql="SELECT * FROM colegio ";
$colegios = $wpdb->get_results($sql);

?>

<form enctype="multipart/form-data"
      action="<?php echo get_home_url(); ?>/?page_id=49" method="post" >
    <button type="submit" onclick="">++ Añadir Colegio</button>
</form>
<br>
    <fieldset>
    <legend>Lista de Colegios:</legend>
    <br>
    <table>
        <tr>
            <th>NOMBRE</th>
            <th>NIF</th>
            <th>DIRECCION</th>
            <th>WEB</th>
            <th>TELEFONO</th>
        </tr>

        <?php
        foreach($colegios  as $uncolegio) {?>
            <tr>
                <td><?php echo $uncolegio->nombre; ?></td>
                <td><?php echo $uncolegio->nif; ?></td>
                <td><?php echo $uncolegio->direccion; ?></td>
                <td><?php echo $uncolegio->web; ?></td>
                <td><?php echo $uncolegio->telefono; ?></td>
            </tr>
        <?php  } ?>

    </table>
    </fieldset>
<?php
get_footer();
?>