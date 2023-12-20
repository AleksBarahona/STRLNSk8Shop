<?php include("db.php") ?>

<?php include("includes/header.php") ?>

<main class="contenedor">
        <h1>Contacto</h1>

        <?php if(isset($_SESSION['mensage'])){ ?>
          <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['mensage'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php session_unset(); } ?>

        <div class="contacto">
            <h2 class="contacto__titulo">Contactanos</h2>
            <form action="save_comment.php" method="POST">
              <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre">
                  <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" name="correo">
                  <label for="exampleFormControlInput1" class="form-label">Numero Telefonico</label>
                  <input type="number" class="form-control" id="exampleFormControlInput1" name="numero">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label" >Comentarios</label>
                  <input class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentario"></textarea>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="enviar_comentario" value="enviar">
              </form>
        </div>
    </section>

<?php include("includes/footer.php") ?>