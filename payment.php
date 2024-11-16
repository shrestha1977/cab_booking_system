<?php
session_start();
include('db.php');

if (!isset($_GET['booking_id'])) {
    echo "<p>Error: No booking ID provided.</p>";
    exit;
}
$booking_id = $_GET['booking_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Payment Type</title>
    <link rel="stylesheet" href="style.css">  <!-- Link to CSS file -->

</head>
<body>
    <h2>Select Payment Type</h2>
    <form action="process_payment.php" method="POST">
        <input type="hidden" name="booking_id" value="<?php echo $booking_id; ?>">

        <label for="payment_method">Choose a payment method:</label>
        <select id="payment_method" name="payment_method" required>
            <option value="Credit Card">Credit Card</option>
            <option value="Debit Card">Debit Card</option>
            <option value="Cash">Cash</option>
            <option value="UPI">UPI</option>
        </select><br><br>

        <input type="submit" value="Confirm Payment">
    </form>
</body>
</html>
