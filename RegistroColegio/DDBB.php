
<?php
class BD{
	
	static $db_server="localhost";
	static $db_user="root";
	static $db_password="";
	static $db_name="bdclublectura";
	private  $table;
	private static $conn;
	
	public function __construct($table){
		$this->table=$table;
		echo("la tabla::  ".$table);
		self::conectar();
	}
	
	static function conectar(){
		try {
			self::$conn=new PDO("mysql:host=" . self::$db_server .";dbname=" . self::$db_name, self::$db_user, self::$db_password);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	
    function getAll() {
        $res = self::$conn->query("select * from " . $this->table);
        return $res->fetchAll();
    }
    function getById($id) {
        $res = self::$conn->query("select * from " . $this->table . " where id=" . $id);
        return $res->fetch();
    }
    
    function deleteById($id) {
        try {
            self::$conn->exec("delete from " . $this->table . " where id=" . $id);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    function insert($valores) {
        try {
            $campos = join(",", array_keys($valores));
            $parametros = ":" . join(",:", array_keys($valores));
            
            //echo ("campos: ".$campos."<br>  parametros: ".$parametros['nombre']." <br> nombre tabla:". $this->table );
            $sql = "insert into " . $this->table . "($campos) values ($parametros)";
            
            //echo (" <br> Consulta ".$sql);
            $st = self::$conn->prepare($sql);
            $st->execute($valores);
            
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
}

//funciona el crear una coneccion
//$alumno= new BD('alumno');
//funciona el insertar
//$dato = array('id' => 0, 'nombre' => 'Agus Blazquez' , 'fNacimiento' => '2011-02-19' , 'comentario' => 'mmmm' ,'puntuacion' => 3 , 'idGrupo' => 1 );
//$alumno->insert($dato);

//funciona el borrar
//$id='1';
//$alumno->deleteById($id);

//funcion el datos del alumno de un id determinado
//$id='5';
//$resultado=$alumno->getById($id);
//echo($resultado['nombre']);


$colegio= new BD('colegio');
//funciona el insertar
$dato = array('id' => 0, 'nombre' => 'escuela Icaria' , 'nif' => 'x666666666' , 'direccion' => 'calle fluvia 60' ,'email' => 'fluvia@email.cat' , 'web' => 'www.fluvia.cat' );
$colegio->insert($dato);
?>