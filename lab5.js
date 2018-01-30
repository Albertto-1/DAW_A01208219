function checarForm(form){
    if(form.pass1.value != "" && form.pass1.value == form.pass2.value){
        alert("La contraseña es correcta");
        return true;
    }
    else if(form.pass1.value != form.pass2.value){
        alert("Las contraseñas ingresadas no coinciden");
        return false;
        
    }
    return true;
}

function crearOpt(clase,max,index){
    var select, i, option;
    select = document.getElementsByClassName(clase);
    for (i = 0; i <= max; i ++) {
        opt = document.createElement('option');
        opt.value = opt.text = i;
        select[index].add(opt);
    }
}

function calcularTotal(subtotal){
    var iva = subtotal * .16;
    document.getElementById("iva").innerHTML = "$" + String(iva);
    var total = subtotal + iva;
    document.getElementById("total").innerHTML = "$" + String(total);
}

function calcularTotales(){
    var cantidades = document.getElementsByClassName("cantidad");
    var i, subtotal = 0, precio;
    for(i = 0; i <= 2; i++){
        if(i == 0){
            precio = cantidades[i].value * 1000;
        }
        else if (i == 1){
            precio = cantidades[i].value * 1500;
        }
        else{
            precio = cantidades[i].value * 1111;   
        }   
        subtotal = subtotal + precio;
    }
    document.getElementById("subTotal").innerHTML = "$" + String(subtotal) + ".00";
    calcularTotal(subtotal);
}

function calcularSubTotal(index){
    var cantidad = document.getElementsByClassName("cantidad")[index].value;
    if(index == 0){
        cantidad = cantidad * 1000;
    }
    else if (index == 1){
        cantidad = cantidad * 1500;
    }
    else{
        cantidad = cantidad * 1111;
    }
    document.getElementsByClassName("subTotal")[index].innerHTML = "$" +String(cantidad) + ".00";
    calcularTotales();
}

function confirmarPago(){
    alert("Pedido realizado")    
}

crearOpt("cantidad",10,0);
crearOpt("cantidad",4,1);
crearOpt("cantidad",20,2);


