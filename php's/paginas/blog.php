<?php include("../../templates/header.php") ?>

<?php 
include("../conexionBD.php");
$resultado = $conexionBD->query("SELECT * FROM `blog` order by id DESC");

?>
        <main class="contenedor seccion contenido-centrado marginblog">
            <h1 class="fw-300 centrar_texto margin-tit">Nuestro blog</h1>

        <?php while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
            <article class="entrada-blog">
                <div class="imagen">
                    <img src="<?php echo $fila['imagen'] ?>" alt="Entrada de blog">
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php?id=<?php echo $fila['id']; ?>"  class="titulos_imagenes">
                        <h4><?php echo $fila['titulo']; ?></h4>
                    </a>
                    <p>Escrito el: <span><?php echo $fila['fecha']; ?></span> por: <span><?php echo $fila['autor']; ?></span></p>
                    <p><?php echo $fila['parrafo']; ?></p>
                </div>
            </article>
        <?php } ?>
        </main>

        <?php include("../../templates/footer.php") ?>