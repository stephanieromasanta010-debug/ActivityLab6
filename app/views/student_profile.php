<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Profile</title>
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

    /* Page Header */
    h1 {
      text-align: center;
      margin: 2rem 0 1rem;
      color: #0d1b2a;
      font-size: 1.8rem;
    }

    /* Profile Card */
    .profile-card {
      max-width: 600px;
      margin: 0 auto;
      padding: 2rem;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .profile-card h2 {
      margin: 0;
      color: #0d1b2a;
      font-size: 1.5rem;
    }
    .subtitle {
      margin: 0.5rem 0 1.5rem;
      color: #555;
      font-size: 1rem;
    }
    .info-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1rem;
    }
    .info-grid div {
      padding: 0.8rem;
      background: #f8f9fa;
      border-radius: 6px;
      border: 1px solid #e0e6ed;
    }

    /* Footer */
    footer {
      text-align: center;
      margin-top: 2rem;
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

  <!-- Page Header -->
  <h1>Student Information</h1>

  <!-- Profile Card -->
  <section class="profile-card">
    <h2><?php echo $name; ?></h2>
    <p class="subtitle"><?php echo $student_id; ?> — <?php echo $course; ?></p>

    <div class="info-grid">
        <div><strong>Student ID:</strong> <?php echo $student_id; ?></div>
        <div><strong>Name:</strong> <?php echo $name; ?></div>
        <div><strong>Course:</strong> <?php echo $course; ?></div>
      <div><strong>Year Level:</strong> <?php echo $year_level; ?></div>
      <div><strong>Section:</strong> <?php echo $section; ?></div>
      <div><strong>Email:</strong> <?php echo $email; ?></div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    Laboratory Portal &copy; 2024. All rights reserved.
  </footer>
</body>
</html>
