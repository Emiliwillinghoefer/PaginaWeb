var Result = 20;
var Result2 = 20;
var Result3 = 20;
var muda_valor=0;
var frete = 0;
document.getElementById("produto1").onchange = function(){
	var Value1 = document.getElementById("produto1").value;
	
	Result = parseFloat(Value1)*20;
	console.log("VALUE 1 " + Result);
	altera();
	document.getElementById("valorTotal1").innerHTML = Result + ",00";
}


document.getElementById("produto2").onchange = function(){
	var Value2 = document.getElementById("produto2").value;
	Result2 = parseFloat(Value2)*20;
	console.log("VALUE 2 " + Result2);
	altera();
	document.getElementById("valorTotal2").innerHTML = Result2 + ",00";
}

document.getElementById("produto3").onchange= function(){
	var Value3 = document.getElementById("produto3").value;
	Result3 = parseFloat(Value3)*20;
	console.log("VALUE 3 " + Result3);
	altera() ;
	document.getElementById("valorTotal3").innerHTML = Result3 + ",00";
}

document.getElementById("entrega1").onclick= function(){
	frete = 0
	altera() 
	document.getElementById("entrega1").innerHTML = frete;
}

document.getElementById("entrega2").onclick= function () {
	// var frete2 = document.getElementById("entrega2").value;
	frete= 20
	altera() 
	document.getElementById("entrega1").innerHTML = frete;	
} 
 

document.getElementById("muda_valor").onclick = function () {
	
	window.alert("mudou");
		
}


function altera(){
	
	muda_valor = Result+ Result2+Result3 + frete;
	document.getElementById("muda_valor").innerHTML = muda_valor + ",00";
}
