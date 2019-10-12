'use strict'
var asientos_seleccionados = 0;
var precio_por_asiento=50200;
var precio_total=0;
var botones = document.getElementsByClassName('fas fa-couch pointer');
var campo_cantidad = document.getElementById('cant');
var campo_precio_por_asiento = document.getElementById('precio_por_unidad');
var campo_precio_total = document.getElementById('precio_total');
campo_precio_por_asiento.innerHTML = precio_por_asiento;
botones = Array.from(botones);

botones.forEach( function(boton, indice, botones){
    boton.addEventListener('click', function(){
        seleccionarAsiento(boton);
    });
});

function seleccionarAsiento(boton){
    if( boton.classList.contains("text-light") ){
        boton.classList.replace("text-light","text-success");
        asientos_seleccionados+=1;
    }else{
        if( boton.classList.contains("text-success") ){
            boton.classList.replace( "text-success","text-light" );
            asientos_seleccionados-=1;
        }
    }
    precio_total = precio_por_asiento * asientos_seleccionados;
    campo_cantidad.innerHTML = asientos_seleccionados;
    campo_precio_total.innerHTML = precio_total;
}
