<?php
session_start();
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $booking_id = $_POST['booking_id'];
    $payment_method = $_POST['payment_method'];

    $stmt = $conn->prepare("INSERT INTO payment (booking_id, payment_method, payment_status) VALUES (?, ?, 'Pending')");
    $stmt->bind_param("is", $booking_id, $payment_method);

    if ($stmt->execute()) {
        echo "<p>Your payment method has been saved. Thank you for booking!</p>";
    } else {
        echo "<p>There was an error processing your payment. Please try again.</p>";
    }

    $stmt->close();
    $conn->close();
}
?>
