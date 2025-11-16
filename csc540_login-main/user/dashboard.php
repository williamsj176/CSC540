<?php
//======================================================================
// DASHBOARD PAGE
//======================================================================
/* Quick Paths */
include_once(realpath(dirname(__FILE__) . '/php/path.php'));

/* Page Name */
$page_name = "dashboard";

/* Start The Session */
//
// if (!isset($_SESSION['login_user'])) {
//   header("Location: http://localhost/csc540_login-main/index.php");
//   exit();

include_once "../php/session.php";
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Time Capsules - TimeCap</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet" />

  <!-- Material Symbols -->
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
      background-color: var(--background-light);
      color: var(--text-dark);
      min-height: 100vh;
    }

    [data-bs-theme="dark"] body {
      background-color: var(--background-dark);
      color: var(--text-light);
    }

    .navbar {
      background-color: rgba(16, 28, 34, 0.8);
      backdrop-filter: blur(8px);
    }

    .btn-primary {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
    }

    .btn-primary:hover {
      background-color: #0e8ecf;
      border-color: #0e8ecf;
    }

    .card .capsule-card {
      background-color: rgba(255, 255, 255, 0.1);
      border: none;
      border-radius: 1rem;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .material-symbols-outlined {
      vertical-align: middle;
    }

    .tab-nav a {
      font-weight: 700;
      border-bottom: 3px solid transparent;
      color: rgba(255, 255, 255, 0.7);
      padding: 0.75rem 0;
      display: inline-block;
      margin-right: 2rem;
      text-decoration: none;
    }

    .tab-nav a.active {
      border-color: var(--primary-color);
      color: var(--primary-color);
    }
            .profile-card {
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 1rem;
            padding: 1.5rem;
        }

        .stat-card {
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 0.75rem;
            padding: 1rem;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
  </style>
</head>

<body>
  <!-- Top Navbar -->
  <?php include_once "../include/Navbar.php"; ?>
  <div class="d-flex min-vh-100">
    <!-- Sidebar -->
    <?php include_once "../include/sidebar.php"; ?>

    <!-- Main -->
    <main class="flex-grow-1 d-flex flex-column">


      <!-- Profile Top -->
      <div class="text-center mb-4">
        <div class="position-relative mx-auto" style="width: 130px;z-index: 3;">
          <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAhoO3Kn5s8uuPQSl0sdMUer7ggJOvCdb9BFND9ObG_d3uiWQcp_7sKRHGXVLXZRzvx7PMAKihbAr_R5BV_pvawClBLQNrmRyir4go_liiflkL4iz9lM71SbTaT6i9JYT5K3bdCgcHw4W6PD7MFlkiFZW_8I_5b6sn-TlMSR4SP0lMm5xXzjFsRjRCfTCfML_87kZsiyEaPQehKMfAmz9teB6fZ5E_7_9OEQyJ403APiD4_Wmo2xfc-zGBtjdc0OKvcDlKhjWWf3aI"
            class="rounded-circle w-100 shadow-sm" alt="avatar">
          <label class="btn btn-primary position-absolute bottom-0 end-0 rounded-circle p-1"
                        style="width: 36px; height: 36px;">
                        <span class="material-symbols-outlined">edit</span>
                        <input type="file" name="profile_pic" accept="image/*" class="d-none" id="profilePicInput">
      </label>
        </div>

        <h3 class="fw-bold mt-3">Alex Doe</h3>
        <p class="text-secondary">@alex_doe </p>
        <p class="text-secondary small">
          Time traveling through memories. Sealing moments for the future.
        </p>
        <a href="profile.php" class="btn"> 
        <button class="btn btn-secondary fw-bold px-4 mt-2">Edit Profile</button></a>
      </div>

      <!-- Stats -->
      <div class="row g-3 mb-4">
        <div class="col-md stat-card">
          <h3 class="fw-bold">12</h3>
          <p class="text-secondary mb-0">Capsules</p>
        </div>
        <div class="col-md stat-card">
          <h3 class="fw-bold">1.2k</h3>
          <p class="text-secondary mb-0">Followers</p>
        </div>
        <div class="col-md stat-card">
          <h3 class="fw-bold">256</h3>
          <p class="text-secondary mb-0">Following</p>
        </div>
      </div>
      <header class="navbar sticky-top px-4 py-3">
        <div class="d-flex justify-content-between align-items-center w-100">
          <h2 class="fw-bold mb-0 text-primary">My Time Capsules</h2>
          <button onclick="location.href='create_post.php'" class="btn btn-primary d-flex align-items-center gap-2 rounded-pill">
            <span class="material-symbols-outlined">add</span> Create New
          </button>
        </div>
      </header>

      <!-- Tabs -->
      <div class="px-4 border-bottom border-secondary tab-nav mt-3">
        <a href="#" class="active">Locked</a>
        <a href="#">Unlocked</a>
      </div>

      <!-- Controls -->
      <!-- <div class="p-4 d-flex flex-column flex-sm-row gap-3 align-items-start align-items-sm-center">
          <div class="input-group w-auto">
            <span class="input-group-text bg-dark border-0 text-white">
              <span class="material-symbols-outlined">search</span>
            </span>
            <input type="text" class="form-control bg-dark border-0 text-white" placeholder="Search by title..." />
          </div>
          <div class="d-flex gap-2">
            <button class="btn btn-dark d-flex align-items-center gap-1 border">
              Sort by: Unlock Date <span class="material-symbols-outlined">keyboard_arrow_down</span>
            </button>
            <button class="btn btn-dark d-flex align-items-center gap-1 border">
              Sort by: Creation Date <span class="material-symbols-outlined">keyboard_arrow_down</span>
            </button>
          </div>
        </div> -->

      <!-- Capsule Cards -->
      <div class="container-fluid p-4">
        <div class="row g-4">
          <!-- Card 1 -->
          <div class="col-md-6 col-xl-3">
            <div class="capsule-card">
              <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAvGM9LhPpC44cP3iYuSnrt2PxMpuc5Ihals9FP-sxBhWHiLi69-3VJoVVYYH6dTGEmwU2ZP21eAG4HkNQgsSOQ9bBNSoz4gftrjk8fXYTAUCJCFkf7aJsKbBcCKYuEONjef5iX8MQggXA73Nns2yn6J_1zdeN7pykXcGHzAjPLzXhbSedlAwD7asvhP70eYF27jRZuzLQW3uBPCC0ShFbYP3nDbK7uCLkHFjnxtTAVeIg1ya3zSUBYAWLyGqdqdnUuaobwfyD91z4" class="img-fluid rounded-top" alt="mountains" />
              <div class="p-3">
                <h5 class="fw-bold">Trip to the Mountains</h5>
                <div class="d-flex align-items-center text-primary mb-2">
                  <span class="material-symbols-outlined me-1">lock_clock</span>
                  <small>Unlocks in 125d 4h 15m</small>
                </div>
                <div class="text-secondary small">
                  <span class="material-symbols-outlined me-1 small">visibility</span>
                  Public · Created: Aug 23, 2023
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <button class="btn btn-link text-primary p-0 d-flex align-items-center gap-1">
                    <span class="material-symbols-outlined">favorite</span> 320
                  </button>
                  <a href="post_detail.php" class="btn"> 
                  <button class="btn btn-primary rounded-pill px-4">View</button></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </main>
  </div>
  <footer class="text-center py-3 mt-auto">
    <?php include_once "../include/footer.php"; ?>
  </footer>
  <!-- Bootstrap JS -->
  <script 
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
  
</script>
</body>

</html>