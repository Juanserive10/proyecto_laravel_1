function obtener_datos() {
    const endPoint = "https://fakestoreapi.com/products" //Vinculo de la API - Web service
    fetch(endPoint) // fetch es una API para hacer petición al endPoint
    .then(function (response) {//Promesa -> Cuando sea exitosa la entrega de datos 200
        return response.json() //Sacar los datos de la petición a formato JSON 
    })
    .then(function (data) {
        let titles = []
        let prices = []
        let categories = []
        for (let i = 0; i < data.length; i++) {
            titles.push(data[i].title)
            prices.push(data[i].price)
            categories.push(data[i].category)
        }

        var data = [
            {
                x: titles,
                y: prices,
                type: 'bar'
            }
        ];

        Plotly.newPlot('grafica', data);

        var data2 = [{
            values: prices,
            labels: categories,
            type: 'pie'
        }];

        var layout = {
            height: 400,
            width: 500
        };

        Plotly.newPlot('grafica2', data2, layout);


    })
}