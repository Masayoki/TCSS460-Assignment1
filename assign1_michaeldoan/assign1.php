<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Form Submission Result</title>
</head>

<body>
    <div class="container">
        <h2>Form Submission Result</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h3>User Info</h3>";
            echo "<p><b>First Name:</b> " . htmlspecialchars($_POST["first"]) . "</p>";
            echo "<p><b>Last Name:</b> " . htmlspecialchars($_POST["last"]) . "</p>";
            echo "<p><b>Email:</b> " . htmlspecialchars($_POST["email"]) . "</p>";

            echo "<h3>Location</h3>";
            echo "<p><b>Address:</b> " . htmlspecialchars($_POST["address"]) . "</p>";
            echo "<p><b>City:</b> " . htmlspecialchars($_POST["city"]) . "</p>";
            echo "<p><b>Zip Code:</b> " . htmlspecialchars($_POST["zip"]) . "</p>";

            echo "<h3>Personal Details</h3>";
            echo "<p><b>Date of Birth:</b> " . htmlspecialchars($_POST["dob"]) . "</p>";

            // Add more fields as needed

            echo "<h3>All Done</h3>";
            if (isset($_POST["myCheckbox"]) && $_POST["myCheckbox"] == "on") {
                echo "<p>You agreed to the Terms of the Site.</p>";
            } else {
                echo "<p>You did not agree to the Terms of the Site.</p>";
            }
        } else {
            echo "<p>No form submission data received.</p>";
        }
        ?>

        <a href="pageTwo.html">Go back to the form</a>
    </div>
</body>

</html>
