<?php
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $companyName = $_POST['companyName'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $service = $_POST['service'];

    // Validate inputs
    $errors = [];
    if (empty($name)) {
        $errors['name'] = "Name is required";
    }
    if (empty($companyName)) {
        $errors['companyName'] = "Company name is required";
    }
    if (empty($email)) {
        $errors['email'] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format";
    }
    if (empty($number)) {
        $errors['number'] = "Number is required";
    }
    if (empty($service)) {
        $errors['service'] = "Service is required";
    }
    

   
    if (empty($errors)) {
        $to = "your@example.com";
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nNumber: $number\nService: $service";
        if (mail($to, $subject, $body)) {
            http_response_code(200);
            echo "success";
        } else {
            http_response_code(500);
            echo "An error occurred. Please try again later.";
        }
    } else {
        http_response_code(400);
        echo json_encode($errors);
    }
}    */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $companyName = $_POST["companyName"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $service = $_POST["service"];

    $errors = [];
    if (empty($companyName)) {
        $errors["companyName"] = "Company name is required";
    }
    if (empty($name)) {
        $errors["name"] = "Full Name is required";
    }
    if (empty($email)) {
        $errors["email"] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format";
    }
    if (empty($number)) {
        $errors["number"] = "Phone is required";
    } elseif (!preg_match("/^\d+$/", $number)) {
        $errors["number"] = "Phone should contain only numbers";
    }
    if (empty($service)) {
        $errors["service"] = "Service is required";
    }

    if (empty($errors)) {
        $success_data = [
            'message' => "Message sent successfully!",
            'companyName' => $companyName,
            'Name' => $name,
            'email' => $email,
            'number' => $number,
            'service' => $service
        ];
        echo json_encode($success_data);
    } else {
        http_response_code(400);
        header('Content-Type: application/json');
        echo json_encode($errors);
    }
}
?>


