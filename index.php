<?php include("db.php") ?>

<?php include("includes/header.php") ?>

    <main class="contenedor">
       <h1>La mejor SK8Shop del fokin worl</h1>

       <!--carousel-->
       <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/jonescover.jpg" class="d-block w-100 carousel-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/kalis.jpg" class="d-block w-100 carousel-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/alexis.jpeg" class="d-block w-100 carousel-img" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
        
      <h2 >Comentarios</h2>

      <div class="col-md-8 tabla__comentarios">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Comentario</th>
                <th>Fecha</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $query = "SELECT * FROM comentarios";
                $resultado_comentarios = mysqli_query($conn ,$query);

                while($row = mysqli_fetch_array($resultado_comentarios)) { ?>
                <tr>
                  <td><?php echo $row['nombre']?></td>
                  <td><?php echo $row['comentario']?></td>
                  <td><?php echo $row['fecha']?></td>
                </tr>
               <?php }  ?>
            </tbody>
          </table>
      </div>

      </div>
    </main>

<?php include("includes/footer.php") ?>