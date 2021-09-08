event.preventDefault();

//CADASTRO
function validaCadastro(){

  var formulario = document.forms[0];

  var nome = document.getElementsByName("nome")[0].value;
  var cpf = document.getElementsByName("cpf")[0].value;
  var data = document.getElementsByName("nascimento")[0].value;
  var cidade = document.getElementsByName("cidade")[0].value;
  var estado = document.getElementsByName("estado")[0].value;
  var cep = document.getElementsByName("cep")[0].value;
  var email = document.getElementsByName("email")[0].value;
  var senha1 = document.getElementsByName("senha1")[0].value;
  var senha2 = document.getElementsByName("senha2")[0].value;

  var erro = false;

  //valida nome
  nome[0].toUpperCase();    //transforma a primeira letra em maiuscula
  if (nome.match(/^[a-zA-Z\u00C0-\u017F´]+\s+[a-zA-Z\u00C0-\u017F´]{3,}$/) && nome.trim().split(' ').length >= 2 ) {
    //aceita letras com acentos ou sem, string com pelo menos 1 espaço no meio
    erro = false;
  } else {
    document.getElementById("nomeErro").innerHTML ="⚠️ Digite o nome e sobrenome, o nome deve ter no mínimo 3 letras";
    //alert("Digite o nome e sobrenome, o nome deve haver no mínimo 3 letras");
    erro = true;
  }

  //valida cpf
  if (cpf.match(/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/)) { //Valida tanto 123.456.789-00 quanto 12345678900.
    erro = false;                                //Não valida o algoritmo, só o formato
  } else {
    document.getElementById("cpfErro").innerHTML ="⚠️ Digite o CPF corretamente";
    erro = true;
  }

  //valida Data de nascimento
  dataAtual = new Date();
  data = new Date(data);
  if (data > dataAtual) {         //não esta calculando data minima
    document.getElementById("dataErro").innerHTML ="⚠️ Data inválida, você não pode ter nascido no futuro!";
    erro = true;
  }

  //valida estado
  estado.toUpperCase();
  if (estado.length>2) {
    document.getElementById("estadoErro").innerHTML ="⚠️ Digite apenas as siglas do seu estado";
    erro = true;
  }

  //valida CEP
  if (cep.match(/^\d{5}-?\d{3}/)) { //aceito cep com ou sem traço
    erro = false;
  } else {
    document.getElementById('cepErro').innerHTML="⚠️ Digite um CEP válido";
    erro = true;
  }

  //valida email
  if (email.indexOf("@") < 0) {
    document.getElementById("emailErro").innerHTML="⚠️ O e-mail precisa conter pelo menos um @!";
    erro = true;
  }
  else if (email.indexOf(".") < 0) {
    document.getElementById("emailErro").innerHTML="⚠️ O e-mail precisa conter pelo menos um .";
    erro = true;
  }
  else if (email.indexOf("@") == email.length) {
    alert("O e-mail não pode terminar com @!");
    erro = true;
  }
  else if (email.indexOf(".") == email.length) {
    document.getElementById("emailErro").innerHTML="⚠️ O e-mail não pode terminar com um .";
    erro = true;
  }
  else if (email[0].match(/^[a-z]$/)) {
    if (email.match(/^[a-z0-9_.+-]+@[a-z0-9-]+\.[a-z]+\.?[a-z]+?$/)) {
      erro = false;
    } else {
      document.getElementById("emailErro").innerHTML="⚠️ Digite um email válido!";
      erro = true;
    }
  } else {
    document.getElementById("emailErro").innerHTML="⚠️ O email deve começar com letra minúscula";
    erro = true;
  }

  //valida senha
  if (senha1 != senha2) {
    document.getElementById("senha2Erro").innerHTML="⚠️ As senhas não conferem!";
    erro = true;
  }
  if (senha1.length < 6 || senha1.length > 12) {
    document.getElementById("senha1Erro").innerHTML="⚠️ As senhas devem ter no mínimo 6 caracteres e no máximo 12";
    erro = true;
  }

/*  document.querySelector("input[type='password']").addEventListener("keyup", function() {
    var tam = senha1.length;
    var title = 'Força da senha';
    if (tam <= 6 && senha1.match(/^[a-zA-Z0-9]+$/)) {
      title = 'fraca';
    } else if (tam > 6 && senha1.match(/^((?=.*[a-zA-Z])(?=.*[0-9])(?=.*[|!"$%&@\/\(\)\?\^\'\\\+\-\*]))^.*$/)) {
      title = 'media';
    }
    else if (tam > 6 && senha1.match(/^((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[|!"$%&@\/\(\)\?\^\'\\\+\-\*]))^.*$/)) {
      title = 'forte';
    }
    // Altera o atributo 'title' com a palavra que identifica a força da senha.
    document.querySelector('.password-strength').setAttribute('title', title);
  }, false);
*/


  if (erro) {
      return false;
  } else {
      alert("Cadastro feito com sucesso!!!");
      formulario.submit();
      return true;
  }

}








