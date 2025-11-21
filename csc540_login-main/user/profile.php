<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Edit Profile - TimeCap</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
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
        }

        [data-bs-theme="dark"] body {
            background-color: var(--background-dark);
            color: var(--text-light);
        }

        .tc-card {
            background-color: #192b33;
            border: 1px solid #325567;
            border-radius: 1rem;
            padding: 1.5rem;
        }

        .form-control,
        .form-control:focus,
        textarea {
            background-color: #192b33;
            border: 1px solid #325567;
            color: white;
        }

        .form-control:focus {
            border-color: #13a4ec;
            box-shadow: 0 0 0 0.2rem rgba(19, 164, 236, 0.25);
        }

        .btn-primary:hover {
            background-color: #0e8ecf;
        }

        .profile-img {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #325567;
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
            <header class="navbar sticky-top px-4 py-3">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <h2 class="fw-bold mb-0 text-primary"> Edit Profile</h2>
                </div>
            </header>


            <!-- Card Wrapper -->
            <div class="tc-card mx-auto" style="max-width: 700px;">

                <!-- Profile Header -->
                <div class="d-flex align-items-center gap-4 mb-4">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAhoO3Kn5s8uuPQSl0sdMUer7ggJOvCdb9BFND9ObG_d3uiWQcp_7sKRHGXVLXZRzvx7PMAKihbAr_R5BV_pvawClBLQNrmRyir4go_liiflkL4iz9lM71SbTaT6i9JYT5K3bdCgcHw4W6PD7MFlkiFZW_8I_5b6sn-TlMSR4SP0lMm5xXzjFsRjRCfTCfML_87kZsiyEaPQehKMfAmz9teB6fZ5E_7_9OEQyJ403APiD4_Wmo2xfc-zGBtjdc0OKvcDlKhjWWf3aI"
                        class="profile-img shadow"
                        id="profilePhoto"
                        style="cursor:pointer;"
                        data-bs-toggle="modal"
                        data-bs-target="#profilePhotoModal">
                    <!-- Profile zoom -->
                    <div class="modal fade" id="profilePhotoModal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content bg-transparent border-0 shadow-none">
                                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAhoO3Kn5s8uuPQSl0sdMUer7ggJOvCdb9BFND9ObG_d3uiWQcp_7sKRHGXVLXZRzvx7PMAKihbAr_R5BV_pvawClBLQNrmRyir4go_liiflkL4iz9lM71SbTaT6i9JYT5K3bdCgcHw4W6PD7MFlkiFZW_8I_5b6sn-TlMSR4SP0lMm5xXzjFsRjRCfTCfML_87kZsiyEaPQehKMfAmz9teB6fZ5E_7_9OEQyJ403APiD4_Wmo2xfc-zGBtjdc0OKvcDlKhjWWf3aI"
                                    id="modalProfilePhoto"
                                    class="img-fluid rounded-3 shadow-lg"
                                    alt="Profile Photo">
                            </div>
                        </div>
                    </div>


                    <div>
                        <h4 class="fw-bold mb-1">Alex Doe</h4>
                        <p class="text-secondary mb-2">@alex_doe</p>
                        <label class="text-primary small text-decoration-underline" style="cursor:pointer;">
                            Change Profile Photo
                            <input type="file" name="profile_pic" accept="image/*" class="d-none" id="profilePicInput">
                        </label>
                    </div>
                </div>

                <form>

                    <!-- Name -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Name</label>
                        <input type="text" class="form-control" value="Alex Doe">
                    </div>

                    <!-- Username -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Username</label>
                        <input type="text" class="form-control" value="@alex_doe">
                    </div>

                    <!-- Bio -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold d-flex justify-content-between">
                            <span>Bio</span>
                            <span class="text-secondary small">32 / 150</span>
                        </label>
                        <textarea class="form-control" rows="4">UX/UI Designer crafting moments.</textarea>
                    </div>

                    <!-- Divider -->
                    <hr class="border-secondary mb-4">

                    <!-- Privacy Link -->
                    <div class="mb-4">
                        <a href="#" class="text-primary fw-semibold text-decoration-underline">
                            Manage Privacy & Security Settings
                        </a>
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-end gap-3 mt-3">
                        <button type="button" class="btn btn-outline-light px-4">Cancel</button>
                        <button type="submit" class="btn btn-primary px-5">Save Changes</button>
                    </div>

                </form>

            </div>
        </main>
    </div>
    <footer class="text-center py-3 mt-auto">
        <?php include_once "../include/footer.php"; ?>
    </footer>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        document.getElementById("profilePicInput").addEventListener("change", function() {
            const file = this.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = function(e) {
                // Update preview in the UI
                document.getElementById("profilePhoto").src = e.target.result;
                document.getElementById("modalProfilePhoto").src = e.target.result;
            };
            reader.readAsDataURL(file);
        });
    </script>
</body>

</html>