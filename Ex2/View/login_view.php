<?php
$page_title = 'Login page';

// Якщо запис у користувача про сесію вже є, тоді пропонуємо йому розлогінитися.
// Тобто вийти з сайту.
if (!empty($_SESSION['login'])) {
  print 'Ви вже залоговані на сайті.';
  print '<a href="/user/logout">Вийти</a>';
}

// Якщо користувач відправляє форму, тоді аналізуємо дані з POST.
if (!empty($_POST['name']) && !empty($_POST['pass'])) {

  // Якщо доступи вірні, тоді робимо відповідний запис у сесії.
  if ($_POST['name'] == $data['name'] && md5($_POST['pass']) == $data['pass']) {
    $_SESSION['login'] = TRUE;
    // Направляємо користувача на головну сторінку.
    header('Location: /');
  }else {
    echo "<h5>Пароль або Логін невірні!!!</h5>";
  }

}
?>

<!-- Якщо користувач немає запису у сесії, тоді виводимо йому форму. -->
<?php if(empty($_SESSION['login'])): ?>
  <form action="/user/login" method="POST" class="form-inline">
    <div class="form-group">
      <label for="name">Логін: </label>
      <input type="text" name="name" class="form-control" id="name" required>
    </div>

    <div class="form-group">
      <label for="name">Пароль: </label>
      <input type="password" name="pass" class="form-control">
    </div>
    <input type="submit" class="btn btn-default" name="submit" value="Відправити">
  </form>
<?php endif; ?>

