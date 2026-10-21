<?php
$title = 'Contact'; $msg = ''; $ok = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $n = trim($_POST['name'] ?? ''); $e = trim($_POST['email'] ?? ''); $m = trim($_POST['message'] ?? '');
  if ($n && filter_var($e, FILTER_VALIDATE_EMAIL) && $m) { $ok = true; $msg = "Thanks, $n! We'll get back to you soon."; }
  else $msg = 'Please fill in all fields with a valid email.';
}
include 'includes/header.php';
?>
<main><h2>Contact Us</h2>
<form id="contactForm" method="post"><input name="name" placeholder="Your name"><input name="email" type="email" placeholder="Email"><textarea name="message" rows="4" placeholder="Message"></textarea><button class="btn" type="submit">Send</button>
<p class="msg <?= $ok ? 'ok' : 'err' ?>" id="msg"><?= htmlspecialchars($msg) ?></p></form></main>
<script src="assets/contact.js"></script>
<?php include 'includes/footer.php'; ?>
