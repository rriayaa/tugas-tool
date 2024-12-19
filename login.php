<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffe6f2;  /* Pink pastel */
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 10%;
        }
        .card {
            background-color: #ffcce6;  /* Lighter pink for the card */
            border: none;
            border-radius: 10px;
        }
        .card-header {
            background-color: #ff99cc;  /* Bright pink for header */
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            font-size: 1.25em;
            font-weight: bold;
            text-align: center;
        }
        .btn-primary {
            background-color: #ff66b2;  /* Pink button */
            border: none;
        }
        .btn-primary:hover {
            background-color: #ff4da6;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="login_process.php" method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
