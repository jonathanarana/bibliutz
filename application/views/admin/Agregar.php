<h1>Agregar Libro al Inventario</h1>
<div  id="alert">

</div>
<form class="cuadro n50 textb pc50 center"  method="post" id="form">
  <label for="">Ingrese Todos los Datos</label>
  <br>
  <label for="Titulo">Titulo:</label>
  <input type="text" name="Titulo" required>
  <br>
  <label for="Autor">Autor:</label>
  <input type="text" name="Autor" required>
  <br>
  <label for="Editorial">Editorial:</label>
  <input type="text" name="Editorial" required>
  <br>
  <label for="Anio">Año de Publicacion:</label>
  <input type="number" name="Anio" required>
  <br>
  <label for="Ciudad">Ciudad de Publicación</label>
  <input type="text" name="Ciudad" required>
  <br>
  <label for="ISBN">ISBN:</label>
  <input type="text" name="ISBN">
  <br>
  <label for="Resumen">Resumen:</label>
  <br>
  <textarea class="input" name="Resumen" rows="8" cols="50"></textarea>
  <!-- <br>
  <label for="Ejemplares">Numero de Ejemplares:</label>
  <input type="number" name="Ejemplares" required min="0"> -->
  <br>
  <label for="Ubicacion">Ubicacion:</label>
  <input type="text" name="Ubicacion" required>
  <br>
  <input type="submit" name="submit" value="Guardar" class="btn">
</form>

<script type="text/javascript">
  $(document).ready(function () {
    $('#books').addClass('active');
  });
</script>

<script type="text/javascript">

  $('#form').submit(function(event) {
    event.preventDefault();
    $.post('/Admin/GuardarLibro',$.param($(this).serializeArray()),function (data) {
      $('#alert').html('<h2 class="alert cuadro center">Libro Agregado con id '+data+'</h2>');
      $('#form')[0].reset();
    });
  });
</script>
