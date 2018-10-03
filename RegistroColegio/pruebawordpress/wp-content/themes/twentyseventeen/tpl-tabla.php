<?php
/*
Template Name: Tabla Grupos
*/

get_header();

mysqli_connect("localhost","Isaac") or die("no se pudo conectar");
mysqli_select_db("fcolegio") or die("no se puedo conectar");
$fcolegio = $_REQUEST['fcolegio'];
$query="select * from fcolegio";
$res=mysqli_query($query);


?>

    <form name="">
        <select name="" id="">
            <option value="">Elige tu colegio</option>
            <?php while ($row=mysqli_fetch_array($res))
            {?>
                <option value="<?php echo $row['fcolegio']?>"> <?php echo $row['fcolegio'];?></option>
                <?php } ?>
        </select>

        <input type="submit" name="enviar" value="Enviar"><br><br>
    </form>
<?php echo "Tu colegio elegido fue: ".$fcolegio;?>

<?php get_footer();
