<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Manuel</title>
</head>
<body>
    
    <?php

        
        class Hastag{

            private $numComents;
            
            private $textoHastag;

        }
        class Articulo {
            private $titulo;
            private $contenido;
            
            private $hastag;
            private $meGusta;
            public function __construct($titulo, $contenido, $hastag, $meGustas) {
                 
                $this->titulo = $titulo;
                $this->contenido = $contenido;
                $this->hastag = $hastag;
                $this->meGusta = $meGustas;
   

            } 
            public function getTitulo() { return $this->titulo; }
            public function getConta() { return $this->contenido; }
            public function getHastag() { return $this->hastag; }
            public function getMeGusta() { return $this->meGusta; }

            
        }
        function obtenerArticulos (){

            $articulo = [

                    new Articulo("Titulo 1", "Este es el contenido del primer post de mi blog ","#1 #2 #3",10),
                    new Articulo("Titulo 2", "Este es el contenido del segundo post de mi post, puedes escribir temas diferentes y ofrecer tu opnion o experiencia","#4 #5 #6",5),
                    new Articulo("Titulo 3", "Este es el contenido del terce post de mi post, puedes escribir compartir tus ideas y ...","#4 #5 #6",5)

                ];

                
            return $articulo;

        }
    ?>
    
</body>
</html>