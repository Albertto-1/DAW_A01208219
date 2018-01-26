function cuad_cubo(){  
    var numero = prompt("INGRESA UN NÚMERO");
    var T_results = document.getElementById("table");
    
    var fila1 = T_results.insertRow(0);
    var col1 = fila1.insertCell(0);
    col1.innerHTML = "Cubo";
    var col2 = fila1.insertCell(0);
    col2.innerHTML = "Cuadrado";
    var col3 = fila1.insertCell(0);
    col3.innerHTML = "Numero";
    
    var i, cuadrado, cubo, fila2;
    
    for (i = 1; i <= numero; i++){
        cuadrado = Math.pow(i,2);
        cubo = Math.pow(i,3);
        
        fila2 = T_results.insertRow();
        col1 = fila2.insertCell();
        col2 = fila2.insertCell();
        col3 = fila2.insertCell();
        
        col1.innerHTML = String(i);
        col2.innerHTML = String(cuadrado);
        col3.innerHTML = String(cubo);
    }
}
    
function suma(){
    var num1 = Math.floor(Math.random() * 100);
    var num2 = Math.floor(Math.random() * 100);
    var time1 = Date.now();
    var resultado = prompt(num1 +"+"+ num2);
    var time2 = Date.now();

    if (resultado==(num1+num2)){
        document.getElementById("suma").innerHTML = String("Correcto... Te tomó: "+((time2-time1)/1000)+"segundos");
    }
    else{
        document.getElementById("suma").innerHTML = String("Incorrecto... Te tomó: "+((time2-time1)/1000)+"segundos");
    }
    
}

function pre_contador(){
    var n = prompt("¿Cuántos números quieres meter?");
    var arr = [];
    for (i=0; i<n; i++){
        arr[i]=prompt("Número "+(i+1)+":");
    }
    contador(arr);
}
function contador (arr){
    var n = arr.length;
    var menor=0, mayor=0, igual=0;
    for (i=0;i<n;i++){
        if(arr[i]<0){
            menor=menor+1;
        }
        else if (arr[i]>0){
            mayor=mayor+1;
        }
        else{
            igual=igual+1;
        }
    }
    document.getElementById("menor_mayor").innerHTML = String("Hay "+String(igual)+" iguales a cero, "+String(menor)+" menores a cero y "+String(mayor)+" mayores a cero.");
    
}
function pre_prom(){
    var n = prompt("¿Cuántas filas quieres tener?");
    var m = prompt("¿Cuántas columnas quieres tener?");
    var arr = [];
    var T_results = document.getElementById("table2");

    for (i=0; i<n; i++){
        for (j=0; j<m; j++){
            arr[j]=prompt("Fila "+(i+1)+", número "+(j+1)+":");
        }
        fila = T_results.insertRow();
        col = fila.insertCell();
        col.innerHTML = String(prom(arr));
    }
}
function prom (arr){
    var suma=0, result=0, i;
    for (i=0; i<arr.length; i++){
        suma=arr[i]+suma;        
    }
    result=(suma/arr.length);
    return result;    
}
    

  