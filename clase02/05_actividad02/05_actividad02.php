<?php
    /*
        Crea un formulario llamado "Mi recarga online",
        En donde se tengan los siguientes campos :         
        > Nombre de Cliente.
        > Direccion.
        > Nro DNI.
        > Compañia de telefono (Claro,Movistar y Bitel).
        > Finalmente Saldo a recargar (3,5 y 10 soles).
        > Nro Telefono

        Al seleccionar el botón "Recargar" se debe enviar los datos por un metodo POST.
        Con PHP recibir los datos ingresados en el formularios.
        
        Si alguno de los campos se encuentra en blanco se debe mostrar un mensaje indicando el siguiente mensaje : "El campo (nombre del campo) fue enviado en blanco"
        y finalizar el funcionamiento.

        Validar que el nro de telefono solo tenga 9 caracteres, si no se cunple se debe mostrar un mensaje indicando el siguiente mensaje : "El nro de telefono debe tener 9 numeros." 
        y finalizar el funcionamiento.

        Si el nro de Telefono es 987654321 se debe mostrar un mensaje indicando el siguiente mensaje : "No se puede realizar la recarga, ingrese otro numero" 
        y finalizar el funcionamiento.
        
        Con la función realizar_recargar($compania,$recarga_soles) se debe programar dentro la siguiente funcionalidad,

        > Debe recibir dos parametros (nombre de la compania y la recarga soles).
        > La funcion debe regresar un monto a pagar.
        > Si la compania seleccionada es Claro y la recarga es mayor a 5 soles el monto a pagar debe tener un 30 % de descuento.
        > Si la compania seleccionada es Bitel y la recarga es de 10 soles el monto a pagar tiene un descuento de 3 soles.
        > Si la compania seleccionada es Movistar y la recarga es de menor a 5 soles el monto a pagar debe tener un descuento del 2%.        

        Finalmente con el monto a pagar guardado en una variable generar el siguiente mensaje : 
        "Hola (nombre del cliente),
        El monto  a pagar por tu recarga es de (monto a pagar con formato de moneda en soles).
        
        Detalles del cliente.
        --
        Direccion : (direccion)
        DNI : (dni)
        Compania : (compania)
        Nro telefono : (nro telefono)
        Saldo a recargar : (saldo a recargar)
        Monto a pagar : (monto a pagar)
        "
    
    */
