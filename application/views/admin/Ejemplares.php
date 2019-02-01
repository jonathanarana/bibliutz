<h1>Ejemplares de:"<?php echo $titulo; ?>".</h1>
<h2>Ud. Cuenta con <?php echo $cant; ?> Ejemplares.
  <a class="btn" href="/Admin/Reimprimir/<?php echo $id; ?>">
    Reimprimir Etiquetas
  </a>
</h2>

<?php if (isset($ids)): ?>
  <h2>Etiquetas de los Ultimos Ejemplares Agregados:</h2>
  <?php foreach ($ids as $key): ?>
    <div class="cuadro-cb">
      <p><?php echo $titulo; ?></p><br>
      <span class="cb">*<?php echo $key;?>*</span><br>
      <span>Codigo: <?php echo $key;?></span>
    </div>
  <?php endforeach; ?>
<?php else: ?>
  <form class="cuadro n50 center textb pc50" method="post">
    <label for="">Agregar Ejemplares</label>
    <br>
    <label for="Cantidad">Cantidad:</label>
    <input type="number" name="Cantidad" required min="1">
    <input type="submit" name="submit" value="Agregar" class="btn">
  </form>
<?php endif; ?>
<script type="text/javascript">
  $(document).ready(function () {
    $('#books').addClass('active');
  });
</script>
