<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737290212/Energy/Baltai_Energy_Logo_Agreed_2_1_1_pagyne.png" type="image/x-icon">
    <title>Baltai Energy | Off-Grid & On-Grid Solar Solutions for Residential, Commercial & Industrial Projects in Nigeria </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: linear-gradient(to right, #C850C0, #4158D0);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Montserrat", serif !important;
    scroll-behavior: smooth;
    overflow-x: hidden;
        }

        .auth-container {
            background: white;
            border-radius: 10px;
            padding: 40px;
            width: 500px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            border: none;
            background-color: #F4F4F4 !important;
            color: #000;
            padding: 20px 20px;
            border-radius: 5px;

        }

        .form-control:focus,
        .btn:focus,
        .google-btn:focus {
            box-shadow: none !important;
            outline: none !important;
        }

        .btn-primary {
            margin-top: 10px;
            padding: 15px 0px;
            background: linear-gradient(to right, #F8861A, #FEC31C);
            border: none;
            width: 100%;
        }

        .btn-primary:hover {
            background: #000;
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 20px 0;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #ccc;
        }

        .divider:not(:empty)::before {
            margin-right: .25em;
        }

        .divider:not(:empty)::after {
            margin-left: .25em;
        }

        .google-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            cursor: pointer;
        }

        .google-btn img {
            width: 20px;
            margin-right: 10px;
        }

        .link {
            color: #F8861A;
            cursor: pointer;
            font-weight: 400;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div id="auth-page" class="auth-container">

    </div>

    <script>
        function showLoginPage() {
            document.getElementById("auth-page").innerHTML = `
            <h3 class="text-center fw-bold mb-3">Login</h3>
            <p class="text-center text-muted mb-4">Enter your credentials to access your course</p>
            <label class="fw-medium mb-3">Email Address</label>
            <input type="email" class="form-control mb-3" placeholder="Enter your email address">
            
            <label class="fw-medium mb-3">Password</label>
            <input type="password" class="form-control mb-2" placeholder="Enter your password">
            <div class="text-end mb-3 mt-3">
                <a href="#" class="text-muted link">Forgot Password?</a>
            </div>
            
            <button class="btn btn-primary">Login</button>
            
            <p class="text-center mt-4">Don't have an account? <a onclick="showRegisterPage()" class="link">Register Now</a></p>
            
            <div class="divider">Or</div>
            
            <button class="google-btn">
                <img src="https://img.icons8.com/color/48/000000/google-logo.png"/>
                Login with Google
            </button>
        `;
        }

        function showRegisterPage() {
            document.getElementById("auth-page").innerHTML = `
            <h3 class="text-center fw-bold  mb-3">Register</h3>
            <p class="text-center text-muted  mb-4">Create a new account</p>
            <label class="fw-medium mb-3">Full Name</label>
            <input type="text" class="form-control mb-3" placeholder="Enter your full name">
            
            <label class="fw-medium mb-3">Email Address</label>
            <input type="email" class="form-control mb-3" placeholder="Enter your email address">
            
            <label class="fw-medium mb-3">Password</label>
            <input type="password" class="form-control mb-3" placeholder="Create a password">
            
            <button class="btn btn-primary">Register</button>
            
            <p class="text-center mt-3">Already have an account? <a onclick="showLoginPage()" class="link">Login</a></p>
            
            <div class="divider">Or</div>
            
            <button class="google-btn">
                <img src="https://img.icons8.com/color/48/000000/google-logo.png"/>
                Sign up with Google
            </button>
        `;
        }

        // Load login page by default
        showLoginPage();
    </script>

</body>

</html>