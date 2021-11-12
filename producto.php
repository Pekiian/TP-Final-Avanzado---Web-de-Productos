<?php

require('./includes/conexion.php');
    $id = $_GET['id'];
    $sql = "SELECT nombre, descripcion_larga, precio, imagen FROM productos WHERE id = $id";

    $resultados = mysqli_query($db, $sql);

    $resultado = $resultados->fetch_assoc();
?>
    <?php include('./includes/templates/header.php') ?>

    <main class="contenedor product-page">
        <div class="texto">
            <h2 class="t-center"><?php echo $resultado['nombre']; ?></h2>
            <p><?php echo $resultado['descripcion_larga']; ?></p>
            <p>$<?php echo $resultado['precio']; ?></p>
            <a href="/index.html" class="btn-comprar">Comprar</a>
        </div>
        <img class="prueba" src="img/<?php echo $resultado['imagen']; ?>" alt="Imagen del Producto">
    </main>

    <footer class="site-footer">
        <p class="copyright">Todos los Derechos Reservados 2021&copy;</p>
    </footer>
</body>
</html>