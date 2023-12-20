<?php include("db.php") ?>

<?php include("includes/header.php") ?>

<main class="contenedor">
        <h1>Converse - AS-1 Pro</h1>

        <div class="tenis">
            <img class="tenis__imagen" src="img/as-1.jpg" alt="Tenis">

            <div class="tenis__contenido">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sapien nulla, fermentum quis massa id, lacinia congue turpis. 
                    Quisque lacinia massa quis tempor sollicitudin. Sed tincidunt tellus a vulputate malesuada.  
                </p>

                <form class="formulario">
                    <select class="formulario__campo">
                        <option disabled selected>-- Seleccionar Talla --</option>
                        <option>28.5</option>
                        <option>28</option>
                        <option>27.5</option>
                        <option>27</option>
                        <input class="formulario__campo" type="number" placeholder="Cantidad" min="1">
                        <input class="formulario__submit" type="submit" value="Agregar al carrito">
                    </select>
                </form>
            </div>
        </div>
    </main>

    <?php include("includes/footer.php") ?>