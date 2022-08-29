<?php
require_once "conexao.php";
$nome_livro = $_GET["txt_livro"];
$sql = "ISERT INTO public.book
  (nome, paginas,autor)
  VALUES ('$nome_livro', 100, '???');";

conexao::exec($sql);
header("Location: ../index.php");
