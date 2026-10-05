<?php
$errors = array();

$email = $_POST['email'] ?? '';

if (!preg_match("/^[\w\.-]+@[\w\.-]+\.\w{2,4}$/", $email)) {
    $errors[] = "Invalid email format.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f4f7;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .message-box {
            width: 350px;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        .success {
            color: #155724;
            background: #d4edda;
            border: 1px solid #c3e6cb;
            padding: 15px;
            border-radius: 8px;
        }

        .error {
            color: #721c24;
            background: #f8d7da;
            border: 1px solid #f5c6cb;
            padding: 15px;
            border-radius: 8px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }
    </style>
</head>

<body>

<div class="message-box">

    <?php if (empty($errors)) { ?>

        <h2>Registration</h2>
        <div class="success">
            Registration successful!
        </div>

    <?php } else { ?>

        <h2>Registration Error</h2>
        <div class="error">
            <?php
            foreach ($errors as $e) {
                echo htmlspecialchars($e) . "<br>";
            }
            ?>
        </div>

    <?php } ?>

</div>

</body>
</html>
