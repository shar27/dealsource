<?php
// Validate the presence of required form fields
$requiredFields = ['email', 'name', 'subject', 'message'];
$errors = [];
foreach ($requiredFields as $field) {
    if (!isset($_POST[$field]) || empty($_POST[$field])) {
        $errors[] = "$field is required.";
    }
}

if (!empty($errors)) {
    // Handle errors here, e.g., return error response to client or redirect to an error page
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    exit;
}

$to = "shariq.ahmed731@googlemail.com";
$from = $_POST['email'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$subject = "You have a message from your Bitmap Photography.";

$body = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Express Mail</title>
</head>
<body>
    <table style='width: 100%;'>
        <thead style='text-align: center;'>
            <tr>
                <td style='border:none;' colspan='2'>
                    <a href='#'><img src='img/logo.png' alt=''></a><br><br>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style='border:none;'><strong>Name:</strong> $name</td>
                <td style='border:none;'><strong>Email:</strong> $from</td>
            </tr>
            <tr>
                <td style='border:none;'><strong>Subject:</strong> $subject</td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td colspan='2' style='border:none;'>$message</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
";

// Attempt to send the email
if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully, handle success response here
    echo "Email sent successfully.";
} else {
    // Failed to send email, handle error response here
    echo "Failed to send email.";
}
?>