<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | LavaLust</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #1e293b;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */

        .sidebar {
            width: 250px;
            background: #111827;
            color: white;
            padding: 25px 18px;
            position: fixed;
            height: 100vh;
            left: 0;
            top: 0;
        }

        .brand {
            font-size: 24px;
            font-weight: 800;
            padding: 10px 15px 35px;
        }

        .nav-title {
            font-size: 11px;
            color: #64748b;
            text-transform: uppercase;
            padding: 0 15px;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }

        .nav a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 13px 15px;
            color: #cbd5e1;
            text-decoration: none;
            border-radius: 9px;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .nav a:hover,
        .nav a.active {
            background: #1e40af;
            color: white;
        }

        .logout {
            position: absolute;
            bottom: 25px;
            left: 18px;
            right: 18px;
        }

        .logout a {
            display: block;
            text-align: center;
            padding: 12px;
            border-radius: 9px;
            background: #1f2937;
            color: #cbd5e1;
            text-decoration: none;
            font-size: 14px;
        }

        .logout a:hover {
            background: #374151;
            color: white;
        }

        /* MAIN */

        .main {
            margin-left: 250px;
            width: calc(100% - 250px);
        }

        .topbar {
            height: 75px;
            background: white;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 35px;
        }

        .topbar h2 {
            font-size: 18px;
            color: #0f172a;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #dbeafe;
            color: #2563eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
        }

        .profile-info strong {
            display: block;
            font-size: 13px;
        }

        .profile-info span {
            font-size: 11px;
            color: #64748b;
        }

        .content {
            padding: 35px;
        }

        .welcome {
            margin-bottom: 30px;
        }

        .welcome h1 {
            font-size: 28px;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .welcome p {
            color: #64748b;
            font-size: 14px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            border: 1px solid #e5e7eb;
        }

        .card-label {
            color: #64748b;
            font-size: 13px;
            margin-bottom: 12px;
        }

        .card-value {
            font-size: 30px;
            font-weight: 800;
            color: #0f172a;
        }

        .section {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 15px;
            padding: 25px;
        }

        .section h2 {
            font-size: 18px;
            margin-bottom: 8px;
        }

        .section p {
            color: #64748b;
            font-size: 14px;
            line-height: 1.6;
        }

        .product-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 11px 18px;
            background: #2563eb;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
        }

        @media (max-width: 800px) {

            .sidebar {
                width: 200px;
            }

            .main {
                margin-left: 200px;
                width: calc(100% - 200px);
            }

            .cards {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>

<body>

<div class="layout">

    <aside class="sidebar">

        <div class="brand">
            LavaLust
        </div>

        <div class="nav-title">
            Main Menu
        </div>

        <nav class="nav">

            <a href="<?= site_url('auth/dashboard'); ?>" class="active">
                🏠 Dashboard
            </a>

            <a href="<?= site_url('products'); ?>">
                📦 Products
            </a>

        </nav>

        <div class="logout">

            <a href="<?= site_url('auth/logout'); ?>">
                ↪ Logout
            </a>

        </div>

    </aside>


    <main class="main">

        <header class="topbar">

            <h2>Dashboard</h2>

            <div class="profile">

                <div class="avatar">
                    <?= strtoupper(substr($this->session->userdata('username'), 0, 1)); ?>
                </div>

                <div class="profile-info">

                    <strong>
                        <?= htmlspecialchars($this->session->userdata('username')); ?>
                    </strong>

                    <span>
                        <?= htmlspecialchars($this->session->userdata('role')); ?>
                    </span>

                </div>

            </div>

        </header>


        <section class="content">

            <div class="welcome">

                <h1>
                    Welcome back, <?= htmlspecialchars($this->session->userdata('username')); ?>! 👋
                </h1>

                <p>
                    Here's what's happening with your LavaLust system.
                </p>

            </div>


            <div class="cards">

                <div class="card">

                    <div class="card-label">
                        System Status
                    </div>

                    <div class="card-value">
                        Active
                    </div>

                </div>


                <div class="card">

                    <div class="card-label">
                        Account Role
                    </div>

                    <div class="card-value">
                        <?= htmlspecialchars($this->session->userdata('role')); ?>
                    </div>

                </div>


                <div class="card">

                    <div class="card-label">
                        Access
                    </div>

                    <div class="card-value">
                        Granted
                    </div>

                </div>

            </div>


            <div class="section">

                <h2>
                    Product Management
                </h2>

                <p>
                    Manage your products, update product information,
                    monitor inventory, and keep your product records organized.
                </p>

                <a
                    href="<?= site_url('products'); ?>"
                    class="product-btn"
                >
                    Manage Products →
                </a>

            </div>

        </section>

    </main>

</div>

</body>
</html>