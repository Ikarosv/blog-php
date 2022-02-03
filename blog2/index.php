<?php
    require_once "conexao.php";
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    

    <title>Blog com PHP e MySql</title>
  </head>
  <body style="background-color: #111111;">
  <!-- Cabeçalho -->
    <header class="Header navbar navbar-expand navbar-dark flex-column flex-md-row flex-wrap flex-md-nowrap align-items-center">
        <a href="index.php" class="Header-item navbar-brand mt-n1 mb-n1 d-none d-md-flex p-0" aria-label="Logo">
            <img class="img-fluid d-block" src="img/Official_unity_logo.png" alt="Logo da unity"  width="36" height="36">
        </a><!-- input-sm form-control -->
        <form class="Header-item" action="" method="get">
            <label class="form-control Header-search-wrapper rounded-left p-0 position-relative d-flex flex-justify-between flex-items-center m-0 border-right-0">
                <input type="text" class=" Header-search-input" placeholder="Pesquisar" aria-label="Pesquisar" autocomplete="off">
                <button class="d-flex align-items-center bg-white border-light btn rounded-right" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="22px" fill="#000000">
                        <path d="M0 0h24v24H0V0z" fill="none"/>
                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                    </svg>
                </button>
            </label>
        </form>
        <div class="Header-item Header-item--full flex-column flex-md-row width-full flex-order-2 flex-md-order-none mr-0 mr-md-3 d-md-flex">
            <nav class="d-flex flex-column flex-md-row flex-self-strech flex-md-self-auto">
                <a href="" class="Header-link mt-md-n3 mb-md-n3 py-2 py-md-3 mr-3">Início</a>

                <a href="" class="Header-link mt-md-n3 mb-md-n3 py-2 py-md-3 mr-3">Sobre nós</a>

                <a href="" class="Header-link mt-md-n3 mb-md-n3 py-2 py-md-3 mr-3">Contato</a>
            </nav>
        </div>
        <div class="Header-item mr-3 flex-order-none">
            <strong>
            <a class="btn btn-outline-light Header-link-btn btn-sm" href="#">Entrar/Cadastrar</a>
            </strong>
        </div>

    </header>
    <!-- fim do cabeçalho -->

    <!-- Body real do site -->
    <div class="d-md-flex color-bg-inset" style="min-height: 100vh;">

        <!-- Barra de nav do lado esquerdo -->
        <aside class="time-coluna-esquerda col-md-3 color-border-muted border-bottom hide-md border-right color-bg-default ">
            <div class="top-0 px-4" style="position: static; width: auto; height: 100%;">
                <div class="pt-4 mb-3 mt-1 sticky-top overflow-hidden">
                    <h2 class=" border-bot pb-2 mb-1 hide-md text-white d-flex justify-content-between align-items-center f5">
                        Posts
                        <a href="criar.php" class="btn btn-sm btn-success">+ Criar</a>
                    </h2>
                    <ul class="px-2" style="list-style: none;">
                    <?php foreach($query as $q){ ?>
                        <li class="w-100 mt-2 linkss">
                            <a href="visualizar.php?id=<?php echo $q['id']?>"><?php echo substr($q['title'],0,50); ?></a>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </aside>

        

    <!--Mostrar posts do banco de dados-->
        <div class="flex-auto col-md-9 px-3">

            <!-- Mostra alertas -->
            <div class="container my-3">

                <?php if(isset($_REQUEST['info'])){ ?>
                    <?php if($_REQUEST['info'] == "added"){ ?>
                        <div class="alert alert-success" role="alert">
                            Postagem adicionada com sucesso!
                        </div>
                    <?php } else 
                        if($_REQUEST['info'] == "delete"){ ?>
                        <div class="alert alert-danger" role="alert">
                            Postagem excluida com sucesso!!
                        </div>
                    
                <?php }} ?>

            </div>

            <div class="bg-success d-flex flex-column align-items-center">

                <div class="pt-3 ">
                    <div class="border border-white py-3 px-4">
                        <h6 class="text-white m-0"> POSTS RECENTES </h6>
                    </div>
                </div>

                <div class="w-100 row mt-2 mx-0 py-2">
                    <?php foreach($query as $q){ ?>    
                        <div class="col-12 col-lg-12 d-flex justify-content-center">
                            <div class="card text-white bg-dark mt-5" style="width: 100%;">

                                <img src="<?php echo $q['imagem']; ?>" alt="<?php echo $q['alt_img']; ?>" class="card-image-top" style="max-height: 250px;">
                                
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $q['title'];?></h5>
                                    <p class="card-text"><?php echo substr($q['content'],0,125);?>...</p>
                                    <a href="visualizar.php?id=<?php echo $q['id']?>" class="btn btn-success">Leia mais<span class="text-danger">&rarr;</span></a>
                                        
                                </div>
                                    <small class="card-footer"><?php echo $q['datapost'] ?></small>
                                </div>
                            </div>
                    <?php } ?>
                </div>
            </div>
            <footer class="footer bg-dark py-3 mt-3">
                <div class="text-center">
                    <a href="criar.php" class="btn btn-outline-success">+ Criar uma nova postagem</a>
                </div>
                
            </footer>
        </div>
        
    <!-- fim do body real -->
    </div>
    

        
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    
  </body>
</html>