function criarLivro(){
  
let divImagem= document.creatElement("div");
let img = document.creatElement("img");
  
    img.setAttribute("src", "Fahrenheit 451.jpg");
    img.setAttribute("alt", "Foto do livro");

     divImagem.appendChild(img);

  let divDados= document.creatElement("div");
  divDados.setAttribute("class", "livro-dados");

  let hTitulo= document.creatElement("h3");
  let hPaginas= document.creatElement("h3");
  let hAutores= document.creatElement("h3");

  let spanTitulo= document.creatElement("span");
  let spanPaginas= document.creatElement("span");
  let spanAutores= document.creatElement("span");

hTitulo.innerHTML="Livro: ";
hPaginas.innerHTML="paginas";
hAutores.innerHTML="autor/a/as/es:"


  let nomeLivro = document.querySelector("txt_livro").value;
  

  spanTitulo.innerHTML = nomeLivro;
  spanPaginas.innerHTML= "???";
  spanAutores.innerHTML="???";


  hTitulo.appendChild(spanTitulo);
  hPaginas.appendChild(spanPaginas);
  hAutores.appendChild(spanAutores);
  
  divDados.appendChild(hTitulo);
  divDados.appendChild(hPaginas);
  divDados.appendChild(hAutores);

  
    let divMarcadores= document.creatElement("div");
  
    divMarcadores=appendChild(criarMarcadores("book", 0));
    divMarcadores=appendChild(criarMarcadores("favorite", 0));
  
}
let article= document.creatElement("article");
 article.appendChild(divImagem);
 article.appendChild(divDados);
 article.appendChild(divMarcadores);

document.querySelector("#sessaoDeLivros")
.appendChild(article);

function criarMarcadores(icon, numero){
  let div = document.createElement("div");
  div,setAttribute("class", "marcador");

  let spanIcon= document.creatElement("span");
  spanIcon.setAttribute("class", "material-icons");
  spanIcon.innerHTML = icon;


  let spanNumero = document.creatElement("span");
  spanNumero.setAttribute("class", "contador");
  spanNumero.innerHTML=numero;

  div.appendChild(spanIcon);
  div.appendChild(spanNumero);

  return div;
  
}