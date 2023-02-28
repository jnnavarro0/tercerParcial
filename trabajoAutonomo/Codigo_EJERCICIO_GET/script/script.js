function validar(opcion) {
    switch (opcion) {
        case 'cuadrado':
            document.getElementById("lado_1").disabled = false;
            document.getElementById("lado_2").disabled = true;
            document.getElementById("lado_3").disabled = true;            
            document.getElementById("lado_2").value = "";
            document.getElementById("lado_3").value = "";
            break;
        case 'rectangulo':
            document.getElementById("lado_1").disabled = false;
            document.getElementById("lado_2").disabled = false;
            document.getElementById("lado_3").disabled = true;
            document.getElementById("lado_3").value = "";
            break;
        case 'triangulo':
            document.getElementById("lado_1").disabled = false;
            document.getElementById("lado_2").disabled = false;
            document.getElementById("lado_3").disabled = false;
            break;
        default:
            document.getElementById("lado_1").disabled = true;
            document.getElementById("lado_2").disabled = true;
            document.getElementById("lado_3").disabled = true;
    }
}