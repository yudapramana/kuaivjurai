@props(['data'])

<canvas id="chartContainer"></canvas>

<script>
    var jsonData = < ? php echo json_encode($data, JSON_NUMERIC_CHECK); ? > ;
    var dates = [];
    var visitors = [];
    for (var i = 0; i < jsonData.length; i++) {
        dates.push(jsonData[i][0]);
        visitors.push(jsonData[i][1]);
    }
    var ctx = document.getElementById('chartContainer').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line'
        , data: {
            labels: dates
            , datasets: [{
                label: 'Visits per day'
                , data: visitors
                , backgroundColor: '#EAB543'
                , hoverBackgroundColor: '#F8EFBA'
                , borderColor: '#25CCF7'
                , borderWidth: 2
            , }]
        }
        , options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: false
                        , fontFamily: 'Nunito'
                        , fontStyle: 'bold'
                    , }
                    , gridLines: {
                        display: false
                    , }
                , }]
                , xAxes: [{
                    gridLines: {
                        display: false
                    , }
                    , ticks: {
                        fontFamily: 'Nunito'
                    , }
                , }]
            , }
        , }
    });

</script>
