<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eight & Three</title>
    <link rel="stylesheet" href="Paginasdecompras.css">
    <!-- bootstrap stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- header  start -->
    <header>
 
        <nav class="navbar fixed-top  navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="images/logo3.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Produtos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="index.php">Tv</a></li>
                                <li><a class="dropdown-item" href="index.php">Smart Watch</a></li>
                                <li><a class="dropdown-item" href="index.php">Placa de Vídeo</a></li>
                                <li><a class="dropdown-item" href="index.php">Iphone</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registroDeUsuario.html">Registrar</a>
                        </li>

                    </ul>
                    <form class="d-flex">

                    </form>
                    <?php
                            ob_start();

                            session_start();
                            if (!isset($_session["users"])){
                                echo "Bem vindo! ".$_SESSION ["users"]  ;
                            
                            
                             }
                            
      
                             ?>
                            <li> <a   href= "logout.php" >Deslogar</a>   </li>

                


                </div>
            </div>
        </nav>


    <footer class="container footer text-center">
        <p><small>Eight & Three Ecomerce. All rights reserved. Made in Brazilian</small></p>
    </footer>

    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>



        <main>
        <div>
        
                            

                            </div>
                        </div>
                    </div>
        </section>
        <div></div><div></div>
        <div>---</div><div>-</div>
        <section class="container" id="Placas de vídeo">
        <h5 class="card-title">Placa De Vídeo RTX 4060 Aero</h5>
            <h1><div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="images/placa-de-video/4060ti8.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        </h1>

                            <p class="card-text">
                             </p>
                            <h5>Placa De Vídeo RTX 4060 Aero Oc Gigabyte Nvidia Geforce, 8GB,
                            <div>
                            <button class="panda-btn-buy-now">Compre Aqui</button>
                            
                            </h5>
                   
                             
                        </main>
                             <h6>

                             <div></div>  
                             INFORMAÇÕES TÉCNICAS
                             <div></div>  
Características
<div></div>  
- Marca: Gigabyte

- Modelo: GV-N407TEAGLE OC-12GD

 
<div></div>  
Especificações
<div></div>  

 

características
<div></div>   marca: gigabyte-<div></div>   modelo:<div></div>   gv-n4060aero oc-8gd<div></div>  especificações<div></div>   processado<div></div> gráfico:<div></div>   geforce rtx 4060- core clock: 2550 mhz 
 (reference card: 2460 mhz)- cuda core: 3072- memory clock: 17 gbps-<div></div>   tamanho da memória: 8 gb-<div></div>   directx: 12 ultimate- opengl: 4.6<div></div>   fonte de alimentação <div></div>  recomendada: 450w<div></div>  conector de alimentação: 8 pin*1saída:- 2x displayport 1.4a- 2x hdmi 2.1agarantia:1 ano de garantia

 <div></div>  

Conteúdo da Embalagem
<div></div>  
- Placa de Vídeo Gigabyte

- Guia do Usuário
<div></div>  

Garantia:
36 meses de garantia
<div></div>  
Peso:
1770 gramas (bruto com embalagem)




                    
                            
                            
                        </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  
    </main>


    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
</body>

</html>