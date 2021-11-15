<?php 
    require('./includes/conexion.php');
    $sql = "SELECT id, nombre, descripcion_corta, precio, imagen FROM productos";

    $resultados = mysqli_query($db, $sql);
?>

<?php include('./includes/templates/header.php') ?>

    <main class="container">
        <h2 class="t-center c-black">Productos</h2>

        <div class="row">
            <?php foreach($resultados as $producto): ?>
                <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <img src="img/<?php echo $producto['imagen'] ?>">
                    <span class="card-title"><?php echo $producto['nombre'] ?></span>
                    </div>
                    <div class="card-content">
                    <p class="descripcion"><?php echo $producto['descripcion_corta'] ?></p>
                    </div>
                    <div class="card-action">
                    <a href="producto.php?id=<?php echo $producto['id'] ?>">Ver Producto</a>
                    </div>
                </div>
                </div>
            <?php endforeach; ?>
        </div> 
    </main>

<?php include('./includes/templates/footer.php') ?>

<?php mysqli_close($db) ?>