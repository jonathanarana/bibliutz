<form class="n50 cuadro textb pc50 center" method="post">
  <h2>Ingresa tus Credenciales:</h2>
  <br>
  <label for="user">Usuario:</label>
  <input type="text" name="user"
    value="<?php if (isset($_POST['user'])){ echo $_POST['user']; } ?>"
    placeholder="Nombre de Usuario" required>
  <br>
  <label for="password">Contraseña:</label>
  <input type="password" name="password" placeholder="Contraseña" required>
  <br>
  <input type="submit" name="submit" class="btn" value="Ingresar">
</form>
<script type="text/javascript">
  $(document).ready(function () {
    $('#administracion').addClass('active');
  });
</script>
