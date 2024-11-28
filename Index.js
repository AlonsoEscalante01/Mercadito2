document.addEventListener('DOMContentLoaded', function () {

    const ButtonCart = document.querySelector('.ContainerIcon')
    
    const ContainerCarProd = document.querySelector('.ContainerCarProducts')
    
    ButtonCart.addEventListener('click', () => {
        ContainerCarProd.classList.toggle('HiddenCar')    
    })
    
    /*Filtros  aun no funcionales*/
    document.getElementById('aplicar-filtros').addEventListener('click', function () {
        // Obtiene los valores seleccionados en los filtros
        var tecnica = document.getElementById('tecnicas').value;
        var estilo = document.getElementById('estilos').value;
        var tamaño = document.getElementById('tamaño').value;
        var precio = document.getElementById('precios').value;
        var valoracion = document.getElementById('valoracionObras').value;
    
        console.log("Técnica seleccionada:", tecnica);
        console.log("Estilo seleccionado:", estilo);
        console.log("Tamaño seleccionado:", tamaño);
        console.log("Precio seleccionado:", precio);
        console.log("Valoración seleccionada:", valoracion);
    
        // Obtiene todas las obras
        var obras = document.querySelectorAll('.obra');
    
    let contadorVerdadero = 0;
    let contadorFalso = 0;
    
        // Itera a través de las obras y muestra/oculta según los filtros seleccionados
        obras.forEach(function (obra) {
            var obraTecnica = obra.getAttribute('data-tecnica');
            var obraEstilo = obra.getAttribute('data-estilo');
            var obraTamaño = obra.getAttribute('data-tamaño');
            var obraPrecio = obra.getAttribute('data-precio');
            var obraValoracion = obra.getAttribute('data-valoracion');
     /*Los console.log estan puestos para verifcar su funcionamiento y
       y encontrar donde puede estar fallando */
            console.log("Técnica de la obra:", obraTecnica);
            console.log("Estilo de la obra:", obraEstilo);
            console.log("Tamaño de la obra:", obraTamaño);
            console.log("Precio de la obra:", obraPrecio);
            console.log("Valoración de la obra:", obraValoracion);
            
            if (
                (tecnica === 'TodosTE' || tecnica === obraTecnica) &&
                (estilo === 'TodosE' || estilo === obraEstilo) &&
                (tamaño === 'TodosT' || tamaño === obraTamaño) &&
                (precio === 'TodosP' || precio === obraPrecio) &&
                (valoracion === 'TodosV' || valoracion === obraValoracion)
          ) {
                obra.style.display= 'block'; // Muestra la obra
                contadorVerdadero++;
                console.log("Antes de ocultar la obra:", obra.style.display);
            } else {
                obra.style.display = 'none'; // Oculta la obra
                contadorFalso++;
                console.log("Después de ocultar la obra:", obra.style.visibility);
            }
            
        });
        
    console.log(`Verdadero: ${contadorVerdadero}, Falso: ${contadorFalso}`);
    });
    });