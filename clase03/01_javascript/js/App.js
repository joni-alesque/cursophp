// Producto
class Producto{
    constructor(nombre, precio_compra, precio_venta, tipo, anio){
        this.nombre         = nombre;
        this.precio_compra  = precio_compra;
        this.precio_venta   = precio_venta;
        this.tipo           = tipo;
        this.anio           = anio;
    }
}

class UI{
    agregarProducto(producto){
        let guardarProducto = '';
        // obtendremos lo que se encuentra almacenado en el 'tienda.productos.temporal'        
        let productos = sessionStorage.getItem('tienda.productos.temporal');
        // validamos si existe algún elemento dentro del 'tienda.productos.temporal'
        if(productos != null && productos != '' && productos != 'null'){            
            // Si hay elementos parseamos a JSON los elementos para poder manejar los elementos fácilmente
            let lstProductos = JSON.parse(productos);     
            // Validamos si el JSON es un array
            /*if( JSON.stringify(lstProductos).substr(0,1) == '[' ){*/
                // De ser un array, transformamos la variable de JSON a un String y le quitamos los corchetes
                lstProductos = JSON.stringify(lstProductos);
                lstProductos = lstProductos.replace('[','');
                lstProductos = lstProductos.replace(']','');
                // En la variable de ayuda guardarProducto concatenamos el nuevo producto, convirtiendolo en String
                guardarProducto = '['+lstProductos+','+JSON.stringify(producto)+']';
            /*}else{
                // De 
                guardarProducto = '['+JSON.stringify(lstProductos)+','+JSON.stringify(producto)+']';
            }  */     
            
            sessionStorage.setItem('tienda.productos.temporal', guardarProducto);
        }else{
            // De ser el primer elemento, transformamos la variable de JSON a String, le concatenamos los corchetes al inicio y al final
            guardarProducto = '['+JSON.stringify(producto)+']';        
            // Guardamos en el sessionStorage
            sessionStorage.setItem('tienda.productos.temporal',guardarProducto)
        }
        // Mostramos el mensaje
        ui.mostrarMensaje('Producto agregado exitosamente.', 'success');   
    }

    actualizarProducto(id, producto){
        let guardarProducto = '';
        // Obtenemos todo lo que está en el 'tienda.productos.temporal' en una variable
        let productos = JSON.parse(sessionStorage.getItem('tienda.productos.temporal'));
        // Obtenemos el producto por el índice en el que se encuentra almacenado
        productos[id] = producto;
        // Para almacenar el listado de productos actualizado, transformamos la variable a String y la guardamos nuevamente
        sessionStorage.setItem('tienda.productos.temporal', JSON.stringify(productos));  
        // Se muestra el mensaje
        ui.mostrarMensaje('Producto actualizado exitosamente.', 'success');             
    }

    limpiarFormulario(){
        // Reseteamos el formulario
        // Nota: El formulario solo resetea los inputs que son visibles, los input del tipo "hidden" no son afectados
        document.getElementById('form-producto').reset();
        document.getElementById('id').value = "";
    }

    eliminarTodosProductos(){
        // Mostramos alerta
        let eliminar = window.confirm("Dese eliminar todos los producto");
        // si selecciona que sí
        if(eliminar){
            // Seteamos en null
            sessionStorage.setItem('tienda.productos.temporal',null);
            ui.mostrarMensaje('Se ha eliminado todos los productos.', 'success'); 
            ui.listarProductos();
        }        
    }

    eliminarProducto(id){
        let eliminar = window.confirm("Dese eliminar el producto");
        if(eliminar){
            let productos = JSON.parse(sessionStorage.getItem('tienda.productos.temporal'));
            productos.splice(id, 1);
            sessionStorage.setItem('tienda.productos.temporal',JSON.stringify(productos));
            ui.listarProductos();
            ui.mostrarMensaje('Producto eliminado exitosamente.', 'success');
            if(productos.length == 0){
                sessionStorage.setItem('tienda.productos.temporal',null);
            }        
        }        
    }

    editarProducto(id){
        // Obtenemos primero los productos
        let productos = JSON.parse(sessionStorage.getItem('tienda.productos.temporal'));
        // Luego obtenemos el producto que se seleccionó
        let productoParaEditar = productos[id];
        // Seteamos los valores del producto al formulario
        document.getElementById('id').value = id;                    
        document.getElementById('nombre').value = productoParaEditar.nombre;                    
        document.getElementById('precio-compra').value = productoParaEditar.precio_compra;                    
        document.getElementById('precio-venta').value = productoParaEditar.precio_venta;                                        
        document.getElementById('tipo-producto').value = productoParaEditar.tipo;                    
        document.getElementById('anio').value = productoParaEditar.anio;                    
    }

    mostrarMensaje(mensage, cssClass) {
        // Creando el elento para la alerta
        const div = document.createElement('div');
        div.className = `alert alert-${cssClass} mt-2`;
        div.appendChild(document.createTextNode(mensage));
        
        
        const container = document.querySelector('.container');
        const app = document.querySelector('#App');
        // Insertando el mensaje
        container.insertBefore(div, app);
        // Removiendo la alerta despues de 5 segundos
        setTimeout(function () {
            document.querySelector('.alert').remove();
        }, 5000);
    }

    listarProductos(){        
        let cuerpoTablaProductos = '';
        let productos = sessionStorage.getItem('tienda.productos.temporal');
        document.getElementById("cuerpo-producto-tabla").innerHTML = "";
        
        if(productos != null && productos != '' && productos != 'null'){
            productos = JSON.parse(productos);
            let contador = 0;
            productos.map((p) => {
                cuerpoTablaProductos += `<tr>
                                            <td>${p.nombre}</td>
                                            <td>${p.precio_compra}</td>
                                            <td>${p.precio_venta}</td>
                                            <td>${p.tipo}</td>
                                            <td>${p.anio}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Acciones">
                                                    <button type="button" class="btn btn-sm btn-secondary" onClick="ui.editarProducto(${contador})">Editar</button>
                                                    <button type="button" class="btn btn-sm btn-secondary" onClick="ui.eliminarProducto(${contador})">Eliminar</button>                                                    
                                                </div>
                                            </td>
                                        </tr>`;
                contador++;
            });
        }
        document.getElementById("cuerpo-producto-tabla").innerHTML = cuerpoTablaProductos;
    }
}

// Actions
// Instanciando ui
const ui = new UI();

document.getElementById('form-producto')
                .addEventListener('submit', function (e) {
    // Obteniendo los valores del formulario
    const id            = document.getElementById('id').value;
    const nombre        = document.getElementById('nombre').value;
    const precio_compra = document.getElementById('precio-compra').value;
    const precio_venta  = document.getElementById('precio-venta').value;
    const tipo_producto = document.getElementById('tipo-producto').value;
    const anio          = document.getElementById('anio').value;

    // Creando un nuevo producto
    const nuevo_producto = new Producto(nombre, precio_compra, precio_venta, tipo_producto, anio);

    // Validando los campos del formulario
    if(nombre === '' || precio_compra === '' || precio_venta === '' || tipo_producto === '' || anio === ''){
        ui.mostrarMensaje('Todos los campos deben estar llenos.', 'danger');
    }else{
        if(id != ''){
            // Actualizando el producto
            ui.actualizarProducto(id, nuevo_producto);
        }else{
            // Guardando el producto
            ui.agregarProducto(nuevo_producto);
        }        
        ui.listarProductos();
        ui.limpiarFormulario();             
    }
    e.preventDefault();
});

ui.listarProductos();