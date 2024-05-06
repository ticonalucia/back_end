<?php
require_once('Database.php');

class joya{

    
    
    public static function create_joya($nombre, $tipo, $material, $peso) {
        // Crear una nueva joya en la base de datos con los datos proporcionados
        $database = new database();
        $conn = $database->getConnection();
    
        // Validar los datos proporcionados (ejemplo de validación)
        if (empty($nombre) || empty($tipo) || empty($material) || empty($peso)) {
            http_response_code(400); // Bad Request
            echo json_encode(array("message" => "Todos los campos son obligatorios."));
            return;
        }
    
        try {
            // Preparar la consulta SQL para insertar una nueva joya
            $stmt = $conn->prepare("INSERT INTO joya (nombre, tipo, material, peso) VALUES (:nombre, :tipo, :material, :peso)");
            // Vincular parámetros
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':tipo', $tipo);
            $stmt->bindParam(':material', $material);
            $stmt->bindParam(':peso', $peso);
    
            // Ejecutar la consulta
            if($stmt->execute()){
                // joya guardado correctamente
                http_response_code(201);
                echo json_encode(array("message" => "joya guardada con éxito."));
            } else {
                // Error al guardar la joya
                http_response_code(500);
                echo json_encode(array("message" => "No se ha podido guardar la joya."));
            }
        } catch (PDOException $e) {
            // Error de base de datos
            http_response_code(500);
            echo json_encode(array("message" => "Error al ejecutar la consulta: " . $e->getMessage()));
        }
    
        // Cerrar la conexión
        $conn = null;
    }
    public static function delete_joya($id){
        $database = new Database();
        $conn = $database->getConnection();
        $stmt = $conn->prepare('DELETE FROM joya WHERE id=:id');
        $stmt->bindParam(':id', $id);

        if($stmt->execute()){
            http_response_code(201);
            echo json_encode(array("message" => "joya borrado con éxito."));
        }else{
            http_response_code(500);
            echo json_encode(array("message" => "No se ha podido borrar la joya."));
        }
    }

    public static function get_all_joya(){
        $database = new Database();
        $conn = $database->getConnection();
        $stmt = $conn->prepare('SELECT * FROM joya');       
        if($stmt->execute()){
            $result = $stmt->fetchAll();
            http_response_code(200);
            echo json_encode($result);
        }else{
            http_response_code(500);
            echo json_encode(array("message" => "No se ha podido consultar las joyaas."));
        }
    }

    public static function update_joya( $id,$nombre, $tipo, $material, $peso){
        $database = new Database();
        $conn = $database->getConnection();
        $stmt = $conn->prepare('UPDATE joya SET nombre=:nombre, tipo=:tipo, material=:material, peso=:peso WHERE id=:id');
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':tipo', $tipo); 
        $stmt->bindParam(':material', $material); 
        $stmt->bindParam(':peso', $peso);  
        $stmt->bindParam(':id', $id);  
        
        if($stmt->execute()){
            http_response_code(201);
            echo json_encode(array("message" => " joya actualizado correctamente."));
        }else{
            http_response_code(500);
            echo json_encode(array("message" => "No se ha podido actualizar la joya."));
        }
    }
}
