// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Innisfree", "Laneige", "Iope", "Etude House","Other"],
    datasets: [{
      data: [48, 42, 15, 23,20],
      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745','#ff6600'],
    }],
  },
});
