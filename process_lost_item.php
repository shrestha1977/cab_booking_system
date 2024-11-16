<?php
session_start();
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $booking_id = $_POST['booking_id'];
    $item_description = $_POST['item_description'];

    $stmt = $conn->prepare("INSERT INTO lost_items (booking_id, item_description) VALUES (?, ?)");
    $stmt->bind_param("is", $booking_id, $item_description);

    if ($stmt->execute()) {
        echo "<p>Your lost item report has been submitted successfully.</p>";
    } else {
        echo "<p>There was an error submitting your report. Please try again.</p>";
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
    <title>Report Lost Item</title>
    <link rel="stylesheet" href="style.css">  <!-- Link to CSS file -->
</head>
<body>
    <div class="container">
        <h1>Report a Lost Item</h1>
        <form action="submit_lost_item.php" method="POST">
            <p>
                Booking ID: <input type="number" name="booking_id" required>
            </p>
            <p>
                Item Description: <input type="text" name="item_description" required>
            </p>
            <button type="submit" class="button">Submit Report</button>
        </form>
    </div>
</body>
</html>

