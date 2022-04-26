<!-- Jquery JS-->
<script src="../assets/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="../assets/vendor/animsition/animsition.min.js"></script>
<!-- Main JS-->
<script src="../assets/scripts/theme/main.js"></script>

<script src="../assets/scripts/Chart.min.js"></script>

<script src="../assets/scripts/theme/jquery-1.12.4.min.js"></script>
<script src="../assets/scripts/theme/aos.js"></script>

<script src="../assets/scripts/data-table.js"></script>
<script src="../assets/scripts/jquery.dataTables.js"></script>
<script src="../assets/scripts/dataTables.bootstrap4.js"></script>

<?php require 'grafico-admin.php' ?>

<script>
  $(function () {
    AOS.init();
    $('#dataTableEstacionamento').dataTable();
    $('#dataTableCarroEstaciona').dataTable();
    $('#dataTableCarroSaida').dataTable();
    // Trabalhar nos gráficos 
    var lineChart = document.getElementById("mycompra-chart").getContext("2d");
    var myLineChart = new Chart(lineChart, {
    type: "bar",
    data: {
        labels: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
        ],
        datasets: [
        {
            label: "Clientes registadas",
            borderColor: "#1f6feb",
            pointBorderColor: "#1f6feb",
            pointBackgroundColor: "#1f6feb",
            pointBorderWidth: 2,
            pointHoverRadius: 4,
            pointHoverBorderWidth: 1,
            pointRadius: 4,
            backgroundColor: "transparent",
            fill: true,
            borderWidth: 2,
            data: <?= json_encode($clientesMensal) ?>,
        },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
        position: "bottom",
        labels: {
            padding: 10,
            fontColor: "#1f6feb",
        },
        },
        tooltips: {
        bodySpacing: 4,
        mode: "nearest",
        intersect: 0,
        position: "nearest",
        xPadding: 10,
        yPadding: 10,
        caretPadding: 10,
        },
        layout: {
        padding: { left: 15, right: 15, top: 15, bottom: 15 },
        },
    },
    });
  });
</script>