<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Account | LavaLust</title>

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

        .register-card {
            width: 100%;
            max-width: 500px;
            background: white;
            padding: 45px;
            margin: 20px;
            border-radius: 22px;
            box-shadow: 0 20px 60px rgba(30, 41, 59, 0.12);
        }

        .logo {
            width: 55px;
            height: 55px;
            border-radius: 15px;
            background: linear-gradient(135deg, #2563eb, #4f46e5);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 25px;
        }

        h1 {
            font-size: 30px;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #64748b;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #334155;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            height: 50px;
            border: 1px solid #dbe2ea;
            border-radius: 10px;
            padding: 0 15px;
            font-size: 14px;
            background: white;
            outline: none;
        }

        input:focus,
        select:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 4px rgba(79,70,229,0.10);
        }

        button {
            width: 100%;
            height: 52px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #2563eb, #4f46e5);
            color: white;
            font-weight: 700;
            cursor: pointer;
            margin-top: 5px;
        }

        button:hover {
            box-shadow: 0 8px 20px rgba(79,70,229,0.25);
        }

        .login-link {
            text-align: center;
            margin-top: 25px;
            color: #64748b;
            font-size: 14px;
        }

        .login-link a {
            color: #4f46e5;
            font-weight: 700;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="register-card">

    <div class="logo">
        L
    </div>

    <h1>Create an account</h1>

    <p class="subtitle">
        Register your account to start using LavaLust.
    </p>

    <form action="<?= site_url('auth/register'); ?>" method="post">

        <div class="form-group">
            <label for="username">Username</label>

            <input
                type="text"
                id="username"
                name="username"
                placeholder="Choose a username"
                required
            >
        </div>

        <div class="form-group">
            <label for="password">Password</label>

            <input
                type="password"
                id="password"
                name="password"
                placeholder="Create a password"
                required
            >
        </div>

        <div class="form-group">
            <label for="role">Account Role</label>

            <select name="role" id="role">

                <option value="user">
                    User
                </option>

                <option value="admin">
                    Admin
                </option>

            </select>
        </div>

        <button type="submit">
            Create Account
        </button>

    </form>

    <div class="login-link">
        Already have an account?
        <a href="<?= site_url('auth/login'); ?>">
            Sign in
        </a>
    </div>

</div>

</body>
</html>