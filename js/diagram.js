var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Iron Maiden', 'Metallica', 'Megadeth', 'Rammstein'],
        datasets: [{
            label: 'Кількість проданих альбомів по світу за ВЕСЬ ЧАС, млн.',
            backgroundColor: [
                'rgb(200, 10, 10)',
                'rgb(37, 73, 39)',
                'gold',
                'purple'
            ],
            data: [100, 125, 38, 10]
        }]
    },

    // Configuration options go here
    options: {}
});