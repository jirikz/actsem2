<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Activity - Product Purchase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h1 class="mb-4 text-left">  Jereek Reyes </h1>
        <h1>  ACT - 2B </h1>
        <h2 class="mb-4 text-center">🛒 Product Purchase</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Customer Name</label>
                <input type="text" class="form-control" name="name" required value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" class="form-control" name="quantity" required min="1" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Price per Item</label>
                <input type="number" class="form-control" name="price" required min="1" value="">
            </div>

            <div class="mb-3">
                <label class="form-label">Optional Add-ons</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="addons[]" value="Gift Wrap"
                        >
                    <label class="form-check-label">Gift Wrap (+₱50)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="addons[]" value="Express Shipping"
                        >
                    <label class="form-check-label">Express Shipping (+₱100)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="addons[]" value="Warranty"
                        >
                    <label class="form-check-label">Warranty (+₱200)</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Compute Total</button>
        </form>
        <?php

        if (isset($_POST['name'], $_POST['quantity'], $_POST['price'])) {
            $name = htmlspecialchars($_POST['name']);
            $quantity = (int)$_POST['quantity'];
            $price = (float)$_POST['price'];
            $addons = $_POST['addons'] ?? [];
            $addonPrices = [
                'Gift Wrap' => 50,
                'Express Shipping' => 100,
                'Warranty' => 200
            ]; 
            $addonsTotal = 0;
            foreach ($addons as $addon) {
                if (isset($addonPrices[$addon])) {
                    $addonsTotal += $addonPrices[$addon];
                }
            }
            $subtotal = $quantity * $price;
            $finalTotal = $subtotal + $addonsTotal;
            echo "<div class='alert alert-success mt-4'>
                    <h4>💡 Purchase Summary</h4>
                    <p><strong>Name:</strong> $name</p>
                    <p><strong>Quantity:</strong> $quantity</p>
                    <p><strong>Price per Item:</strong> ₱" . number_format($price, 2) . "</p>
                    <p><strong>Subtotal:</strong> ₱" . number_format($subtotal, 2) . "</p>
                    <p><strong>Add-ons:</strong> ₱" . number_format($addonsTotal, 2) . "</p>
                    <h5><strong>Final Total:</strong> ₱" . number_format($finalTotal, 2) . "</h5>
                  </div>";
 
        }
            else {
            echo "<div class='alert alert-warning mt-4'>Please fill in all required fields.</div>";
        }
        
  
?>


</body>
</html>