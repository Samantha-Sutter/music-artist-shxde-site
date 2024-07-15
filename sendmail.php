<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="shxde contact form">
    <meta name="keywords" content="shxde contact form">
    <title>Contact Form</title>
    <link rel="shortcut icon" href="images/favicon_io/favicon.ico" />
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar">
        <!-- Your navigation bar code -->
    </nav>

    <h1>Email Confirmation</h1>

    <form method="post" action="send_email.php"> <!-- Replace 'send_email.php' with your actual PHP script -->
        <fieldset>
            <legend>Contact Information</legend>
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" required><br>
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" required><br>
            <label for="email">Email Address:</label>
            <input type="email" name="email" id="email" required><br>
            <label for="verify">Verify Email:</label>
            <input type="email" name="verify" id="verify" required><br>
            <label for="phone">Phone Number:</label>
            <input type="tel" name="phone" id="phone" required><br>
        </fieldset>

        <fieldset>
            <legend>Message Information</legend>
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject" required><br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
        </fieldset>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
