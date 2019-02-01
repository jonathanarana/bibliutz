<h1>Lista de Ejemplares en Prestamo</h1>

<table class="tabla">
  <thead>
    <th>ID</th>
    <th>Libro</th>
    <th>Usuario</th>
    <th>Prestamo</th>
    <th>Vence</th>
  </thead>
  <tbody>
    <?php foreach ($prestamos as $key): ?>
      <tr>
        <td><?php echo $key['idPrestamos']; ?></td>
        <td><?php echo $key['Ejemplar']; ?></td>
        <td><?php echo $key['Nombre']." ".$key['APaterno']." ".$key['AMaterno']; ?></td>
        <td><?php echo $key['Prestamo']; ?></td>
        <td><?php echo $key['Vence']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<script type="text/javascript">
  $(document).ready(function () {
    $('#dashboard').addClass('active');
  });
</script>
