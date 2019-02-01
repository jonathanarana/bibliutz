<h1>Lista de Libros</h1>

<table class="tabla">
  <thead>
    <th>ID</th>
    <th>ISBN</th>
    <th>Titulo</th>
    <th>Autor</th>
    <th> <a href="/Admin/AgregarLibro" class="btn">Agregar Libro</a> </th>
  </thead>
  <tbody>
    <?php foreach ($libros as $key): ?>
      <tr>
        <td><?php echo $key['idlibro']; ?></td>
        <td><?php echo $key['ISBN']; ?></td>
        <td><?php echo $key['Titulo']; ?></td>
        <td><?php echo $key['Autor']; ?></td>
        <td> <a href="/Admin/Ejemplares/<?php echo $key['idlibro']; ?>" class="btn">Ejemplares</a> </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<script type="text/javascript">
  $(document).ready(function () {
    $('#books').addClass('active');
  });
</script>
