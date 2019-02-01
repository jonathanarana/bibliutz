<form class="n50 cuadro textb" method="post">
  <h2>Indica tus parametros de Busqueda:</h2>
  <br>
  <label for="por">Por: </label>
  <select class="input" name="por">
    <option value="Titulo">Titulo</option>
    <option value="ISBN">ISBN</option>
    <option value="Autor">Autor</option>
    <option value="Editorial">Editorial</option>
    <option value="Resumen">Contenido</option>
  </select>
  <label for="criterio">Cuando:</label>
  <input type="text" name="criterio"
    value="<?php if (isset($_POST['criterio'])){ echo $_POST['criterio']; } ?>"
    placeholder="Criterio de Busqueda" min="5" required>
  <input type="submit" name="submit" class="btn" value="Buscar">
</form>
<?php if (isset($_POST['criterio'])): ?>
  <table class="tabla">
    <thead>
      <th>ID</th>
      <th>ISBN</th>
      <th>Titulo</th>
      <th>Autor</th>
      <th>Ubicación</th>
      <th> </th>
    </thead>
    <tbody>
      <?php foreach ($libros as $key): ?>
        <tr>
          <td><?php echo $key['idlibro']; ?></td>
          <td><?php echo $key['ISBN']; ?></td>
          <td><?php echo $key['Titulo']; ?></td>
          <td><?php echo $key['Autor']; ?></td>
          <td><?php echo $key['Ubicacion']; ?></td>
          <td> <a href="#" class="btn">Cita</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php endif; ?>

<script type="text/javascript">
  $(document).ready(function () {
    $('#search').addClass('active');
  });
</script>
