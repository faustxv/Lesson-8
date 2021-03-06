<!-- Вітальне повідомленя на головній сторінці. -->
<h1> Welcome to blog site!</h1>
<!-- Виводимо статті у тегах -->
<div class="articles-list">

  <?php if (empty($data)): ?>
    <!-- У випадку, якщо статтей немає - виводимо повідомлення. -->
    Статті відсутні.
  <?php endif; ?>
  <?php foreach ($data as $article): ?>
    <div class="article-item">

      <h2><a href="/article/index/?id=<?php print $article['id']; ?>"><?php print $article['title']; ?></a></h2>

      <div class="description">
        <?php print $article['short_desc']; ?>
      </div>

      <div class="info">
        <div class="timestamp">
          <!-- Вивід відформатованої дати створення. -->
          <?php print date('d/m/Y G:i', $article['timestamp']); ?>
        </div>
        <div class="links">
          <a href="/article/index/?id=<?php print $article['id']; ?>">Читати далі</a>
          <!-- Посилання доступні тільки для редактора. -->
          <?php if($editor): ?>
            <a href="/article/edit/?id=<?php print $article['id']; ?>">Редагувати</a>
            <a href="/article/delete/?id=<?php print $article['id']; ?>">Видалити</a>
          <?php endif; ?>
        </div>
      </div>

    </div>
    <hr>
  <?php endforeach; ?>

  <div class="pager">
    <!-- Пейджер на розробці. -->
    Pager this!
  </div>

</div>