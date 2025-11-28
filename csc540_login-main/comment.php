<?php
// comment.php – full comment system 
require_once 'db_connect.php';  // ← change this if your team uses a different name (like config.php or db.php)
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$post_id = (int)($_GET['post_id'] ?? 0);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = trim($_POST['content'] ?? '');
    if ($content !== '' && strlen($content) <= 1000) {
        $content = htmlspecialchars($content, ENT_QUOTES);
        $stmt = $pdo->prepare("INSERT INTO comments (post_id, user_id, username, content) VALUES (?, ?, ?, ?)");
        $stmt->execute([$post_id, $_SESSION['user_id'], $_SESSION['username'], $content]);
        header("Location: comment.php?post_id=$post_id");
        exit();
    } else {
        $error = "Comment cannot be empty or too long.";
    }
}

// Load comments
$stmt = $pdo->prepare("SELECT * FROM comments WHERE post_id = ? ORDER BY created_at DESC");
$stmt->execute([$post_id]);
$comments = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Comments</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h2>Comments</h2>

    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

    <form method="post">
        <textarea name="content" placeholder="Write your comment..." required style="width:100%;height:80px;"></textarea><br>
        <button type="submit">Post Comment</button>
    </form>

    <hr>

    <?php foreach ($comments as $c): ?>
        <div style="border:1px solid #ddd; margin:10px 0; padding:10px;">
            <strong><?= htmlspecialchars($c['username']) ?></strong>
            <small><?= $c['created_at'] ?></small><br>
            <?= nl2br(htmlspecialchars($c['content'])) ?>
        </div>
    <?php endforeach; ?>

    <p><a href="feed.php">← Back to feed</a></p>
</body>
</html>
