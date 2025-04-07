<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register - HostCanon</title>


    <?php include '../assets/includes/optimize-loading.php'; ?>

    <link rel="shortcut icon" href="assets/media/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .form-section {
            background: linear-gradient(135deg, #4B0082, #932C8B);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .account-wrapper {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .account-form-container {
            padding: 40px;
        }

        .account-tabs {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .tab-btn {
            background: none;
            border: none;
            padding: 10px 20px;
            font-weight: 600;
            color: #666;
            position: relative;
            transition: all 0.3s ease;
        }

        .tab-btn.active {
            color: #4B0082;
        }

        .tab-btn.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(135deg, #4B0082, #932C8B);
        }

        .form-content {
            display: none;
        }

        .form-content.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .form-content h3 {
            color: #2d2d2d;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .form-content p {
            color: #666;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .input-group {
            border: 1.5px solid #e0e0e0;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .input-group:focus-within {
            border-color: #4B0082;
            box-shadow: 0 0 0 4px rgba(75, 0, 130, 0.1);
        }

        .input-group-text {
            background: none;
            border: none;
            color: #666;
        }

        .form-control {
            border: none;
            padding: 12px;
        }

        .form-control:focus {
            box-shadow: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, #4B0082, #932C8B);
            border: none;
            padding: 12px;
            font-weight: 600;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(75, 0, 130, 0.2);
        }

        .account-features {
            background: linear-gradient(135deg, #4B0082, #932C8B);
            color: white;
            padding: 40px;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .feature-list {
            list-style: none;
            padding: 0;
        }

        .feature-list li {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 25px;
        }

        .feature-list i {
            background: rgba(255, 255, 255, 0.1);
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            font-size: 1.2rem;
        }

        .social-login {
            margin-top: 30px;
            text-align: center;
        }

        .social-buttons {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .social-buttons .btn {
            flex: 1;
            border: 1.5px solid #e0e0e0;
            padding: 10px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .social-buttons .btn:hover {
            background: #f8f9fa;
            transform: translateY(-2px);
        }

        .toggle-password {
            background: none;
            border: none;
            padding: 0 15px;
            color: #666;
            font-size: 1.1rem;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .toggle-password:hover {
            color: #4B0082;
        }

        .toggle-password:focus {
            outline: none;
        }

        .input-group .toggle-password {
            border-left: 1px solid #e0e0e0;
            margin-left: 5px;
            padding: 8px 15px;
        }
    </style>
</head>

<body class="loading">
<?php include '../assets/includes/nav-bar.php'; ?>

    <section class="form-section py-5">
        <div class="container">
            <!-- Login/Register Forms -->
            <div class="auth-forms mt-5" id="authForms">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="account-wrapper">
                            <div class="row g-0">
                                <div class="col-lg-7">
                                    <div class="account-form-container">
                                        <!-- Account Tabs -->
                                        <div class="account-tabs">
                                            <button class="tab-btn active" data-tab="login">Login</button>
                                            <button class="tab-btn" data-tab="register">Register</button>
                                        </div>

                                        <!-- Login Form -->
                                        <div class="form-content active" id="loginForm">
                                            <h3>Welcome Back!</h3>
                                            <p>Login to access your account and manage your orders.</p>
                                            <form id="loginFormElement">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <i class="bi bi-envelope"></i>
                                                        </span>
                                                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <i class="bi bi-lock"></i>
                                                        </span>
                                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                                        <button type="button" class="toggle-password">
                                                            <i class="bi bi-eye"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center mb-4">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="rememberMe">
                                                        <label class="form-check-label" for="rememberMe">Remember me</label>
                                                    </div>
                                                    <a href="#" class="forgot-link">Forgot Password?</a>
                                                </div>
                                                <button type="submit" class="btn btn-primary w-100">Login</button>
                                            </form>
                                            <div class="social-login">
                                                <p>Or login with</p>
                                                <div class="social-buttons">
                                                    <button class="btn">
                                                        <i class="bi bi-google"></i>
                                                        Google
                                                    </button>
                                                    <button class="btn">
                                                        <i class="bi bi-facebook"></i>
                                                        Facebook
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Register Form -->
                                        <div class="form-content" id="registerForm">
                                            <h3>Create Account</h3>
                                            <p>Join us to start shopping and get exclusive offers!</p>
                                            <form id="registerFormElement">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <i class="bi bi-person"></i>
                                                        </span>
                                                        <input type="text" name="fullName" class="form-control" placeholder="Full Name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <i class="bi bi-envelope"></i>
                                                        </span>
                                                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <i class="bi bi-lock"></i>
                                                        </span>
                                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                                        <button type="button" class="toggle-password">
                                                            <i class="bi bi-eye"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <i class="bi bi-lock"></i>
                                                        </span>
                                                        <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password" required>
                                                        <button type="button" class="toggle-password">
                                                            <i class="bi bi-eye"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-check mb-4">
                                                    <input type="checkbox" name="terms" class="form-check-input" id="terms" required>
                                                    <label class="form-check-label" for="terms">
                                                        I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                                                    </label>
                                                </div>
                                                <button type="submit" class="btn btn-primary w-100">Create Account</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="account-features">
                                        <div class="feature-content">
                                            <h2>Experience Premium Web Hosting</h2>
                                            <ul class="feature-list">
                                                <li>
                                                    <i class="bi bi-shield-check"></i>
                                                    <div>
                                                        <h4>Secure Hosting</h4>
                                                        <p>Your data is protected with advanced security</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="bi bi-speedometer2"></i>
                                                    <div>
                                                        <h4>High Performance</h4>
                                                        <p>Lightning-fast servers with 99.9% uptime</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="bi bi-headset"></i>
                                                    <div>
                                                        <h4>24/7 Support</h4>
                                                        <p>Expert support team always ready to help</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include '../assets/includes/footer.php'; ?>
    <?php include '../assets/includes/scroll-up.php'; ?>

    <!-- Tab Switching Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Tab switching functionality
            $('.tab-btn').click(function() {
                const tab = $(this).data('tab');
                
                // Update active states
                $('.tab-btn').removeClass('active');
                $(this).addClass('active');
                
                // Show selected form
                $('.form-content').removeClass('active');
                $(`#${tab}Form`).addClass('active');
            });

            // Password toggle functionality
            $('.toggle-password').click(function() {
                const input = $(this).siblings('input');
                const icon = $(this).find('i');
                
                if (input.attr('type') === 'password') {
                    input.attr('type', 'text');
                    icon.removeClass('bi-eye').addClass('bi-eye-slash');
                } else {
                    input.attr('type', 'password');
                    icon.removeClass('bi-eye-slash').addClass('bi-eye');
                }
            });
        });
    </script>
</body>
</html>