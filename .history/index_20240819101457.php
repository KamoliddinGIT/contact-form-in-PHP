<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // You can add code here to save the data to a database or send it via email
    echo "<script>alert('Thank you, $name. Your message has been received!');</script>";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Form in PHP</title>
</head>
<body>

    <div class="container">
        <form>
            <h2>Contact US</h2>
            <div class="personal_details">
                <div class="name">
                    <span>First Name *</span>
                    <input type="text" class="name">
                </div>
                <div class="surname">
                    <span>Last Name *</span>
                    <input type="text" class="surname">
                </div>
            </div>
            <div class="email_address">
                <span>Email Address *</span>
                <input type="email" class="email">
            </div>
            <div class="query">
                <span>Query Type *</span>
               <div class="query_items">
                   <div class="general">
                       <input type="radio" id="general" value="General Enquiry">
                       <label for="general">General Enquiry</label><br>
                   </div>
                   <div class="support">
                       <input type="radio" id="support" value="Support Request">
                       <label for="support">Support Request</label><br>
                   </div>
               </div>
            </div>

            <textarea cols="30" rows="10" class=''></textarea>
        </form>
    </div>
</body>
</html>