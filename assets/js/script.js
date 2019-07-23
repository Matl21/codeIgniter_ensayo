window.addEventListener('load', recargar);

//METODO PARA CARGA INFORMACION
function recargar(){
    var peticion=new XMLHttpRequest();
    peticion.onreadystatechange=function(){
        

        if(this.readyState==4){
            document.getElementById('cuerpo').innerHTML=this.responseText;
            asignarEventos();
        }};
    peticion.open('GET', 'libro/cargarDatos');
    peticion.send();
}

//METODO PARA ASIGNAR EVENTOS
function asignarEventos(){
    
    document.getElementById('btn').addEventListener('click', accion);
    var btnEditar=document.getElementsByClassName('btnEditar');
    var btnEliminar=document.getElementsByClassName('btnEliminar');

    for (var index = 0; index <btnEditar.length; index++) {
        //PARA EMPEZAR A CARGAR
        // btnEditar[index].addEventListener('click', actualizar);
        btnEliminar[index].addEventListener('click', eliminar);
        
    }
}



function accion() {
  
    var titulo=document.getElementById('titulo').value;
    var descripcion=document.getElementById('descripcion').value;
    var autor=document.getElementById('autor').value;


    estado="DISPONIBLES"

        
    var peticion=new XMLHttpRequest();
    peticion.onreadystatechange=function(){
        
        if(this.readyState==4){
            document.getElementById('cuerpo').innerHTML=this.responseText;
           
            recargar();
        // limpiar();

            document.getElementById('btn').value="agregar";
            document.getElementById('btn').innerHTML="AGREGAR";
        }};

         var datos='titulo='+titulo+"&descripcion="+descripcion+"&autor="+autor+"&estado="+estado;
        // if (this.value=="update") {
        //     datos +='&id_libro='+id_libro;
        // }

        // alert(datos);
        peticion.open('POST', 'Libro/'+this.value);
        peticion.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        peticion.send(datos);
    

}



function eliminar() {
    var peticion=new XMLHttpRequest();
    peticion.onreadystatechange=function(){
       if(this.readyState==4){
            recargar();
        }};

    peticion.open('GET', 'Libro/eliminar/'+this.value);
    peticion.send()
}





