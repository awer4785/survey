<!doctype html>
<html>
<head>
  <title>Thank You</title>
  <?php include 'stylesheets.php'; ?>
  <?php include 'scripts.php'; ?>
</head>
<body>
  <div id="main">
    <?php $title = htmlspecialchars($survey->survey_name); ?>
    <?php $subtitle = 'Survey Response Submitted'; ?>
    <?php include 'public_header.php'; ?>
    <div id="site_content">
      <h1>ขอขอบคุณที่ทำแบบประเมิน!</h1>
      <div id="content">
        <p>ขอขอบคุณที่สละเวลาตอบแบบสอบถาม ความคิดเห็นของคุณมีค่ามากสำหรับเรา</p>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</body>
</html>
