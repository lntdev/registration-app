<!DOCTYPE html>
<html>
<head>
  <title>Registration Submitted</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Registration Successful</h2>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
    <p><strong>Phone:</strong> <?php echo htmlspecialchars($_POST['phone']); ?></p>
    <p><strong>Gender:</strong> <?php echo htmlspecialchars($_POST['gender']); ?></p>
    <p><strong>Message:</strong> <?php echo nl2br(htmlspecialchars($_POST['message'])); ?></p>
  </div>
</body>
</html>
