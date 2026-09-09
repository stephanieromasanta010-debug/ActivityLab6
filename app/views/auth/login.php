<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | LavaLust</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #eef4ff, #f7f3ff);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1e293b;
        }

        .login-container {
            width: 100%;
            max-width: 1000px;
            min-height: 600px;
            margin: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(30, 41, 59, 0.12);
        }

        .login-left {
            background: linear-gradient(145deg, #2563eb, #4f46e5);
            color: white;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .login-left::before {
            content: "";
            position: absolute;
            width: 280px;
            height: 280px;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
            top: -100px;
            right: -100px;
        }

        .login-left::after {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: rgba(255,255,255,0.06);
            bottom: -100px;
            left: -80px;
        }

        .brand {
            font-size: 30px;
            font-weight: 800;
            margin-bottom: 30px;
            position: relative;
            z-index: 2;
        }

        .login-left h1 {
            font-size: 42px;
            line-height: 1.15;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }

        .login-left p {
            font-size: 16px;
            line-height: 1.7;
            color: rgba(255,255,255,0.85);
            max-width: 420px;
            position: relative;
            z-index: 2;
        }

        .login-right {
            padding: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-box {
            width: 100%;
            max-width: 380px;
        }

        .form-box h2 {
            font-size: 30px;
            margin-bottom: 8px;
            color: #0f172a;
        }

        .subtitle {
            color: #64748b;
            margin-bottom: 32px;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 600;
            color: #334155;
        }

        input {
            width: 100%;
            height: 50px;
            border: 1px solid #dbe2ea;
            border-radius: 10px;
            padding: 0 15px;
            font-size: 14px;
            outline: none;
            transition: 0.2s;
        }

        input:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 4px rgba(79,70,229,0.10);
        }

        .login-btn {
            width: 100%;
            height: 52px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #2563eb, #4f46e5);
            color: white;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.2s;
            margin-top: 8px;
        }

        .login-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(79,70,229,0.25);
        }

        .register-link {
            text-align: center;
            margin-top: 25px;
            color: #64748b;
            font-size: 14px;
        }

        .register-link a {
            color: #4f46e5;
            font-weight: 700;
            text-decoration: none;
        }

        @media (max-width: 750px) {
            .login-container {
                grid-template-columns: 1fr;
            }

            .login-left {
                padding: 40px;
                min-height: 280px;
            }

            .login-left h1 {
                font-size: 32px;
            }

            .login-right {
                padding: 40px 30px;
            }
        }
    </style>
</head>

<body>

<div class="login-container">

    <div class="login-left">
        <div class="brand">LavaLust</div>

        <h1>Welcome<br>back!</h1>

        <p>
            Sign in to access your dashboard and manage your
            products efficiently in one place.
        </p>
    </div>

    <div class="login-right">

        <div class="form-box">

            <h2>Sign in</h2>

            <p class="subtitle">
                Enter your account details to continue.
            </p>

            <form action="<?= site_url('auth/login'); ?>" method="post">

                <div class="form-group">
                    <label for="username">Username</label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Enter your username"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="password">Password</label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        required
                    >
                </div>

                <button type="submit" class="login-btn">
                    Sign In
                </button>

            </form>

            <div class="register-link">
                Don't have an account?
                <a href="<?= site_url('auth/register'); ?>">
                    Create one
                </a>
            </div>

        </div>

    </div>

</div>

</body>
</html>