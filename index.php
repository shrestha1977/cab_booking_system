<?php
session_start();

// Redirect to login if user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cab Booking System</title>
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="home.css">
<style>
        body {
            font-family: Algerian, sans-serif;
            background: linear-gradient(to bottom, #B3E5FC, #81D4FA); /* Light blue gradient */
            margin: 0;
            color: #333;
            min-height: 100vh;
        }
    </style>
</head>

<body>

    <!-- Logout Button -->
    <a href="logout.php" class="logout-button">Logout</a>
<img src="Screenshot 2024-11-15 205931.jpg" alt="Cab Booking Banner" class="header-image" />
    <!-- Welcome Section -->
    <div id="welcome-section">
        <h1>Welcome to Our Online Cab Booking System</h1>
        <p>Reliable, safe, and convenient rides at your fingertips.</p>
    </div>


<div class="container">
        <div class="rectangle red">
            <p>Safe & Secure Rides</p>
        </div>
        <div class="rectangle green">
            <p>24/7 Customer Support</p>
        </div>
        <div class="rectangle blue">
            <p>Easy Payment Options</p>
        </div>
        <div class="rectangle yellow">
            <p>Lost Item Assistance</p>
        </div>
    </div>




    <!-- Buttons Section -->
    <div style="text-align:center; margin: 30px;">
        <button onclick="showSection('bookRide')">Book a Ride</button>
        <button onclick="showSection('lostItem')">Report a Lost Item</button>
        <button onclick="showSection('reportQuery')">Report a Query</button>
        <button onclick="showSection('lodgeComplaint')">Lodge a Complaint</button>
    </div>

    <!-- Book a Ride Form -->
    <div id="bookRide" style="display:none;">
        <div style="width: 300px; margin: auto; padding: 20px;">
            <label>Pickup Location:</label><br>
            <input type="text" id="pickup_location" required><br><br>

            <label>Drop Location:</label><br>
            <input type="text" id="drop_location" required><br><br>

            <button onclick="showPaymentType()">Book Now</button>
        </div>
    </div>

    <!-- Payment Type Section -->
    <div id="paymentTypeSection" style="display:none;">
        <h3>Select Payment Type</h3>
        <button onclick="showThankYouMessage()">Credit Card</button>
        <button onclick="showThankYouMessage()">Cash</button>
    </div>

    <!-- Thank You Message -->
    <div id="thankYouMessage" class="message-box" style="display:none;">
        <p>Thank you for riding with us!</p>
        <p>Your driver will pick you up shortly.</p>
        <p>Your vehicle number is WB xxxx</p>
        <p>Please use your PIN for verification.</p>
        <p>PIN: 1234</p>
    </div>

    <!-- Lost Item Report Form -->
    <div id="lostItem" style="display:none;">
        <div style="width: 300px; margin: auto; padding: 20px;">
            <label>Describe the Item:</label><br>
            <input type="text" id="lost_item_description" required><br><br>
            <button onclick="showLostItemMessage()">Report Lost Item</button>
        </div>
    </div>

    <!-- Lost Item Message -->
    <div id="lostItemMessage" class="message-box" style="display:none;">
        <p>Your lost item report has been submitted!</p>
        <p>Our support team will contact you soon.</p>
    </div>

    <!-- Report a Query Form -->
    <div id="reportQuery" style="display:none;">
        <div style="width: 300px; margin: auto; padding: 20px;">
            <label>Write Your Query:</label><br>
            <textarea id="query_text" rows="4" style="width: 100%;" required></textarea><br><br>
            <button onclick="showQueryMessage()">Submit Query</button>
        </div>
    </div>

    <!-- Query Message -->
    <div id="queryMessage" class="message-box" style="display:none;">
        <p>Your query has been submitted successfully!</p>
        <p>Our team will get back to you shortly.</p>
    </div>

    <!-- Lodge a Complaint Form -->
    <div id="lodgeComplaint" style="display:none;">
        <div style="width: 300px; margin: auto; padding: 20px;">
            <label>Write Your Complaint:</label><br>
            <textarea id="complaint_text" rows="4" style="width: 100%;" required></textarea><br><br>
            <button onclick="showComplaintMessage()">Submit Complaint</button>
        </div>
    </div>

    <!-- Complaint Message -->
    <div id="complaintMessage" class="message-box" style="display:none;">
        <p>Your complaint has been lodged successfully!</p>
        <p>We are reviewing your complaint and will respond soon.</p>
    </div>

<!-- Footer -->
<div class="footer">
        <p>Customer care contact service available at 033xxxxxxxx 24/7</p>
    </div>

    <script>
        function showSection(sectionId) {
            // Hide all sections
            document.getElementById('bookRide').style.display = 'none';
            document.getElementById('lostItem').style.display = 'none';
            document.getElementById('paymentTypeSection').style.display = 'none';
            document.getElementById('thankYouMessage').style.display = 'none';
            document.getElementById('lostItemMessage').style.display = 'none';
            document.getElementById('reportQuery').style.display = 'none';
            document.getElementById('queryMessage').style.display = 'none';
            document.getElementById('lodgeComplaint').style.display = 'none';
            document.getElementById('complaintMessage').style.display = 'none';

            // Show the selected section
            document.getElementById(sectionId).style.display = 'block';
        }

        function showPaymentType() {
            document.getElementById('bookRide').style.display = 'none';
            document.getElementById('paymentTypeSection').style.display = 'block';
        }

        function showThankYouMessage() {
            document.getElementById('paymentTypeSection').style.display = 'none';
            document.getElementById('thankYouMessage').style.display = 'block';
        }

        function showLostItemMessage() {
            document.getElementById('lostItem').style.display = 'none';
            document.getElementById('lostItemMessage').style.display = 'block';
        }

        function showQueryMessage() {
            document.getElementById('reportQuery').style.display = 'none';
            document.getElementById('queryMessage').style.display = 'block';
        }

        function showComplaintMessage() {
            document.getElementById('lodgeComplaint').style.display = 'none';
            document.getElementById('complaintMessage').style.display = 'block';
        }
    </script>
</body>
</html>









