<?php
require_once (__DIR__ . '/conn.php');

/*Insert Cliente*/
try {
  $sql = "SELECT * FROM cliente;";

  $result = mysqli_query($connection, $sql);
  $num_rows = mysqli_num_rows($result);

  if ($num_rows > 0) {
    while ($array = mysqli_fetch_array($result)) {
        $response["data"][] = array(
            "EDITAR" => '',
            "ELIMINAR" => '',
            "ID" => $array["clienteId"],
            "NOMBRE" => $array["clienteNombre"],
            "APELLIDO" => $array["clienteApellido1"],
            "TELEFONO" => $array["clienteTelefono"],
            "EMAIL" => $array["clienteEmail"]
        );
    }
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
