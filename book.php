<?php
session_start();
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pickup_location = $_POST['pickup_location'];
    $drop_location = $_POST['drop_location'];

    // Insert booking details
    $stmt = $conn->prepare("INSERT INTO booking (pickup_location, drop_location) VALUES (?, ?)");
    $stmt->bind_param("ss", $pickup_location, $drop_location);

    if ($stmt->execute()) {
        $booking_id = $stmt->insert_id;
        header("Location: payment.php?booking_id=" . $booking_id);
        exit;
    } else {
        echo "<p>There was an error with your booking. Please try again.</p>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Ride</title>
    <link rel="stylesheet" href="style.css">  <!-- Link to CSS file -->
</head>
<body>
    <div class="container">
        <h1>Book Your Ride</h1>
        <form action="process_booking.php" method="POST">
            <p>
                Pickup Location: <input type="text" name="pickup_location" required>
            </p>
            <p>
                Drop Location: <input type="text" name="drop_location" required>
            </p>
            <button type="submit" class="button">Book Ride</button>
        </form>
    </div>
</body>
</html>

