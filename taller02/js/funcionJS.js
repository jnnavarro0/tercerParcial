function FactorialJS(TEXTO){
	var total=1;
	var num=Number(document.getElementById('TEXTO').value);
	for (var i = 1; i <= num; i++){
		total = total*i;
	}
	alert("Factorial de "+ num + " es: "+ total);
}

