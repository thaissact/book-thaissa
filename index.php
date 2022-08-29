<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Books</title> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link href="css.css" rel="stylesheet" type="text/css" />
  <!-- Importação -->
  <script src="js/book.js" defer> </script>
</head>

<body>
<header>
  
  <aside>
     
    <form action="">
      <div class="form-group">
        <label for="txt_email">E-mail</label>
        <input type="email" name"txt_email"
        id="txt_email" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="txt_senha">Senha</label>
        <input type="password" name"txt_senha"
        id="txt_senha" class="form-control"
        
          class="btn btn-primary"
          onclick="criarLivro()"
      </div>

   <a href="#">Esqueci a senha</a>
<div>
  <input type="submit" value="Login"
    class="btn btn-primary">
  <a href="#" class="btn btn-primary">
    Cadastre-se
  </a>
</div>
      
    </form>
  </aside>
  <h1>
  <?= "BOOKS"; ?> 
  </h1

    <h2>
    <?php echo "Preocupados" ?>
    </h2>
</header>

<main>
    <form action="model/salvar-livro.php">
      <div class="form-inline justify-content-center">
        <input type="text" name="txt-livro" id="txt_livro" class="form-control">
        <input type="button" value="Salvar" class="btn btn-primary btn-outline-dark" onclick="criarLivro()">
      </div> 
    </form>
    <section id=sessaoLivros>
      <?php
      require_once "model/conexao.php";
      $sql = "SELECT * FROM book;"; 
 if(!conexao::execWithReturn ($sql)){
      echo conexao::getErro(); 
   exit(1);
 }
   // print conexao

   foreach(conexao::getData() as $livro):
   ?>
   
 }

      <article>
        <div class="col-xs-6 col-md-3">

        <img src="Fahrenheit 451.jpg" alt="Foto do livro">
      </div>
      <div>
        <h3>Livros: <span>
 <?= $livro["nome"]?>
     
          
        </span></h3>
           <h3>Páginas: <span>
              <?= $livro["paginas"]?>
           </span></h3>
        <h3>Autor: <span>
                        <?= $livro["autor"]?>
        </span></h3>
      </div>
      <div>
        <div class="marcador">
          <span class="material-icons"> book</span>
          <span class="contador">12</span>
            <span class="material-icons"> favorite</span>
          <span class="contador">12</span>
        </div>
      </div>
    </article> 
      <?php endforeach; ?>
      
  </section>
      
  

    
</main>

  
</body>

</html>
