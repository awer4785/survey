<!doctype html>
<html>
<head>
  <title>Users</title>
  <?php include 'stylesheets.php'; ?>
  <?php include 'scripts.php'; ?>
  <script type="text/javascript">
    var loginFields = <?php echo json_encode($loginFields); ?>;
  </script>
  <script type="text/javascript" src="js/users.js"></script>
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
      <h1>ผู้ใช้</h1>
      <div id="content">
        <table class="grid">
          <tr>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>E-mail</th>
            <th>แก้ไข</th>
          </tr>
          <?php if (empty($users)): ?>
            <tr>
              <td colspan="4"><em>ไม่มีผู้ใช้</em></td>
            </tr>
          <?php endif; ?>
          <?php foreach ($users as $user): ?>
            <tr>
              <td><?php echo htmlspecialchars($user->first_name); ?></td>
              <td><?php echo htmlspecialchars($user->last_name); ?></td>
              <td><?php echo htmlspecialchars($user->email); ?></td>
              <td><button data-login_id="<?php echo htmlspecialchars($user->login_id); ?>" class="edit_user">แก้ไขผูใช้</button></td>
            </tr>
          <?php endforeach; ?>
        </table>
        <button id="add_user_button">เพิ่มผู้ใช้</button>
        <div id="user_edit_dialog" title="Add User" style="display: none">
          <form id="user_edit_form" action="user_edit.php" method="post">
            <input type="hidden" id="action" name="action" value="edit_user" />
            <input type="hidden" id="login_id" name="login_id" value="" />
            <div class="input_form">
              <div>
                <label>ชื่อ:</label>
                <input type="text" id="first_name" name="first_name" spellcheck="false" value="" />
              </div>
              <div>
                <label>นามสกุล:</label>
                <input type="text" id="last_name" name="last_name" spellcheck="false" value="" />
              </div>
              <div>
                <label>E-mail address:</label>
                <input type="text" id="email" name="email" spellcheck="false" value="" />
              </div>
              <div>
                <label>Password:</label>
                <input type="password" id="password" name="password" value="" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</body>
</html>
