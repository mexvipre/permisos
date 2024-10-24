<?php

require_once "Conexion.php";
/**
 * Contiene toda la lógica de acceso a datos 
 */

class Usuario extends Conexion {
    // Objeto a nivel de clase que almacena la conexión
    private $pdo;

    // Al momento de instanciar esta clase, el objeto "pdo" recibe la conexión
    public function __construct() {
        $this->pdo = parent::getConexion();
    }

    /**
     * Validará el acceso en 2 pasos (primero usuario, segundo contraseña)
     * @param array $params Arreglo que contiene el nombre de usuario y la contraseña
     * @return array Retornará una colección con los datos del usuario o un mensaje de error
     */
    public function login($params = []): array {
        try {

            // Preparar el comando
            $cmd = $this->pdo->prepare("CALL spu_usuarios_login(?)");

            $cmd ->execute(array($params['nomuser']));

            return $cmd->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(Exception $e){
          error_log("Error login:" . $e->getMessage());
          return[];

        }
    }

    public function add() {
        // Implementación para agregar un usuario
    }

    public function update() {
        // Implementación para actualizar un usuario
    }

    public function delete() {
        // Implementación para eliminar un usuario
    }
}
