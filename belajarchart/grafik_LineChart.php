<?php
include('koneksi2.php');
$label = ["India","Japan","S.Korea","Turkey","Vietnam","Taiwan","Iran","Indonesia","Malaysia","Israel"];

for($bulan = 1;$bulan < 11;$bulan++)
{
  $query = mysqli_query($koneksi2,"SELECT sum(TotalCases) AS jumlah FROM tb_covid19 WHERE id_covid='$bulan'");
  $row = $query->fetch_array();
  $jumlah_produk[] = $row['jumlah'];
}

for($bulan = 1;$bulan < 11;$bulan++)
{
  $query = mysqli_query($koneksi2,"SELECT sum(TotalDeaths) AS jumlah FROM tb_covid19 WHERE id_covid='$bulan'");
  $row = $query->fetch_array();
  $jumlah_produk1[] = $row['jumlah'];
}

for($bulan = 1;$bulan < 11;$bulan++)
{
  $query = mysqli_query($koneksi2,"SELECT sum(TotalRecovered) AS jumlah FROM tb_covid19 WHERE id_covid='$bulan'");
  $row = $query->fetch_array();
  $jumlah_produk2[] = $row['jumlah'];
}

for($bulan = 1;$bulan < 11;$bulan++)
{
  $query = mysqli_query($koneksi2,"SELECT sum(ActiveCases) AS jumlah FROM tb_covid19 WHERE id_covid='$bulan'");
  $row = $query->fetch_array();
  $jumlah_produk3[] = $row['jumlah'];
}

for($bulan = 1;$bulan < 11;$bulan++)
{
  $query = mysqli_query($koneksi2,"SELECT sum(TotalTests) AS jumlah FROM tb_covid19 WHERE id_covid='$bulan'");
  $row = $query->fetch_array();
  $jumlah_produk4[] = $row['jumlah'];
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>GRAFIK LINE KASUS COVID-19</title>
  <script type="text/javascript" src="Chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
            body {
                padding-top: 1%;
            }
        .container {
            width: 1400px;
            height: 650px;
            }
        </style>
</head>
<body>
    <center><h2>GRAFIK LINE 10 NEGARA KASUS COVID-19</h2><center>
        <br>
  <center><div class="container">
    <canvas id="myChart"></canvas>
  </div><center>

  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: <?php echo json_encode($label); ?>,
        datasets: [{
          label: 'Total Cases COVID-19',
          data: <?php echo json_encode($jumlah_produk); ?>,
          backgroundColor: ['rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)'
          ],
          borderColor: ['rgba(255, 99, 132, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(255, 99, 132, 1)'
          ],
          borderWidth: 2
        },{
          label: 'Total Deaths COVID-19',
          data: <?php echo json_encode($jumlah_produk1); ?>,
          backgroundColor: [
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2)'
          ],
          borderColor: [
          'rgba(54, 162, 235, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(54, 162, 235, 1)'
          ],
          borderWidth: 2
        },{
          label: 'Total Recovered COVID-19',

data: <?php echo json_encode($jumlah_produk2); ?>,
          backgroundColor: [
          'rgba(117, 48, 15, 0.2)',
          'rgba(117, 48, 15, 0.2)',
          'rgba(117, 48, 15, 0.2)',
          'rgba(117, 48, 15, 0.2)',
          'rgba(117, 48, 15, 0.2)',
          'rgba(117, 48, 15, 0.2)',
          'rgba(117, 48, 15, 0.2)',
          'rgba(117, 48, 15, 0.2)',
          'rgba(117, 48, 15, 0.2)',
          'rgba(117, 48, 15, 0.2)'
          ],
          borderColor: [
          'rgba(117, 48, 15, 1)',
          'rgba(117, 48, 15, 1)',
          'rgba(117, 48, 15, 1)',
          'rgba(117, 48, 15, 1)',
          'rgba(117, 48, 15, 1)',
          'rgba(117, 48, 15, 1)',
          'rgba(117, 48, 15, 1)',
          'rgba(117, 48, 15, 1)',
          'rgba(117, 48, 15, 1)',
          'rgba(117, 48, 15, 1)'
          ],
          borderWidth: 2
        },{
          label: 'Active Cases COVID-19',
          data: <?php echo json_encode($jumlah_produk3); ?>,
          backgroundColor: [
          'rgba(93, 33, 148, 0.2)',
          'rgba(93, 33, 148, 0.2)',
          'rgba(93, 33, 148, 0.2)',
          'rgba(93, 33, 148, 0.2)',
          'rgba(93, 33, 148, 0.2)',
          'rgba(93, 33, 148, 0.2)',
          'rgba(93, 33, 148, 0.2)',
          'rgba(93, 33, 148, 0.2)',
          'rgba(93, 33, 148, 0.2)',
          'rgba(93, 33, 148, 0.2)'
          ],
          borderColor: [
          'rgba(93, 33, 148, 1)',
          'rgba(93, 33, 148, 1)',
          'rgba(93, 33, 148, 1)',
          'rgba(93, 33, 148, 1)',
          'rgba(93, 33, 148, 1)',
          'rgba(93, 33, 148, 1)',
          'rgba(93, 33, 148, 1)',
          'rgba(93, 33, 148, 1)',
          'rgba(93, 33, 148, 1)',
          'rgba(93, 33, 148, 1)'
          ],
          borderWidth: 2
        },{
          label: 'Total Tests COVID-19',
          data: <?php echo json_encode($jumlah_produk4); ?>,
          backgroundColor: [
          'rgba(133, 196, 155, 0.2)',
          'rgba(133, 196, 155, 0.2)',
          'rgba(133, 196, 155, 0.2)',
          'rgba(133, 196, 155, 0.2)',
          'rgba(133, 196, 155, 0.2)',
          'rgba(133, 196, 155, 0.2)',
          'rgba(133, 196, 155, 0.2)',
          'rgba(133, 196, 155, 0.2)',
          'rgba(133, 196, 155, 0.2)',
          'rgba(133, 196, 155, 0.2)',
          ],
          borderColor: [
          'rgba(133, 196, 155, 1)',
          'rgba(133, 196, 155, 1)',
          'rgba(133, 196, 155, 1)',
          'rgba(133, 196, 155, 1)',
          'rgba(133, 196, 155, 1)',
          'rgba(133, 196, 155, 1)',
          'rgba(133, 196, 155, 1)',
          'rgba(133, 196, 155, 1)',
          'rgba(133, 196, 155, 1)',
          'rgba(133, 196, 155, 1)',
          
          ],
          borderWidth: 2
        }]
      },
      options: {
        responsive:true,
        maintainAspectRatio: false,
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>
</body>
</html>