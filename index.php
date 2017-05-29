<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Project PHP</h1>
        
        
        
        <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        
        
        $p[0] = new Pessoa('Junio', 35, 'M');
        $p[1] = new Pessoa('Maria', 25, 'F');
        
        $l[0] =new Livro('POO', 'Junio', 30, $p[0]);
        $l[1] =new Livro('PHP', 'Junio', 150, $p[1]);
        
        $l[0]->abrir();
        $l[0]->folhear(10);
        $l[0]->detalhes();
        
        $l[1]->abrir();
        $l[1]->folhear(10);
        $l[1]->detalhes();
       
        
        ?>
    </body>
</html>
