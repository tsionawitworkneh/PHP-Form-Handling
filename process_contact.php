<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submission Result</title>
    <style>
        body { font-family: sans-serif; background-color: #f3f4f6; display: flex; justify-content: center; padding: 50px; }
        .result-card { background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); width: 100%; max-width: 600px; }
        .success { color: #059669; background: #ecfdf5; padding: 15px; border-radius: 10px; border: 1px solid #10b981; margin-bottom: 20px; font-weight: bold; }
        .error { color: #dc2626; background: #fef2f2; padding: 15px; border-radius: 10px; border: 1px solid #ef4444; margin-bottom: 20px; font-weight: bold; }
        .data-row { margin-bottom: 15px; border-bottom: 1px solid #f1f5f9; padding-bottom: 10px; }
        .label { font-weight: 800; color: #1e293b; font-size: 13px; text-transform: uppercase; display: block; margin-bottom: 5px; }
        .value { color: #475569; font-size: 16px; }
        .back-btn { display: inline-block; margin-top: 20px; color: #5846f9; text-decoration: none; font-weight: 600; }
    </style>
</head>
<body>

<div class="result-card">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = htmlspecialchars($_POST['full_name']);
        $email = $_POST['email'];
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);
        $source = isset($_POST['source']) ? $_POST['source'] : "";
        $methods = isset($_POST['contact_method']) ? implode(", ", $_POST['contact_method']) : "None selected";

        
        $errors = [];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Email format is invalid.";
        }
        if (empty($subject)) {
            $errors[] = "Subject must not be empty.";
        }
        if (strlen($message) < 10) {
            $errors[] = "Message must be at least 10 characters long.";
        }

        
        if (!empty($errors)) {
            echo "<div class='error'>Submission Failed!</div>";
            foreach ($errors as $error) {
                echo "<p style='color: #dc2626;'>• $error</p>";
            }
        } else {
            echo "<div class='success'>Message Sent Successfully!</div>";
            
            echo "<div class='data-row'><span class='label'>Full Name:</span><span class='value'>$name</span></div>";
            echo "<div class='data-row'><span class='label'>Email:</span><span class='value'>$email</span></div>";
            echo "<div class='data-row'><span class='label'>Subject:</span><span class='value'>$subject</span></div>";
            echo "<div class='data-row'><span class='label'>Message:</span><span class='value'>$message</span></div>";
            echo "<div class='data-row'><span class='label'>Heard via:</span><span class='value'>$source</span></div>";
            echo "<div class='data-row'><span class='label'>Preferred Contact:</span><span class='value'>$methods</span></div>";
        }
    }
    ?>
    <a href="contact.php" class="back-btn"> ← Go Back</a>
</div>

</body>
</html>