<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user login and registeration</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
        <div class="row">
            <div class="col-md-6">
                <h2>Login here</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label for="username"></label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password"></label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Register here</h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label for="username"></label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password"></label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>