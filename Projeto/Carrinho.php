<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="styles.css" />
    <link
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"

    />
  </head>

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
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registroDeUsuario.html">Registrar</a>
                    
                        </li>

                </ul>
                <?php
                         ob_start();

                         session_start();
                         if (!isset($_session["users"])){
                             echo "Bem vindo! ".$_SESSION ["users"]  ;
                         
                         
                          }
                         
   
                          ?>
                         <li> <a   href= "logout.php" >Sair</a>   </li>
 
                      </div>
                    </div>
                </nav>

            

                    
    </header>

    <body>
    <main>

      <div class="page-title">Seu Carrinho</div>
      <div class="content">
        <section>
          <table>
            <thead>
              <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Total</th>
                <th>-</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="product">
                    <img src="images/placa-de-video/Design sem nome.png" alt="" />
                    <div class="info">
                      <div class="name">Placa De Vídeo RTX 4070 TI</div>
                      <div class="category">Placa de Vídeo</div>
                    </div>
                  </div>
                </td>
                <td>R$ 4.329</td>
                <td>
                  <div class="qty">
                    <button><i class="bx bx-minus"></i></button>
                    <span>1</span>
                    <button><i class="bx bx-plus"></i></button>
                  </div>
                </td>
                <td>R$ 4.329</td>
                <td>
                  <button class="remove"><i class="bx bx-x"></i></button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="product">
                    <img src="images/placa-de-video/15.png" alt="" />
                    <div class="info">
                      <div class="name">Iphone 15</div>
                      <div class="category">Iphone</div>
                    </div>
                  </div>
                </td>
                <td>R$ 6.500</td>
                <td>
                  <div class="qty">
                    <button><i class="bx bx-minus"></i></button>
                    <span>1</span>
                    <button><i class="bx bx-plus"></i></button>
                  </div>
                </td>
                <td>R$ 6.500</td>
                <td>
                  <button class="remove"><i class="bx bx-x"></i></button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="product">
                    <img src="images/placa-de-video/apple.png" alt="" />
                    <div class="info">
                      <div class="name">Apple Watch</div>
                      <div class="category">Relogio</div>
                    </div>
                  </div>
                </td>
                <td>R$ 1.800</td>
                <td>
                  <div class="qty">
                    <button><i class="bx bx-minus"></i></button>
                    <span>1</span>
                    <button><i class="bx bx-plus"></i></button>
                  </div>
                </td>
                <td>R$ 1.800</td>
                <td>
                <form action="Carrinho1.php">
                  <button class="remove"><i class="bx bx-x"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </section>
        <aside>
          <div class="box">
            <header>Resumo da compra</header>
            <div class="info">
              <div><span>Sub-total</span><span>R$ 12.629</span></div>
              <div><span>Frete</span><span>Gratuito</span></div>
              <div>
                <button>
                  Adicionar cupom de desconto
                  <i class="bx bx-right-arrow-alt"></i>
                </button>
              </div>
            </div>
            <footer>
              <span>Total</span>
              <span>R$ 12.629</span>
            </footer>
          </div>
          <button>Finalizar Compra</button>
        </aside>
      </div>
    </main>
  </body>
</html>
