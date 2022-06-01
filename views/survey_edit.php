<!doctype html>
<html>
<head>
  <title>Survey</title>
  <?php include 'stylesheets.php'; ?>
  <?php include 'scripts.php'; ?>
  <script type="text/javascript">
    var questionHtml = <?php ob_start(); include 'survey_edit_question.php'; echo json_encode(ob_get_clean()); ?>;
    var choiceHtml = <?php ob_start(); include 'survey_edit_choice.php'; echo json_encode(ob_get_clean()); ?>;
    <?php if (empty($survey->survey_id)): ?>
      $(function()
      {
          $('#survey_name').focus();
      });
    <?php endif; ?>
  </script>
  <script type="text/javascript" src="js/survey_edit.js"></script>
</head>
<body>
  <div id="main">
    <?php include 'header.php'; ?>
    <br>
    <br>
    <br>
    <br>
    <div id="site_content">
      <div id="content">
        <?php if (isset($statusMessage)): ?>
          <p class="error"><?php echo htmlspecialchars($statusMessage); ?></p>
        <?php endif; ?>
        <?php if (! empty($survey) && $survey instanceof Survey): ?>
          <form id="survey_edit_form" action="survey_edit.php" method="post">
            <input type="hidden" id="action" name="action" value="edit_survey" />
            <input type="hidden" id="survey_id" name="survey_id" value="<?php echo htmlspecialchars($survey->survey_id); ?>" />
            <div class="input_form survey_edit">
              <h2>สร้างแบบประเมิน</h2>
              <div>
                <label>หัวข้อแบบประเมิน:</label>
                <input type="text" id="survey_name" name="survey_name" value="<?php echo htmlspecialchars($survey->survey_name); ?>" />
              </div>
              <div class="questions_container">
                <h2>คำถามแบบประเมิน</h2>
                <div class="questions">
                  <?php foreach ($survey->questions as $i => $question): ?>
                  <?php include 'survey_edit_question.php'; ?>
                  <?php endforeach; ?>
                </div>
                <div style="margin-top: 40px">
                  <button id="add_question">เพิ่มคำถาม</button>
                </div>
              </div>
              <div class="submit_button">
                <button id="delete_survey" name="delete_survey">ลบแบบประเมิน</button>
                <button id="submitButton" name="submitButton">บันทึก</button>
              </div>
            </div>
          </form>
        <?php endif; ?>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</body>
</html>
