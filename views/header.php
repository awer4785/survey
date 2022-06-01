<div id="header">
  <div id="logo">
  <div id="logo_text"> <CENTER>
      <h1><a href="index.php"><span class="logo_colour"><img src="PSU.png" width= "100" height="140"></span></a></h1></CENTER>
      <CENTER id="psu"> Prince of Songkla University </CENTER>
      <link rel="icon" href="b.ico" type="image/x-icon">
      <link rel="shortcut icon" href="b.ico" type="image/x-icon">
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <div id="menubar">
    <ul id="menu">
      <?php if (! empty($user) && $user instanceof Login): ?>
      <li<?php if (in_array(basename($_SERVER['SCRIPT_NAME']), ['index.php'])) {
    echo ' class="selected"';
} ?>>
        <a href="index.php">Home</a>
      </li>
      <li<?php if (in_array(basename($_SERVER['SCRIPT_NAME']), ['user_edit.php', 'users.php'])) {
    echo ' class="selected"';
} ?>>
        <a href="users.php">ผู้ใช้</a>
      </li>
      <li<?php if (in_array(basename($_SERVER['SCRIPT_NAME']), ['survey_edit.php', 'surveys.php'])) {
    echo ' class="selected"';
} ?>>
        <a href="surveys.php">แบบประเมิน</a>
      </li>
      <li>
        <a href="logout.php">ออกจากระบบ</a>
      </li>
      <?php else: ?>
      <li>
        <a href="login.php">เข้าสู่ระบบ</a>
      </li>
      <?php endif; ?>
    </ul>
  </div>
</div>
