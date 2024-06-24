<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>">

    <style>
        body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #f8f9fa;
}

.card {
    border: 1px solid #ced4da;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-body {
    padding: 2rem;
}

h1 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    font-weight: bold;
}

h2 {
    font-size: 1.25rem;
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
}

.form-control {
    border-radius: 4px;
    border: 1px solid #ced4da;
    padding: 0.75rem;
}

.btn-primary {
    background-color: #000;
    border-color: #000;
}

.btn-primary:hover {
    background-color: #333;
    border-color: #333;
}

.text-right {
    text-align: right;
}

.text-center a {
    color: #000;
    text-decoration: none;
}

.text-center a:hover {
    text-decoration: underline;
}
    </style>
    
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">WELCOME TO PNBTT!</h1>
                        <h2 class="text-center">Log into your Account</h2>
                        <form action="<?php echo site_url('login/authenticate'); ?>" method="post">
                            <div class="form-group">
                                <label for="email">email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group text-right">
                                <a href="#">forgot password?</a>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary">Login</button>
                        </form>
                        <p class="text-center mt-3">Belum punya akun? <a href="#">Hubungi admin!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>