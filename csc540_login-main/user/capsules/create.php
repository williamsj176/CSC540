<!-- <?php
// require("../../include/session_helper.php");
// require("../../include/db_connection.php");

// if (!isset($_SESSION['user_id'])) {
//     die("Not authenticated.");
// }

// if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
//     die("Invalid request.");
// }

// $user = (int)$_SESSION['user_id'];
// $title = trim($_POST['title'] ?? '');
// $message = trim($_POST['message'] ?? '');
// $tags = trim($_POST['tags'] ?? '');
// $date = trim($_POST['unlock_date'] ?? '');
// $time = trim($_POST['unlock_time'] ?? '');
// $unlock_datetime = null;
// $media_path = null;

// // Basic validation
// if ($title === '' || $message === '' || $date === '' || $time === '') {
//     die("Missing required fields.");
// }

// // Validate/format datetime (expects YYYY-MM-DD and HH:MM or HH:MM:SS)
// $dt = date_create_from_format('Y-m-d H:i', $date . ' ' . $time) ?: date_create_from_format('Y-m-d H:i:s', $date . ' ' . $time);
// if ($dt === false) {
//     die("Invalid date/time format.");
// }
// $unlock_datetime = $dt->format('Y-m-d H:i:s');

// // Handle file upload (optional) with checks
// if (!empty($_FILES['media']['name']) && is_uploaded_file($_FILES['media']['tmp_name'])) {
//     $maxSize = 5 * 1024 * 1024; // 5 MB
//     if ($_FILES['media']['size'] > $maxSize) {
//         die("Uploaded file is too large.");
//     }

//     // Validate MIME using finfo
//     $finfo = new finfo(FILEINFO_MIME_TYPE);
//     $mime = $finfo->file($_FILES['media']['tmp_name']);
//     $allowed = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/gif' => 'gif', 'video/mp4' => 'mp4'];
//     if (!isset($allowed[$mime])) {
//         die("Unsupported file type.");
//     }

//     // safe filename
//     $ext = $allowed[$mime];
//     $upload_dir = __DIR__ . "/../../uploads/";
//     if (!is_dir($upload_dir)) {
//         mkdir($upload_dir, 0777, true);
//     }

//     $file_name = time() . "_" . bin2hex(random_bytes(6)) . "." . $ext;
//     $target_path = $upload_dir . $file_name;

//     if (!move_uploaded_file($_FILES['media']['tmp_name'], $target_path)) {
//         die("Failed to move uploaded file.");
//     }

//     // store relative path used by your app
//     $media_path = "uploads/" . $file_name;
// }

// // Insert including media_path column
// $stmt = $db_connection->prepare(
//     "INSERT INTO CapsulesTESTING (user_id, title, message, tags, unlock_date, media_path, status)
//      VALUES (?, ?, ?, ?, ?, ?, 'locked')"
// );
// if (!$stmt) {
//     die("Prepare failed: " . $db_connection->error);
// }

// // types: i (user_id) + 5 strings
// $stmt->bind_param("isssss", $user, $title, $message, $tags, $unlock_datetime, $media_path);

// if ($stmt->execute()) {
//     $stmt->close();
//     $db_connection->close();
//     header("Location: ../dashboard.php");
//     exit();
// } else {
//     $err = $stmt->error;
//     $stmt->close();
//     $db_connection->close();
//     die("Database Error: " . $err);
// }
?> -->
