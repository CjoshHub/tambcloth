<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In as Tambouriners</title>
    <link rel = "icon" href = "assets/logo.png" type = "image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/auth.js"></script>
</head>
<body class="bg-info d-flex flex-column min-vh-100">
    <div class="flex-grow-1 d-flex align-items-center justify-content-center">
        <div class="col-md-4 mx-auto my-5">
            <div class="card bg-light shadow">
                <div class="card-body">
                <img src="assets/logo.png" class="img-fluid d-block mx-auto mb-3" alt="Tambouriners GPdI Poris Logo" style="max-width: 150px;">
                <h2 class="card-title text-center">Selamat Datang</h2>
        <?php include 'connection.php'; 
            if (isset($_GET['error'])) {
                echo '<div class="alert alert-danger" role="alert">' . htmlspecialchars($_GET['error']) . '</div>';
            }
        ?>
        <form id="login-form">
            <label for="username">Username:</label>
            <input class = "form-control" type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input class = "form-control" type="password" id="password" name="password" required>
            
            <button type="submit" class="btn d-block mx-auto btn-primary mt-3 mb-3 text-center">Masuk</button>
        </form>
        </div>
    </div>
    </div>
</div>
    <div class="container-fluid bg-light py-3">
        <footer class="text-center mb-0">
            Copyright &copy; 2026 Tambouriners Clothes. All rights reserved.
        </footer>
    </div>
</body>
</html>