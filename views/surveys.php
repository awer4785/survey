<!doctype html>
<html>
<head>
  <title>Surveys</title>
  <?php include 'stylesheets.php'; ?>
  <?php include 'scripts.php'; ?>
  <script type="text/javascript">
    $(function()
    {
        $('#add_survey_button').button();
        $('.edit_survey').button();
        $('.take_survey').button();
        $('.view_charts').button();
    });
  </script>
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
      <?php if (isset($statusMessage)): ?>
        <p class="error"><?php echo htmlspecialchars($statusMessage); ?></p>
      <?php endif; ?>
      <h1>แบบประเมิน</h1>
      <div id="content">
        <table class="grid">
          <tr>
            <th>ชื่อแบบประเมิน</th>
            <th>แก้ไข</th>
            <th>ทำแบบประเมิน</th>
            <th>ดูรายงาน</th>
            <th>ดูรายงานแผนภูมิ</th>
          </tr>
          <?php if (empty($surveys)): ?>
            <tr>
              <td colspan="5"><em>ไมมีแบบประเมิน</em></td>
            </tr>
          <?php endif; ?>
          <?php foreach ($surveys as $survey): ?>
            <tr>
              <td><?php echo htmlspecialchars($survey->survey_name); ?></td>
              <td><a class="edit_survey" href="survey_edit.php?survey_id=<?php echo htmlspecialchars($survey->survey_id); ?>">แก้ไขแบบประเมิน</a></td>
              <td><a class="take_survey" href="survey_form.php?survey_id=<?php echo htmlspecialchars($survey->survey_id); ?>" target="_blank">เข้าทำแบบประเมิน</a></td>
              <td><a class="take_survey" href="survey_results.php?survey_id=<?php echo htmlspecialchars($survey->survey_id); ?>">ดูรายงาน</a></td>
              <td><a class="view_charts" href="survey_charts.php?survey_id=<?php echo htmlspecialchars($survey->survey_id); ?>">ดูรายงานแผนภูมิ</a></td>
            </tr>
          <?php endforeach; ?>
        </table>
        <a id="add_survey_button" href="survey_edit.php">สร้างแบบประเมิน</a>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</body>
</html>
