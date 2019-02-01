<h1>DashBoard</h1>
<div class="cuadro">
  <h2>Prestamos</h2>
  <div class="cuadro-dash">
    <h2>Activos:
      <a href="/Admin/PActivos" class="btn"><?php echo $nprestamos; ?></a>
    </h2>
  </div>

  <div class="cuadro-dash">
    <h2>Vencen Hoy:
      <a href="/Admin/PActivos" class="btn"><?php echo $npvh; ?></a>
    </h2>
  </div>

  <div class="cuadro-dash">
    <h2>Vencidos:
      <a href="/Admin/PActivos" class="btn"><?php echo $npv; ?></a>
    </h2>
  </div>
</div>
<br>
<script type="text/javascript">
  $(document).ready(function () {
    $('#dashboard').addClass('active');
  });
</script>
