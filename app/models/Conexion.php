<?php
const SERVER = "localhost";
const DB = "dbasistencia"; // Especifica el nombre de la base de datos aquí
const USER = "root";
const PASS = "";

const SGBD = "mysql:host=" . SERVER . ";port=3306;dbname=" . DB . ";charset=UTF8";

class Conexion { 

    protected static function getConexion() {
        try {
            $pdo = new PDO(SGBD, USER, PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configurar modo de error
            return $pdo; 
        } catch (Exception $e) {
            //error_log("Error en la conexión:" . $e->getCode());
            die("Error en la conexión: " . $e->getMessage());
        }
    }

/**MEtodo optiene datos atravez del SPU  y los retorna en forma de arreglos */
    public  static function getData($storeProcedure):array{
      return[];
    }




    /** Evita SQL Injection */
    public static function limpiarCadena($cadena):string {
        $cadena = trim($cadena);
        $cadena = stripslashes($cadena);

        //Javascript


        $cadena = str_ireplace("<script>","",$cadena);
        $cadena = str_ireplace("</script>","",$cadena);
        $cadena = str_ireplace("<script src=","",$cadena);
        $cadena = str_ireplace("<script type=","",$cadena);
        $cadena = str_ireplace("'>","",$cadena);
        

        //SQL

        $cadena = str_ireplace("select * from","",$cadena);
        $cadena = str_ireplace("delete from","",$cadena);
        $cadena = str_ireplace("inset into","",$cadena);
        $cadena = str_ireplace("drop table","",$cadena);
        $cadena = str_ireplace("truncate table","",$cadena);
        $cadena = str_ireplace("show tables","",$cadena);
        $cadena = str_ireplace("show database","",$cadena);
      
        // etiquetas 

        $cadena = str_ireplace("<?php","",$cadena);
        $cadena = str_ireplace("?>","",$cadena);
        $cadena = str_ireplace("--","",$cadena);
        $cadena = str_ireplace(">","",$cadena);
        $cadena = str_ireplace("<","",$cadena);
        $cadena = str_ireplace("[","",$cadena);
        $cadena = str_ireplace("]","",$cadena);
        $cadena = str_ireplace("{","",$cadena);
        $cadena = str_ireplace("}","",$cadena);
        $cadena = str_ireplace("==","",$cadena);
        $cadena = str_ireplace("^","",$cadena);
        $cadena = str_ireplace(";","",$cadena);
        $cadena = str_ireplace("::","",$cadena);

        $cadena = trim($cadena);
        return $cadena;
    }
  }  // fin Clase
