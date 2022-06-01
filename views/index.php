<!doctype html>
<html>
<head>
  <title>PSU Survey</title>
  <?php include 'stylesheets.php'; ?>
  <?php include 'scripts.php'; ?>
<link rel="icon" href="b.ico" type="image/x-icon">
<link rel="shortcut icon" href="b.ico" type="image/x-icon">
</head>
<body>
  <div id="main">
    <?php include 'header.php'; ?>
    <br>
    <br>
    <br>
    <br>
    <div id="site_content">
      <h1>ยินดีต้อนรับ <?php echo $user->first_name, ' ', $user->last_name; ?></h1>
      <div id="content">
        <p></p>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</body>
</html>
