<?php defined('BASEPATH') OR exit('Sin Acceso a Este Recurso');?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>BibliUTZ</title>
    <link rel="stylesheet" href="/css/master.css">
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li class="active"><a href="/Publico/" id="home">Inicio</a></li>
          <li><a href="/Publico/Buscar" id="search">Buscar</a></li>

          <?php if (isset($_SESSION['admin'])): ?>
            <li><a href="/Admin/" id="dashboard">DashBoard</a></li>
            <li><a href="/Admin/Libros" id="books">Libros</a></li>
            <li><a href="/Admin/Prestamos" id="prestamos">Prestamos</a></li>
            <li><a href="/Admin/Devoluciones" id="devoluciones">Devoluciones</a></li>
            <li class="float-r"><a class="salir" href="/Admin/logout">Salir</a></li>
          <?php else: ?>
            <li><a href="/Publico/Login" id="administracion">Administración</a></li>
          <?php endif; ?>
        </ul>
      </nav>
    </header>
    <div class="container b50 cuadro text-center">
    <!-- SPK-1155	KB-658 AC-5894 -->
