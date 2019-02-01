<h1>Etiquetas de Ejemplares de:"<?php echo $titulo; ?>".</h1>

  <?php foreach ($ids as $key): ?>
    <div class="cuadro-cb">
      <p><?php echo $titulo; ?></p><br>
      <span class="cb">*<?php echo $key['idEjemplar'];?>*</span><br>
      <span>Codigo: <?php echo $key['idEjemplar'];?></span>
    </div>
  <?php endforeach; ?>
