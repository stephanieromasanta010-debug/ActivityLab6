<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Portal Home</title>
  <style>
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
      background: #0d1b2a; /* deep navy */
      color: #fff;
    }
    nav a {
      text-decoration: none;
      color: #fff;
      margin-left: 1rem;
      font-weight: 500;
    }
    nav a:hover {
      text-decoration: underline;
    }
    .logo {
      font-weight: bold;
      font-size: 1.2rem;
    }

    /* Welcome Card */
    .welcome-card {
      max-width: 600px;
      margin: 4rem auto;
      padding: 2rem;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      text-align: center;
    }
    .welcome-card h1 {
      color: #0d1b2a;
      margin-bottom: 1rem;
    }
    .welcome-card p {
      color: #555;
      margin-bottom: 1.5rem;
    }
    .btn {
      display: inline-block;
      padding: 0.8rem 1.5rem;
      background: #1a73e8;
      color: #fff;
      border-radius: 6px;
      text-decoration: none;
      font-weight: 500;
      transition: background 0.3s;
    }
    .btn:hover {
      background: #155ab6;
    }

    /* Footer */
    footer {
      text-align: center;
      margin-top: 3rem;
      padding: 1rem;
      font-size: 0.9rem;
      color: #777;
    }
  </style>
</head>
<body>
  <!-- Navigation -->
  <nav>
    <div class="logo">Laboratory Activity Portal</div>
    <div>
      <a href="<?=site_url('/');?>">Home</a>
      <a href="<?=site_url('profile');?>">Profile</a>
    </div>
  </nav>

  <!-- Welcome Section -->
  <section class="welcome-card">
    <h1>STUDENT PORTAL</h1>
    <p>Welcome back. Access your student profile and manage your academic information.</p>
    <a href="<?=site_url('profile');?>" class="btn">Go to Profile</a>
  </section>

  <!-- Footer -->
  <footer>
    Laboratory Portal &copy; 2024. All rights reserved.
  </footer>
</body>
</html>
