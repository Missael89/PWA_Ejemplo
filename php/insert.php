<?php
require_once (__DIR__ . '/conn.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

/*Insert Cliente*/
try {
  $sql = "INSERT INTO cliente(clienteNombre, clienteApellido1, clienteTelefono, clienteEmail) VALUES('{$nombre}', '{$apellido}', '{$telefono}', '{$email}')";

    if (mysqli_query($connection, $sql)) {
        $response = array(
            "success" => true,
            "message" => "Cliente Agregado.",
            "error" => null
        );
    } else {
        $response = array(
            "success" => false,
            "message" => "No de ejecuto el query: {$sql}",
            "error" => null
        );
    }

    mysqli_close($connection);
} catch (Exception $e) {
  $response = array(
      "success" => false,
      "message" => "Error del servidor",
      "error" => $e
  );
}

echo json_encode($response);
