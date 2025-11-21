<?php
//======================================================================
// SETTINGS PAGE 
//======================================================================
include_once(realpath(dirname(__FILE__) . '/php/path.php'));
$page_name = "settings";

include_once "../php/session.php";
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Settings - TimeCap</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

  <style>
    :root {
      --primary-color: #13a4ec;
      --background-light: #f6f7f8;
      --background-dark: #101c22;
      --text-light: #ffffff;
      --text-dark: #0f172a;
      --font-display: "Plus Jakarta Sans", "Noto Sans", sans-serif;
    }

    body {
      font-family: var(--font-display);
      background-color: var(--background-dark);
      color: var(--text-light);
      min-height: 100vh;
    }

    [data-bs-theme="dark"] body {
      background-color: var(--background-dark);
      color: var(--text-light);
    }

    .navbar {
      background-color: #101c22;
      backdrop-filter: blur(8px);
    }

    .section-card {
      background-color: #101c22;
      border: 1px solid rgba(255, 255, 255, 0.1);
      padding: 1.25rem;
      border-radius: .75rem;
    }

    .setting-row {
      padding: .75rem 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .setting-row:last-child {
      border-bottom: none;
    }

    .icon-box {
      width: 44px;
      height: 44px;
      border-radius: 10px;
      background-color: rgba(19, 164, 236, 0.15);
    }
  </style>
</head>

<body>

  <!-- NAVBAR -->
  <?php include_once "../include/Navbar.php"; ?>

  <div class="d-flex min-vh-100">

    <!-- SIDEBAR -->
    <?php include_once "../include/sidebar.php"; ?>

    <!-- MAIN CONTENT -->
    <main class="flex-grow-1 p-4 d-flex flex-column">

      <!-- Header -->
      <header class="navbar sticky-top px-4 py-3">
        <div class="d-flex justify-content-between align-items-center w-100">
          <!-- <span class="material-symbols-outlined me-2" style="cursor:pointer;">settings</span> -->
          <h2 class="fw-bold mb-0 text-primary">Settings</h2>
        </div>
      </header>


      <!-- ACCOUNT MANAGEMENT -->
      <div class="section-card mb-4">
        <h5 class="fw-bold mb-3 text-white">Account Management</h5>

        <div class="setting-row d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <div class="icon-box d-flex justify-content-center align-items-center">
              <span class="material-symbols-outlined text-primary">person</span>
            </div>
            <span>Edit Profile</span>
          </div>
          <span class="material-symbols-outlined text-secondary">chevron_right</span>
        </div>

        <div class="setting-row d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <div class="icon-box d-flex justify-content-center align-items-center">
              <span class="material-symbols-outlined text-primary">mail</span>
            </div>
            <span>Email Address</span>
          </div>
          <span class="material-symbols-outlined text-secondary">chevron_right</span>
        </div>

        <div class="setting-row d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <div class="icon-box d-flex justify-content-center align-items-center">
              <span class="material-symbols-outlined text-primary">lock</span>
            </div>
            <span>Change Password</span>
          </div>
          <span class="material-symbols-outlined text-secondary">chevron_right</span>
        </div>
      </div>

      <!-- PRIVACY -->
      <div class="section-card mb-4">
        <h5 class="fw-bold mb-3 text-white">Privacy & Security</h5>

        <div class="setting-row d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <div class="icon-box d-flex justify-content-center align-items-center">
              <span class="material-symbols-outlined text-primary">visibility_off</span>
            </div>
            <span>Private Account</span>
          </div>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" checked>
          </div>
        </div>

        <div class="setting-row d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <div class="icon-box d-flex justify-content-center align-items-center">
              <span class="material-symbols-outlined text-primary">shield</span>
            </div>
            <span>Two-Factor Authentication</span>
          </div>
          <span class="material-symbols-outlined text-secondary">chevron_right</span>
        </div>

        <div class="setting-row d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <div class="icon-box d-flex justify-content-center align-items-center">
              <span class="material-symbols-outlined text-primary">block</span>
            </div>
            <span>Blocked Accounts</span>
          </div>
          <span class="material-symbols-outlined text-secondary">chevron_right</span>
        </div>
      </div>

      <!-- NOTIFICATIONS -->
      <div class="section-card mb-4">
        <h5 class="fw-bold mb-3 text-white">Notifications</h5>

        <div class="setting-row d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <div class="icon-box d-flex justify-content-center align-items-center">
              <span class="material-symbols-outlined text-primary">notifications</span>
            </div>
            <span>Push Notifications</span>
          </div>
          <span class="material-symbols-outlined text-secondary">chevron_right</span>
        </div>
      </div>

      <!-- ABOUT -->
      <div class="section-card mb-4">
        <h5 class="fw-bold mb-3 text-white">About & Support</h5>

        <div class="setting-row d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <div class="icon-box d-flex justify-content-center align-items-center">
              <span class="material-symbols-outlined text-primary">help_center</span>
            </div>
            <span>Help Center</span>
          </div>
          <span class="material-symbols-outlined text-secondary">chevron_right</span>
        </div>

        <div class="setting-row d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <div class="icon-box d-flex justify-content-center align-items-center">
              <span class="material-symbols-outlined text-primary">gavel</span>
            </div>
            <span>Terms of Service</span>
          </div>
          <span class="material-symbols-outlined text-secondary">chevron_right</span>
        </div>

        <div class="setting-row d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <div class="icon-box d-flex justify-content-center align-items-center">
              <span class="material-symbols-outlined text-primary">policy</span>
            </div>
            <span>Privacy Policy</span>
          </div>
          <span class="material-symbols-outlined text-secondary">chevron_right</span>
        </div>

      </div>

      <!-- SESSION -->
      <div class="section-card mb-4">
        <h5 class="fw-bold mb-3 text-white">Session Management</h5>

        <div class="setting-row">
          <a href="../php/logout.php" class="d-flex align-items-center gap-3 text-decoration-none w-100 text-primary" style="cursor:pointer;">
            <div class="icon-box d-flex justify-content-center align-items-center">
              <span class="material-symbols-outlined">logout</span>
            </div>
            <span class="fw-semibold">Log Out</span>
          </a>
        </div>
      </div>


    </main>
  </div>

  <!-- FOOTER -->
  <footer class="text-center py-3 mt-auto">
    <?php include_once "../include/footer.php"; ?>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>