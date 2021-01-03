---
extends: "_layouts.wrapped"
section: "content"
---

@component('_partials.posts.post-body', [ 'title' => 'The true cost of the Edmonton Bike Grid', 'img' => '/img/posts/2017-08-09-number-cyclists-on-bike-grid-doubles/102ave.jpg', 'date' => '2018-03-07' ])
    <div class="text-center">
        <div class="mx-auto bg-grey-100 border-grey-300 border-2 shadow max-w-2xl">
            <div class="card-content">
            <span class="card-title center">Downtown Bike Grid Initial Costs</span>
            <canvas id="spending-share"></canvas>
            </div>
        </div>
    </div>
    
    
@endcomponent

<script>
var ctx = document.getElementById('spending-share').getContext('2d');
var chart = new Chart(ctx, {

    type: 'doughnut',

    // The data for our dataset
    data: {
        labels: ["Traffic Signals", "Paint Markings","Curbs, Bollards and Planters", "New Snow Clearing Equipment" ],
        datasets: [{
                data: [4225000, 341000, 2742000, 200000],
                backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)'
                        ]
            }],
    },

    // Configuration options go here
    options: {
        tooltips: {
            callbacks: {
                label: function(item, data) {
                console.log(item);
                console.log(data);
                    let dollar = "$" + Number(data.datasets[item.datasetIndex].data[item.index]).toFixed(0).replace(/./g, function(c, i, a) {
                                                     return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "," + c : c;
                                                 });
                    return data.labels[item.index] + ": " + dollar;
                }
            }
        }
    }
});
</script>
