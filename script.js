$(function () {

    cargarClientes();

    $("#formSubmit").submit( async (e) => {
      e.preventDefault();

      await $.post('php/insert.php',
        {
          nombre: $("#inputNombre").val(),
          apellido: $("#inputApellido").val(),
          telefono: $("#inputTelefono").val(),
          email: $("#inputEmail").val()
        },
        (res) => {
          console.log(JSON.parse(res));
          cargarClientes();
        }
      );

    });

});

const cargarClientes = async () => {
  await $.get('php/select.php',{},
          function (res) {
              const myJSON = JSON.parse(res);
              //console.log(myJSON.data);
              $("#tbodyTable").empty();
              $.each(myJSON.data, (idx, el) => {
                $("#tbodyTable").append(`
                  <tr>
                    <th scope="row"><button class="btn btn-secondary">Editar</button></th>
                    <th scope="row"><button class="btn btn-danger">Borrar</button></th>
                    <th scope="row">${el.ID}</th>
                    <td>${el.NOMBRE}</td>
                    <td>${el.APELLIDO}</td>
                    <td>${el.TELEFONO}</td>
                    <td>${el.EMAIL}</td>
                  </tr>
                  `)
              })
          });
}
