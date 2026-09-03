<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>User Directory</title>


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

            color: white;
        }

        nav a {
            color: white;

            text-decoration: none;

            margin-left: 1.5rem;

            font-weight: 500;
        }

        nav a:hover {
            color: #90caf9;
        }

        .logo {
            font-weight: bold;

            font-size: 1.2rem;
        }


        /* Main */

        .container {
            max-width: 1100px;

            margin: 3rem auto;

            padding: 0 2rem;
        }

        .page-title {
            text-align: center;

            margin-bottom: 2rem;
        }

        .page-title h1 {
            color: #0d1b2a;

            margin-bottom: 0.5rem;
        }

        .page-title p {
            color: #666;
        }


        /* Table */

        .table-container {
            background: white;

            border-radius: 10px;

            overflow-x: auto;

            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        table {
            width: 100%;

            border-collapse: collapse;
        }

        th {
            background: #0d1b2a;

            color: white;

            padding: 1rem;

            text-align: left;
        }

        td {
            padding: 1rem;

            border-bottom: 1px solid #eee;
        }

        tr:hover {
            background: #f4f8fc;
        }

        .username {
            color: #1a73e8;

            font-weight: 600;
        }


        /* Back button */

        .back {
            display: inline-block;

            margin-top: 1.5rem;

            padding: 0.7rem 1.2rem;

            background: #1a73e8;

            color: white;

            text-decoration: none;

            border-radius: 6px;
        }

        .back:hover {
            background: #155ab6;
        }


        /* Footer */

        footer {
            text-align: center;

            padding: 2rem;

            color: #777;

            font-size: 0.9rem;
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

            <a href="<?= site_url('users'); ?>">
                Users
            </a>

        </div>

    </nav>


    <!-- Content -->

    <main class="container">

        <div class="page-title">

            <h1>
                User Directory
            </h1>

            <p>
                Registered users in the Student Portal
            </p>

        </div>


        <div class="table-container">

            <table>

                <thead>

                    <tr>

                        <th>
                            ID
                        </th>

                        <th>
                            First Name
                        </th>

                        <th>
                            Last Name
                        </th>

                        <th>
                            Email
                        </th>

                        <th>
                            Username
                        </th>

                    </tr>

                </thead>


                <tbody>

                    <?php if (!empty($users)): ?>

                        <?php foreach ($users as $user): ?>

                            <tr>

                                <td>
                                    <?= htmlspecialchars($user['id']); ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($user['firstname']); ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($user['lastname']); ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($user['email']); ?>
                                </td>

                                <td class="username">
                                    @<?= htmlspecialchars($user['username']); ?>
                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>

                            <td colspan="5"
                                style="text-align:center;">

                                No users found.

                            </td>

                        </tr>

                    <?php endif; ?>

                </tbody>

            </table>

        </div>


        <a href="<?= site_url('/'); ?>"
           class="back">

            ← Back to Home

        </a>

    </main>


    <footer>

        Laboratory Portal &copy; 2026.
        All rights reserved.

    </footer>


</body>

</html>