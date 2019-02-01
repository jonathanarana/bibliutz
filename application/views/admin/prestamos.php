<h1>Prestamo de Libros</h1>

<div id="alert"></div>

<form class="cuadro pc50 center n50 textb" action="/Admin/RegistrarPrestamo/" method="post" id="form">
  <label for="">Rellene todos los campos:</label>
  <br>
  <label for="idEjemplar">Codigo de Barras del Libro:</label>
  <input type="text" name="idEjemplar" required>
  <br>
  <label for="Matricula">Credencial del Alumno:</label>
  <input type="text" name="Matricula" required>
  <br>
  <input type="submit" name="submit" value="Registrar" class="btn">
</form>

<script type="text/javascript">
  $(document).ready(function () {
    $('#prestamos').addClass('active');
  });
  $('#form').submit(function (e) {
    e.preventDefault();
    $.post('/Admin/RegistrarPrestamo/',$.param($(this).serializeArray()),function (data) {
      $('#alert').html('<h2 class="alert cuadro center">Prestamo registrado con id '+data+'</h2>');
      $('#form')[0].reset();
    });
    //console.log('hi');
  });
</script>
