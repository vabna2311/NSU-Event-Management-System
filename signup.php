<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group .role {
            margin-bottom: 10px;
        }
        .form-group .role label {
            display: inline-block;
            margin-right: 10px;
        }
        .form-group input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Signup Form</h2>
        <form action="submit_signup.php" method="post">
            <div class="form-group">
                <label for="email">North South Mail Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label>Role:</label>
                <div class="role">
                    <label>
                        <input type="radio" name="role" value="Admin" required> Admin
                    </label>
                    <label>
                        <input type="radio" name="role" value="Organizer"> Organizer
                    </label>
                    <label>
                        <input type="radio" name="role" value="Faculty"> Faculty
                    </label>
                    <label>
                        <input type="radio" name="role" value="Student"> Student
                    </label>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Signup">
            </div>
        </form>
    </div>
</body>
</html>
