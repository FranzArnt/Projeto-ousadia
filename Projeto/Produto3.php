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
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <?php
                            ob_start();

                            session_start();
                            if (!isset($_session["usuarios"])){
                                echo "Bem vindo! ".$_SESSION ["usuarios"]  ;
                            
                            
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
        <h5 class="card-title">Placa de Vídeo Gigabyte GeForce RTX 3060 </h5>
            <h1><div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="images/placa-de-video/306012.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        </h1>

                            <p class="card-text">
                             </p>
                            <h2>Placa de Vídeo Gigabyte GeForce RTX 3060 Gaming OC 12G</h2>
                    </div>
                             
                        </main>
                             <h4>

                             
                             INFORMAÇÕES TÉCNICAS
                             Características:

- Marca: Gigabyte

- Modelo: GV-N3060GAMING OC-12GD

 

Especificações:

- Processamento de Gráficos: GeForce RTX 3060

- Core Clock: 1837 MHz (cartão de referência: 1777 MHz)

- CUDA Cores: 3584

- DirectX: 12 Ultimate

- OpenGL: 4,6

 

Recursos:

- NVIDIA Ampere Streaming Multiprocessors

- 2ª Geração RT Núcleos

- 3ª Geração Tensor Núcleos

- Powered by GeForce RTX ™ 3060

- Integrado com 12GB GDDR6 interface de memória de 192 bits

- Sistema de resfriamento WINDFORCE 3X com ventiladores alternativos

- RGB Fusion 2.0

- Placa traseira de metal de proteção

- Versão limitada Hash Rate

 

Memória:

- Relógio de memória: 15000 MHz

- Tamanho da memória: 12 GB

- Tipo de Memória: GDDR6

- Barramento de Memória: 192 bits

- Largura de banda da memória (GB / s): 360 GB / s

 

Card Bus:

- PCI-E 4.0 x 16

 

Resolução máxima digital:

- 7680x4320

 

Multi-view:

- 4

 

Tamanho do cartão:

- L = 282 W = 117 H = 41 mm

 

Formulário PCB:

- ATX

 

Energia:

- PSU recomendado: 550W

- Conectores de energia: 8 pinos * 1

 

Output:

- DisplayPort 1.4a * 2

- HDMI 2.1 * 2

 

Conteúdo da Embalagem:

- Placa de Vídeo Gigabyte GeForce RTX 3060 Gaming OC 12G

- Guia rápido


Garantia:
12 meses de garantia

Peso:
1110 gramas (bruto com embalagem)



                            <div>
                            <button class="panda-btn-buy-now">Compre Aqui</button>
                            
                            
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