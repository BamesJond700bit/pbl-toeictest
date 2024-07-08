<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duolingo English Test</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .hero-section {
            padding: 60px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 30px 0;
            width: calc(100% + 60px); /* Increase the width of the hero-section */
            margin-left: auto;
            margin-right: -30px; /* Negative margin to extend to the right */
            max-width: none; /* Remove max-width constraint */
        }
        .hero-section h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: bold;
            color: #343a40;
        }
        .hero-section p {
            font-size: 1.2rem;
            color: #6c757d;
            margin-bottom: 30px;
        }
        .btn-primary {
            padding: 15px 30px;
            font-size: 1rem;
            border-radius: 50px;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .sub-container {
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
            max-width: 800px;
        }
        .box {
            padding: 30px;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .box h3 {
            margin-bottom: 20px;
            font-size: 1.5rem;
            color: #343a40;
        }
        .btn-outline-secondary {
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 50px;
            transition: color 0.3s ease, border-color 0.3s ease;
        }
        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="hero-section row align-items-center">
            <div class="col-md-6 text-md-left text-center">
                <h1>Start your testing journey today!</h1>
                <p>Join millions of students who have taken the Duolingo English Test.</p>
                <a href="#" class="btn btn-primary btn-lg">Take a Test</a>
                <div style="margin-top: 40px;">
                    <h2>Not quite ready?</h2>
                    <p>No problem! Prepare with our collection of reference materials and practice exercises.</p>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="<?php echo base_url('assets/images/image.png'); ?>" alt="Illustration" class="img-fluid">
            </div>
            
        </div>
        <div class="text-center">
            <div class="row sub-container justify-content-center">
                <div class="col-md-6">
                    <div class="box">
                        <h3>Learn about the test</h3>
                        <a href="#" class="btn btn-outline-secondary btn-block">Learn More ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.amazonaws.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
