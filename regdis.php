<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0 text-center">Employee Payslip</h4>
        </div>
        <div class="card-body"> 

            <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $days_worked = $_POST["num1"];
            $daily_rate = $_POST["num2"];
            $cash_advance = $_POST["cash"];
            $fullname = $_POST["fullname"];

            $gross_pay = $days_worked * $daily_rate;
            $tax = $gross_pay * 0.02;
            $sss = $gross_pay * 0.015;
            $pagibig = 50;

            $total_deductions = $tax + $sss + $pagibig + $cash_advance;
            $net_pay = $gross_pay - $total_deductions;
        }
            ?>

            <ul class="list-group">
                <li class="list-group-item"><strong>Full Name:</strong> <?= $fullname ?> </li>
                <li class="list-group-item"><strong>Total Days of Work:</strong> <?= $days_worked ?> </li>
                <li class="list-group-item"><strong>Daily Rate:</strong> ₱<?= $daily_rate ?> </li>
                <hr>
                <li class="list-group-item"><strong>Gross Pay:</strong> ₱<?= $gross_pay ?> </li>
                <li class="list-group-item"><strong>Tax (2%):</strong> ₱<?= $tax ?> </li>
                <li class="list-group-item"><strong>SSS (1.5%):</strong> ₱<?= $sss ?> </li>
                <li class="list-group-item"><strong>Pag-IBIG:</strong> ₱<?= $pagibig ?> </li>
                <li class="list-group-item"><strong>Cash Advance:</strong> ₱<?= $cash_advance ?> </li>
                <hr>
                <li class="list-group-item"><strong>Total Deductions:</strong> ₱<?= $total_deductions ?> </li>
                <li class="list-group-item text-success"><strong class="text-success">Net Pay:</strong> ₱<?= $net_pay ?> </li>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>