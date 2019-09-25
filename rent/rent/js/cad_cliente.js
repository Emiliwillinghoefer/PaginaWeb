
document.getElementById("perfilP").onclick = function(){
	document.getElementById("empresa").disabled = true;
	document.getElementById("mensagem-empresa").innerHTML = "Entre em contato pra estabelecer uma parceria!";
};

document.getElementById("perfilC").onclick = function(){
	document.getElementById("empresa").value = "";
	document.getElementById("empresa").disabled = true;
	document.getElementById("mensagem-empresa").innerHTML = "";	
};

document.getElementById("form-cadastro").onsubmit = validaCadastro;


var contErros = 0;

function mostraErro(idErro, mensagem){
	idErro.style.display = "block";
	idErro.innerHTML = mensagem;
	contErros++;
}

document.getElementById("CPF").onkeypress=function(){
	var a = document.getElementById("CPF").value;

	if(a.length==3 || a.length==7){
		a+=".";
	}
	if(a.length==11){
		a+="-"
	}

	document.getElementById("CPF").value=a;
	document.getElementById("CPF").innerHTML="";
}

function validaCadastro(){
	
	contErros = 0;
	
	//campo nome
	var campo = document.getElementById("nome");
	var erro = document.getElementById("msg-nome");
	if ((campo.value == "") || (campo.value.indexOf(" ") == -1)){
		mostraErro(erro, "Por favor digite seu nome completo");
	}else{
		erro.style.display = "none";
	}

	//campo CPF

	//campo email
	var campo = document.getElementById("email");
	var erro = document.getElementById("msg-email");
	if ((campo.value == "") || (campo.value.indexOf("@") == -1)){
		mostraErro(erro, "Por favor digite seu e-mail completo");
	}else{
		erro.style.display = "none";
	}


	//campo endereço
	var campo = document.getElementById("endereco");
	var erro = document.getElementById("msg-endereco");
	if (campo.value == ""){
		mostraErro(erro, "Por favor digite seu endereço");
	}else{
		erro.style.display = "none";
	}

	//campo bairro
	var campo = document.getElementById("bairro");
	var erro = document.getElementById("msg-bairro");
	if (campo.value == ""){
		mostraErro(erro, "Por favor selecione seu bairro");
	}else{
		erro.style.display = "none";
	}

	//campo perfil
	var campo = document.getElementById("perfilP");
	var campo2 = document.getElementById("perfilC");
	var erro = document.getElementById("msg-perfil");
	if (campo.checked == false && campo2.checked == false){
		mostraErro(erro, "Por favor selecione seu perfil");
	}else{
		erro.style.display = "none";
	}


	//campo login
	var campo = document.getElementById("login2");
	var erro = document.getElementById("msg-login");
	if (campo.value == "" || campo.value.length <= 6){
		mostraErro(erro, "Por favor digite o login com no mínimo 6 caracteres");
	}else{
		erro.style.display = "none";
	}


	//campo senha
	var campo = document.getElementById("senha");
	var erro = document.getElementById("msg-senha");
	if (campo.value == "" || campo.value.length <= 6){
		mostraErro(erro, "Por favor digite o login com no mínimo 6 caracteres");
	}else{
		erro.style.display = "none";
	}


	//campo senha
	var senha = document.getElementById("senha2");
	var erro = document.getElementById("msg-senha2");
	if (senha.value == "" || senha.value.length <= 6 || senha.value != campo.value){
		mostraErro(erro, "Por favor digite o login com no mínimo 6 caracteres");
	}else{
		erro.style.display = "none";
	}

	//campo perfil
	var campo = document.getElementById("concordo");
	var erro = document.getElementById("msg-concordo");
	if (campo.checked == false){
		mostraErro(erro, "Por favor, concorde!");
	}else{
		erro.style.display = "none";
	}

	if(contErros > 0){
		return false;
	}else{
		alert("Cadastro realizado com sucesso")
	}	


}