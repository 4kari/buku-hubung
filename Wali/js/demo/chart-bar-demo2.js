// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var pb1 = document.getElementById('pb1');
var pb2 = document.getElementById('pb2');
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["PB 1", "PB 2", "PB 3", "PB 4", "PB 5", "PB 6"],
    datasets: [{
      label: "Nilai",
      backgroundColor: "red",
      hoverBackgroundColor: "black",
      data: [pb1, pb2, 0, 0, 0, , 0],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 15,
        right: 15,
        top:10,
        bottom: 10
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'week'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        maxBarThickness: 35,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 100,
          maxTicksLimit: 20,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return number_format(value);
          }
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
        }
      }
    },
  }
});
