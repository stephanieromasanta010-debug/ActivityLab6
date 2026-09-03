<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Portal Home</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            background: #f4f6f9;
            color: #333;
        }

        /* Navbar */

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 1rem 2rem;

            background: #0d1b2a;
            color: #fff;
        }

        nav a {
            text-decoration: none;
            color: #fff;

            margin-left: 1.5rem;

            font-weight: 500;

            transition: color 0.3s;
        }

        nav a:hover {
            color: #90caf9;
        }

        .logo {
            font-weight: bold;
            font-size: 1.2rem;
        }


        /* Welcome Section */

        .welcome-card {
            max-width: 700px;

            margin: 4rem auto;

            padding: 3rem 2rem;

            background: #fff;

            border-radius: 12px;

            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);

            text-align: center;
        }

        .welcome-card h1 {
            color: #0d1b2a;

            margin-bottom: 1rem;

            font-size: 2.3rem;
        }

        .welcome-card p {
            color: #555;

            margin-bottom: 2rem;

            line-height: 1.6;
        }


        /* Buttons */

        .button-container {
            display: flex;

            justify-content: center;

            gap: 1rem;

            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;

            padding: 0.8rem 1.5rem;

            background: #1a73e8;

            color: #fff;

            border-radius: 6px;

            text-decoration: none;

            font-weight: 500;

            transition: all 0.3s;
        }

        .btn:hover {
            background: #155ab6;

            transform: translateY(-2px);
        }

        .btn-secondary {
            background: #0d1b2a;
        }

        .btn-secondary:hover {
            background: #1b344d;
        }


        /* Feature Cards */

        .features {
            max-width: 1000px;

            margin: 0 auto 4rem;

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 1.5rem;

            padding: 0 2rem;
        }

        .feature-card {
            background: #fff;

            padding: 2rem;

            border-radius: 10px;

            text-align: center;

            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);

            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 2.5rem;

            margin-bottom: 1rem;
        }

        .feature-card h3 {
            color: #0d1b2a;

            margin-bottom: 0.5rem;
        }

        .feature-card p {
            color: #666;

            line-height: 1.5;
        }


        /* Footer */

        footer {
            text-align: center;

            margin-top: 3rem;

            padding: 1rem;

            font-size: 0.9rem;

            color: #777;
        }


        /* Mobile */

        @media (max-width: 700px) {

            nav {
                flex-direction: column;

                gap: 1rem;
            }

            nav a {
                margin-left: 0.7rem;
            }

            .welcome-card {
                margin: 2rem 1rem;

                padding: 2rem 1rem;
            }

            .welcome-card h1 {
                font-size: 1.8rem;
            }

            .features {
                grid-template-columns: 1fr;
            }
        }

    </style>

</head>


<body>


    <!-- Navigation -->

    <nav>

        <div class="logo">
            Laboratory Activity Portal
        </div>

        <div>

            <a href="<?= site_url('/'); ?>">
                Home
            </a>

            <a href="<?= site_url('profile'); ?>">
                Profile
            </a>

            <a href="<?= site_url('showUsers'); ?>">
                Users
            </a>

        </div>

    </nav>


    <!-- Welcome Section -->

    <section class="welcome-card">

        <h1>
            STUDENT PORTAL
        </h1>

        <p>
            Welcome back. Access your student profile,
            view registered users, and manage your
            academic information.
        </p>


        <div class="button-container">

            <a href="<?= site_url('profile'); ?>"
               class="btn">

                Go to Profile

            </a>


            <a href="<?= site_url('showUsers'); ?>"
               class="btn btn-secondary">

                View Users

            </a>

        </div>

    </section>


    <!-- Features -->

    <section class="features">


        <div class="feature-card">

            <div class="feature-icon">
                👤
            </div>

            <h3>
                My Profile
            </h3>

            <p>
                View your personal information,
                username, and email address.
            </p>

            <a href="<?= site_url('profile'); ?>"
               class="btn">

                View Profile

            </a>

        </div>


        <div class="feature-card">

            <div class="feature-icon">
                👥
            </div>

            <h3>
                User Directory
            </h3>

            <p>
                View the registered users
                stored in the student portal.
            </p>

            <a href="<?= site_url('showUsers'); ?>"
               class="btn">

                View Users

            </a>

        </div>


    </section>


    <!-- Footer -->

    <footer>

        Laboratory Portal &copy; 2026.
        All rights reserved.

    </footer>


</body>

</html>