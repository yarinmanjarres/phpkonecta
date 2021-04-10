$(document).ready(e => {

   $('.insertar').click(($event) => {
       insertar(); 
    });
});



$.ajax({
    type: "POST",
    url: 'http://127.0.0.1/prueba/back/controllers/productos.php?consultar',
    data: "",
    dataType: "json",
}).done(res => {
   mostrar_listado(res); 
   
}).fail((err) => {
    console.log( "holaaa");

});


function mostrar_listado(res) {


    let count_product = 0;
    for (let x of res) {
        $('.contenedor_listado').append(`
      <tr>
      <th scope="row">${x.ID}</th>
        <td>${x["Nombre de producto"]}</td>
        <td>${x["Categoria"]}</td>
        <td><button type="button" class="btn btn-danger eliminar_button">eliminar</button></td>
      </tr>
        `)
        $('.eliminar_button').eq(count_product).off('click');
        $('.eliminar_button').eq(count_product).on('click', { x }, eliminar);
        count_product++;
    }

   
}


function insertar(res) {
    $.ajax({
        type: "POST",
        url: 'http://127.0.0.1/prueba/back/controllers/productos.php?insertar',
        data: "",
        dataType: "json",
    }).done(res => {
    
        location.reload();
    }).fail((err) => {
       
    
    }); 

   
}



function eliminar(e) {
   let  product= e.data.x; 
    $.ajax({
        type: "POST",
        url: 'http://127.0.0.1/prueba/back/controllers/productos.php?eliminar',
        data: {data:{id:product.ID }},
        dataType: "json",
    }).done(res => {
    
        location.reload();
    }).fail((err) => {
       
    
    }); 
    
}
