<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=j, initial-scale=1.0">
        <title>betsy</title>
        <link rel="preload" href="normalize.css" as="style">
        <link rel="stylesheet" href="normalize.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
    </head>

<body>
    <?php
        include_once('layout/header-admin.php');
    ?>
    <p> Inicio -> Admin -> Nuevo</p>
    <main class="contenedor sombra">
        <section>
            <h2>Nuevo articulo</h2>
            <form class="contacto__formulario">
                <fieldset>
                    <div class="contenedor-login">
                        <div class="campo">
                            <label>Nombre</label>
                            	<input class="input-text" type="text" placeholder="Nombre del artículo">
                        </div>
                        <div class="campo">
                            <label>Precio</label>
                            <input class="input-text" type="tel" placeholder="Precio">
                        </div>
                        <div class="campo">
                            <label>Categoría</label>
                            <input class="input-text" type="email" placeholder="Categoría del articulo">
                        </div>
                        <div class="campo">
                            <label>Nombre de la imagen correspondiente</label>
                            <input class="input-text" type="text" placeholder="Imagen">
                        </div>
                        <div class="campo">
                            <label>Stock</label>
                            <input class="input-text" type="text" placeholder="Stock">
                        </div>
                        
                        
                    </div>

                    <div class="alinear-derecha flex">
                        <input class="boton w-100" type="submit" value="Agregar">
                    </div>
                </fieldset>
            </form>
        </section>
    </main>
    <?php
        include_once('layout/footer.php');
    ?>

</body>

</html>
