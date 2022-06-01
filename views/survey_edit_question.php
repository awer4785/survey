<div class="question" data-question_id="<?php if (empty($question)) {
    echo 'QUESTION_ID';
} else {
    echo $question->getUniqueId();
} ?>" data-question_number="<?php if (isset($i)) {
    echo $i + 1;
} ?>">
  <div style="float: right">
    <button class="move_question_up">ขยับขึ้น</button>
    <button class="move_question_down">ขยับลง</button>
    <button class="delete_question">ลบคำถาม</button>
  </div>
  <h4>คำถามข้อที่ <span class="question_number"><?php if (isset($i)) {
    echo $i + 1;
} ?></span></h4>
  <div>
    <label>ประเภทตอบคำถาม:</label>
    <select class="question_type" name="question_type[<?php if (empty($question)) {
    echo 'QUESTION_ID';
} else {
    echo $question->getUniqueId();
} ?>]">
      <option value="input"<?php if (! empty($question) && $question->question_type == 'input'): ?> selected="selected"<?php endif; ?>>ข้อความ</option>
      <option value="radio"<?php if (! empty($question) && $question->question_type == 'radio'): ?> selected="selected"<?php endif; ?>>เลือกตอบ 1 ข้อ</option>
      <option value="checkbox"<?php if (! empty($question) && $question->question_type == 'checkbox'): ?> selected="selected"<?php endif; ?>>เลือกตอบได้มากกว่า 1 ข้อ</option>
      <option value="textarea"<?php if (! empty($question) && $question->question_type == 'textarea'): ?> selected="selected"<?php endif; ?>>ข้อความหลายบรรทัด</option>
    </select>
    <div class="required_container">
      <input type="checkbox" id="is_required_<?php if (empty($question)) {
    echo 'QUESTION_ID';
} else {
    echo $question->getUniqueId();
} ?>" name="is_required[<?php if (empty($question)) {
    echo 'QUESTION_ID';
} else {
    echo $question->getUniqueId();
} ?>]" value="1"<?php if (! empty($question) && $question->is_required == 1): ?> checked="checked"<?php endif; ?> />
      <label for="is_required_<?php if (empty($question)) {
    echo 'QUESTION_ID';
} else {
    echo $question->getUniqueId();
} ?>">บังคับต้องตอบข้อนี้</label>
    </div>
  </div>
  <div>
    <label>คำถาม:</label>
    <input type="text" class="question_text" name="question_text[<?php if (empty($question)) {
    echo 'QUESTION_ID';
} else {
    echo $question->getUniqueId();
} ?>]" value="<?php if (! empty($question)) {
    echo htmlspecialchars($question->question_text);
} ?>" />
  </div>
  <div class="choices_container"<?php if (empty($question) || ! in_array($question->question_type, ['radio', 'checkbox'])): ?> style="display: none"<?php endif; ?>>
    <h4>ตัวเลือก</h4>
    <div class="choices" data-question_id="<?php if (empty($question)) {
    echo 'QUESTION_ID';
} else {
    echo $question->getUniqueId();
} ?>">
      <?php if (! empty($question->choices)): ?>
      <?php foreach ($question->choices as $j => $choice): ?>
      <?php include 'survey_edit_choice.php'; ?>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <div style="margin-top: 15px">
      <button class="add_choice">เพิ่มตัวเลือก</button>
    </div>
  </div>
</div>
