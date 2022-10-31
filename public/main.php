<?php

use Src\Service\ApiService;

require __DIR__ ."/../vendor/autoload.php";


$misFotos = (new ApiService())->devolverFotos();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN BOOTSTRAP =>me permite usar estilos sin necesidad de descargarlos (usándolos de internet)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--CDN FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Fotos</title>
</head>

<body>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php 
            $cont=1;
            foreach ($misFotos as $foto) {
                echo ($cont==1) ? "<div class='carousel-item active'>" : "<div class='carousel-item'>";
                echo <<<TXT
                <div class="card" style="width: 90%;">
                    <img src="{$foto->getFoto()}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">AUTOR:{$foto->getAutor()}</h5>
                        <p class="card-text">Likes:{$foto->getLikes()}.</p>
                       
                    </div>
                </div>
           
                TXT;
                echo"</div>";
                $cont++;
            }
            ?>
             </div>
            
           
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</body>

</html>