<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="styles.css">
    <script src="validation.js" defer></script>
</head>

<body>
    <div class="container">

        <h1>Fill the form below</h1><br>
        <p>Complete the below form to get instant access</p><br>
        <form action="submit.php" method="post">
            <input type="text" name="companyName" placeholder="Company name" required><br>
            <input type="text" name="name" placeholder="Full name" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="number" name="number" placeholder="Phone" required><br>
            <select name="service" required>
                <option value="" disabled selected>Choose service...</option>
                <option value="service2">Service 1</option>
                <option value="service3">Service 2</option>
            </select>
            <br>
            <input type="submit" class="submit" name="submit" value="Send request">
        </form>

    </div>
    <img src="immagine.png" alt="image" class="image">
    <?php
    if (isset($_POST['submit'])) {
        $companyName = $_POST['companyName'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $service = $_POST['service'];
    }
    ?>

</body>

</html>