//INICIO
function validaLogin() {
  var formulario = document.forms[0];
  var email = document.getElementsByName("email")[0].value;

  var erro = false;

  //valida email
  if (email.indexOf("@") < 0) {
    document.getElementById("emailErro").innerHTML="⚠️ O e-mail precisa conter pelo menos um @!";
    erro = true;
  }
  else if (email.indexOf(".") < 0) {
    document.getElementById("emailErro").innerHTML="⚠️ O e-mail precisa conter pelo menos um .";
    erro = true;
  }
  else if (email.indexOf("@") == email.length) {
    alert("O e-mail não pode terminar com @!");
    erro = true;
  }
  else if (email.indexOf(".") == email.length) {
    document.getElementById("emailErro").innerHTML="⚠️ O e-mail não pode terminar com um .";
    erro = true;
  }
  else if (email[0].match(/^[a-z]$/)) {
    if (email.match(/^[a-z0-9_.+-]+@[a-z0-9-]+\.[a-z]+\.?[a-z]+?$/)) {
      erro = false;
    } else {
      document.getElementById("emailErro").innerHTML="⚠️ Digite um email válido!";
      erro = true;
    }
  } else {
    document.getElementById("emailErro").innerHTML="⚠️ O email deve começar com letra minúscula";
    erro = true;
  }


  if (erro) {
      return false;
  } else {
      alert("Login feito com sucesso!!!");
      formulario.submit();
      window.open(reserva.html);
      <a href="reserva.html"></a>
      return true;
  }
}








//CONTATO
function validaContato() {
  var formulario = document.forms[0];

  var nome = document.getElementsByName("nome")[0].value;
  var email = document.getElementsByName("email")[0].value;
  var cel = document.getElementsByName("telefone")[0].value;

  //valida nome
  if (nome.match(/^[a-zA-Z]{3,}$/)) {
    erro = false;
  } else {
    document.getElementById("nomeErro").innerHTML="⚠️ O nome deve ter no mínimo 3 letras";
    erro = true;
  }

  //valida email
  if (email.indexOf("@") < 0) {
    document.getElementById("emailErro").innerHTML="⚠️ O e-mail precisa conter pelo menos um @!";
    erro = true;
  }
  else if (email.indexOf(".") < 0) {
    document.getElementById("emailErro").innerHTML="⚠️ O e-mail precisa conter pelo menos um .";
    erro = true;
  }
  else if (email.indexOf("@") == email.length) {
    alert("O e-mail não pode terminar com @!");
    erro = true;
  }
  else if (email.indexOf(".") == email.length) {
    document.getElementById("emailErro").innerHTML="⚠️ O e-mail não pode terminar com um .";
    erro = true;
  }
  else if (email[0].match(/^[a-z]$/)) {
    if (email.match(/^[a-z0-9_.+-]+@[a-z0-9-]+\.[a-z]+\.?[a-z]+?$/)) {
      erro = false;
    } else {
      document.getElementById("emailErro").innerHTML="⚠️ Digite um email válido!";
      erro = true;
    }
  } else {
    document.getElementById("emailErro").innerHTML="⚠️ O email deve começar com letra minúscula";
    erro = true;
  }

  //valida Celular
  if (cel.match(/^\(\d{2}\)\d{5}\-\d{2}\-\d{2}$/)) {
    erro = false;
  }
  else {
    document.getElementById("telErro").innerHTML="⚠️ Digite o celular no formato: (12)12345-12-12";
    erro = true;
  }


  if (erro) {
      return false;
  } else {
      alert("Cadastro feito com sucesso!!!");
      formulario.submit();
      return true;
  }

}
