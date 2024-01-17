<?php include("../../templates/header.php") ?>
        
<?php 
include("../conexionBD.php");
$id = $_GET['id'];
$resultado = $conexionBD->query ("SELECT * FROM blog where id=$id");
?>

         <?php while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
            
            <main class="contenedor seccion contenido-centrado texto-entrada">
            <h1 class="fw-300 centrar_texto margin-tit"><?php echo $fila['titulo']; ?></h1>
            <img src="<?php echo $fila['imagen']; ?>" alt="imagen anuncio destacada">

            <p>Escrito el: <span><?php echo $fila['fecha']; ?></span> por: <span><?php echo $fila['autor']; ?> </span></p>
                
            <p class="descripcion-entrada"><?php echo $fila['descripcion']; ?></p>

                
            </main>
        <?php } ?>
        <?php include("../../templates/footer.php") ?>