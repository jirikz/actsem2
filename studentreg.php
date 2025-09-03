<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0 text-center">Payroll Calculator</h4>
        </div>
        <div class="card-body">
            <form action="regdis.php" method="POST">
                <!-- Full Name -->
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter your full name" required>
                </div>

                 <div class="mb-3">
                    <label for="fullname" class="form-label">total days of work</label>
                    <input type="number" name="num1" id="" class="form-control" placeholder="" required>
                </div>

                 <div class="mb-3">
                    <label for="fullname" class="form-label">daily rate</label>
                    <input type="number" name="num2" id="" class="form-control" placeholder="" required>
                </div>

                 <div class="mb-3">
                    <label for="fullname" class="form-label">cash advance</label>
                    <input type="number" name="cash" id="" class="form-control" placeholder="" required>
                </div>




               

                <!-- Submit Button -->   
               <div class="text-center">
               <button type="submit" class="btn btn-primary w-100">Generate Payslip</button>
           </div>
            </form>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>