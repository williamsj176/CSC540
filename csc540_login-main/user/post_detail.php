<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unlocked Capsule - TimeCap</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">

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
        .card-surface {
            background-color: #192b33;
            border: 1px solid #32556780;
        }

        .accent {
            color: #13a4ec;
        }

        .icon {
            font-family: 'Material Symbols Outlined';
            font-size: 28px;
            vertical-align: middle;
        }

        .media-box {
            background-size: cover;
            background-position: center;
            border-radius: 12px;
            height: 220px;
            position: relative;
        }

        .interaction-bar {
            background-color: #192b33;
            border-top: 1px solid #32556780;
        }

        .btn-soft {
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            backdrop-filter: blur(4px);
        }
    </style>
</head>

<body>
    <!--  Top Navbar -->
    <?php include_once "../include/Navbar.php"; ?>

    <!-- Page Container -->
    <div class="d-flex min-vh-100">
        <!-- Sidebar -->
        <?php include_once "../include/sidebar.php"; ?>
        <!-- Main Content -->
        <main class="flex-grow-1 d-flex flex-column  ">

            <!-- TOP NAV -->
            <div class="d-flex align-items-center px-3 py-3 border-bottom card-surface">
                <a href="feed.php" class="text-white">
                    <span class="material-symbols-outlined fs-3">arrow_back</span>
                </a>

                <div class="d-flex align-items-center ms-3 flex-grow-1">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBx4LQCd_23dIxj5fQVhEAQ7pYdrqByRTn_Y-btuNgYejGguz4UF0ssd0T5LMFghT2CmK7FwfZV1hMyO9Caem_L7Vi05lPVzIrehZD3QwvrjVoidP0aM3cg0Q4jN1l8pWOO3FYN-p84diWShVJN5QCqqy7FlOzQEUcRHagwnBg-0HW8NXhtmVk01gOZ8W5qgUJxg6A6bigLHhyrX8QtBjJfx-1V0e8Qd7espa94Jr6Ic8rBf8nIOw-1ZDZEytjGgAgDADu2YF7kLbE"
                        class="rounded-circle me-3" width="38" height="38">

                    <div>
                        <div class="fw-bold small">Capsule by</div>
                        <div class="text-secondary small">@Jane Doe</div>
                    </div>
                </div>

                <span class="material-symbols-outlined fs-3">more_horiz</span>
            </div>


            <!-- MAIN CONTENT -->
            <div class="container py-4">

                <!-- MEDIA PREVIEW -->
                <!-- <div class="media-box mb-4"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDLEn8ALdYsNZQ9n_-9_SGxg1FSbPeSJ_f6wJSSL0jUh9IZDAYUlzbm3a9lm5zc39Z1XEmMq5q7BZkCP4EfT_kqtvLMSk1PoLAYovlFTIDdbfUkublvgC9FnYPg4Vr_u-cCojFhnj2CmE14jRTKXRiju6s9TxaT_bA5JNTFHcGMb1KfVGYW6ibdLdN5dvG_bZ1bC-iYGqXEw-6VCinuF5OO5e0kFYoXrC_Pz8epNpU5x8UxUER_DW66NzEQK67B8ZFbADBFHyV-eI4");'>
                    <button class="btn btn-dark rounded-circle position-absolute top-50 start-50 translate-middle px-3 py-2">
                        <span class="material-symbols-outlined fs-1">play_arrow</span>
                    </button>
                </div> -->

                <!-- TITLE -->
                <h2 class="fw-bold mb-1">My First capsule</h2>
                <p class="accent small mb-3">Locked on Oct 26, 2023 • Unlocked Today</p>

                <!-- BODY -->
                <p class="text-light mb-4">
                    Here's a quick preview of the message that was just unlocked. It's exciting to finally see what was inside the capsule!
                </p>
                <div class="container d-flex justify-content-between border pt-3">

                    <button class="btn btn-soft rounded-pill d-flex align-items-center px-3 gap-2">
                        <span class="material-symbols-outlined text-danger" style="font-variation-settings:'FILL' 1;">favorite</span>
                        <span>1.2k</span>
                    </button>

                    <button class="btn btn-soft rounded-pill d-flex align-items-center px-3 gap-2">
                        <span class="material-symbols-outlined">chat_bubble_outline</span>
                        <span>24</span>
                    </button>

                </div>
            </div>




            <!-- BOTTOM INTERACTION BAR -->
            <!-- <div class="interaction-bar fixed-bottom py-2">
                
            </div> -->
        </main>
    </div>
    </div>
<footer class="text-center py-3 mt-auto">
      <?php include_once "../include/footer.php"; ?>
    </footer>
<!--  -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>