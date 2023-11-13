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


                            </div>
                        </div>
                    </div>
        </section>
        <div></div><div></div>
        <div>---</div><div>-</div>
        <section class="container" id="Placas de vídeo">
        <b class="preco">
        
        <h4 class="card-title">Placa De Vídeo RTX 4070 TI</h4>
        
        
            <h1><div class="row row-cols-5 row-cols-md-2 row-cols-lg-3 g-2">
                <div class="col">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="images/placa-de-video/4070ti12.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <div>R$4.329</div>
                        </h1>

                    
        
             <h1>Placa de Vídeo RTX 4070 TI Gigabyte NVIDIA GeForce, 12 GB GDDR6X</h1>
             </div>
             <form action="Carrinho.php">
             <button class="panda-btn-buy-now">Compre Aqui
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
Especificações:
    <div></div>

<div></div>
 
<div></div>
CPU:
<div></div>
- Core Clock: 2625 MHz - OC Mode:software-enable only
- Cuda Core: 7680
<div></div>
Memória:
<div></div>
- Clock: 21 Gbps - OC Mode:software-enable only
- Capacidade: 12 GB
- Interface: 192 bits
- Tipo: GDDR6X
<div></div>
Portas:
<div></div>
- 1x HDMI
- 3x DisplayPort
<div></div>
Recursos:
<div></div>
- DirectX 12
- OpenGL 4.6
- Ferramentas: Gigabyte Control Center
<div></div>
Interface:
<div></div>
- PCI Express 4.0 x16
- Board Form: ATX 2.9 slot
- Fan/Heat Sink: WINDFORCE 3X
- Dimensões: 58 x 301 x 136 mm
<div></div>
Energia:
<div></div>
- Recomendação de PSU: 750W
- GPU-TDP: 201 W
- Total Power-TGP: 285W
<div></div>
Conteúdo da Embalagem:
<div></div>
- Placa de Vídeo Gigabyte
- Guia do Usuário
Garantia:
36 meses de garantia
<div></div>
Peso:
<div></div>
1770 gramas (bruto com embalagem)

                            <div>
                            
                            
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

