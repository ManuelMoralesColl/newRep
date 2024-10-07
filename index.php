<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Blog</title>
    <link rel="stylesheet" href="styleBlog.css">
</head>
<body>
    <header><h1 >Mi Blog</h1></header>
    <aside>
            <a href="?id">Inicio</a>
            <a href="?id">Blog</a>
            <a href="?id">Sobre mi</a>
            <a href="?id">Contacto</a>
        </aside>
    <main>
        <?php
            require_once("blog.php");
            $articulo = $_GET['id'];
            $listado = obtenerArticulos();

            echo "<br>";

            echo "<section>";
            foreach($listado as $elemento){
                echo "<article>";

                echo "<h2>".$elemento-> getTitulo()."</h2>";
                echo "<p> " .$elemento -> getConta()."</p>";
                echo "<p id= 'hastGrey'> Hastag: " . $elemento-> getHastag()."</p>";
                echo "<p> <b>Like: </b> " . $elemento-> getMeGusta()."<a id='megusta'>Me gusta</a>". " </p>";

                echo "</article>";
            }
            echo "</section>";
        ?>
        
    </main>
    
</body>
</html>