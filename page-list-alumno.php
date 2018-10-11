<?php
/**
 * Created by PhpStorm.
 * User: rita
 * Date: 08/10/2018
 * Time: 18:23
 */
/**
Template Name:listaalumno
 */

get_header();
global $wpdb;
$sql='SELECT * FROM colegio';
$colegios = $wpdb->get_results( $sql );

$sql="SELECT * FROM alumno ";
$alumnos = $wpdb->get_results($sql);
?>

<form enctype="multipart/form-data"
      action="<?php echo get_home_url(); ?>/?page_id=49" method="post" >
    <button type="submit" onclick="">++ Añadir alumno</button>
</form>

<div>
    <div>Colegio
        <select name="colegio" id="colegio">
            <option value="" selected disabled>Seleccione un colegio...</option>
            <?php
            foreach ( $colegios as $uncolegio )
            {?>
                <option  value="<?php echo $uncolegio->id; ?>" > <?php echo "NOMBRE: ".$uncolegio->nombre ."   ::   NIF: ". $uncolegio->nif ; ?></option>
                <?php
            }
            ?>
        </select>
    </div><br>
    <div>
        Grupo
        <select name="grupo" id="grupo">
            <option value="" selected disabled>Seleccione un grupo...</option>
            <option value="" >falta el ajax</option>
            <option value="" >Einsten I</option>
            <option value="" >Einstein II</option>
            <option value="" >Pascal</option>
            <option value="" >Newton</option>


        </select>
    </div>
</div><br>
<form action="" method="GET">
    <fieldset>
        <legend>Lista de Colegios:</legend>

  <br><br>
   <div id="contenedorgrupo">
       <br>
       <table>
           <tr>
               <th>Nombre</th>
               <th>Fecha de nacimiento</th>
               <th>Comentario</th>
               <th>Puntuacion</th>
           </tr>

           <?php
           foreach($alumnos   as $unalumno) {?>
               <tr>
                   <td><?php echo $unalumno->nombre; ?></td>
                   <td><?php echo $unalumno->fechanacimiento; ?></td>
                   <td><?php echo $unalumno->comentario; ?></td>
                   <td><?php echo $unalumno->puntuacion; ?></td>
               </tr>
           <?php  } ?>

       </table>

   </div>
     <br><br>
  <input type="submit">
  </fieldset>


</form>


<?php
get_footer();
?>
