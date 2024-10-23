<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highcharts Example</title>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
</head>
<body>
    <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description">
            This chart shows the use of a logarithmic scale. Logarithmic axes can 
            be useful when there is a large range of values to display, for example, 
            when showing data ranges in the order of 1 to 1 million. The chart 
            automatically adjusts the axis values to remain visible.
        </p>
    </figure>

    <script>
        Highcharts.chart('container', {
            title: {
                text: 'Growth of Internet Users Worldwide (logarithmic scale)'
            },
            accessibility: {
                point: {
                    valueDescriptionFormat: '{index}. {xDescription}, {yDescription}.'
                }
            },
            xAxis: {
                tickInterval: 5,
                type: 'linear',
                accessibility: {
                    rangeDescription: 'Years from 1975 to 2023'
                },
                categories: [1975, 1980, 2000, 2010, 2015, 2020, 2023]
            },
            yAxis: {
                type: 'logarithmic',
                title: {
                    text: 'Number of Internet Users (in millions)'
                }
            },
            tooltip: {
                headerFormat: '<b>{series.name}</b><br />',
                pointFormat: '{point.y} million(s)'
            },
            series: [{
                name: 'Internet Users',
                keys: ['y', 'color'],
                data: [
                    [16, '#0000ff'],
                    [50, '#0000ff'],
                    [400, '#0000ff'],
                    [2500, '#0000ff'],
                    [14700, '#0000ff'],
                    [45000, '#0000ff'],
                    [52000, '#ff0000']
                ],
                color: {
                    linearGradient: {
                        x1: 0,
                        y1: 0,
                        x2: 0,
                        y2: 1
                    },
                    stops: [
                        [0, '#0000ff'],
                        [1, '#ff0000']
                    ]
                }
            }]
        });
    </script>
</body>
</html>
