<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> -->
    <!-- <link rel="stylesheet" href="login.css"> -->
<!-- </head>
<body>
    <form action="proses_login.php" method="post">
        <div>
            Username : <input type="text" name="username" id="">
        </div>
        <div>
            Password : <input type="password" name="password" id="">
        </div>

        <input type="submit" name="login" value="login">
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link CSS Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #212529;">

<!-- Container Utama -->
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4" style="width: 50%; max-width: 300px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);">
        <h3 class="text-center mb-4">Login</h3>
        <form action="proses_login.php" method="post">
            <!-- Input Username -->
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" required placeholder="Masukan username">
            </div>
            <!-- Input Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required placeholder="Masukan password">
            </div>
            <!-- Tombol Login -->
            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
</div>

<!-- Script Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
