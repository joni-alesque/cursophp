// Clase Producto
class Producto
{
       constructor(nombre, precio_compra, precio_venta, tipo, anio)
    {   this.nombre = nombre;
        this.precio_compra = precio_compra;
        this.precio_venta = precio_venta;
        this.tipo = tipo;
        this.anio = anio;
    }
}

class UI
{
    agregarProducto(producto)
    {
        let guardarProducto = '';
        
        let lstProductos = sessionStorage.getItem('tienda.productos.temporal');
        
        if(lstProductos != null && lstProductos != '' && lstProductos != 'null')
        {   // si  hay data se va a realizar lo siguiente
            lstProductos = lstProductos.replace('[','');
            lstProductos = lstProductos.replace(']','');
            guardarProducto = '['+lstProductos+','+JSON.stringify(producto)+']';
        } else 
        {   // se va a ingresar el primer  producto
            guardarProducto = '['+JSON.stringify(producto)+']';
        }

        sessionStorage.setItem('tienda.productos.temporal',guardarProducto);        
    }
    actualizarProducto(){}
    limpiarFormulario(){}
    eliminarTodosProductos(){}
    eliminarProducto(){}
    editarProducto(){}
    listarProductos()
    {
        let cuerpoTablaProductos  = '';
        // Obteniendo los datos dentro del session storage
        let lstProductos            = sessionStorage.getItem('tienda.productos.temporal');
        // limpiando todo el interior del tbody : "cuerpo-producto-tabla"
        document.getElementById("cuerpo-producto-tabla").innerHTML = ""; 

        // Validando que existan productos
        if(lstProductos != null && lstProductos != '' && lstProductos != 'null')
        {   //Parseando el texto plano del session storage
            lstProductos = JSON.parse(lstProductos);
            let contador = 0;

            for(var i = 0; i < lstProductos.length; i++)
            {
                cuerpoTablaProductos +=`
                                        <tr>
                                            <td>${lstProductos[i].nombre}</td>
                                            <td>${lstProductos[i].precio_compra}</td>
                                            <td>${lstProductos[i].precio_venta}</td>
                                            <td>${lstProductos[i].tipo}</td>
                                            <td>${lstProductos[i].anio}</td>
                                            <td></td>
                                        </tr>
                                        `; 
            }

            /*lstProductos.forEach(producto => {
                cuerpoTablaProductos +=`
                <tr>
                    <td>${producto.nombre}</td>
                    <td>${producto.precio_compra}</td>
                    <td>${producto.precio_venta}</td>
                    <td>${producto.tipo}</td>
                    <td>${producto.anio}</td>
                    <td></td>
                </tr>
                `; 
            });*/
            /*lstProductos.map((p) => { // p : producto en cada iteración que se obteiene
                cuerpoTablaProductos +=`
                                        <tr>
                                            <td>${p.nombre}</td>
                                            <td>${p.precio_compra}</td>
                                            <td>${p.precio_venta}</td>
                                            <td>${p.tipo}</td>
                                            <td>${p.anio}</td>
                                            <td></td>
                                        </tr>
                                        `;
            });*/
        }
        // Pegando cuerpoTablaProductos a la tabla 
        document.getElementById("cuerpo-producto-tabla").innerHTML = cuerpoTablaProductos; 
    }
    mostrarMensaje(){}
}

const ui = new UI();

document.getElementById('form-producto')
            .addEventListener('submit', function(e)
{
    const id            = document.getElementById('id').value;
    const nombre        = document.getElementById('nombre').value;
    const precio_compra = document.getElementById('precio-compra').value;
    const precio_venta  = document.getElementById('precio-venta').value;
    const tipo_producto = document.getElementById('tipo-producto').value;
    const anio          = document.getElementById('anio').value;

    const nuevo_producto = new Producto(nombre, precio_compra, precio_venta, tipo_producto, anio);
    ui.agregarProducto(nuevo_producto);
    ui.listarProductos();
    e.preventDefault();// Prevenir el funcionamiento normal del elemento html : Formulario
    
});

ui.listarProductos();