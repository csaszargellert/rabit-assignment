<?php include(__DIR__.'/../header.php') ?>
  <section>
    <ul class="data">
      <li class="item item--header"><span>Name</span></li>
      <?php foreach ($this->users as $user) : ?>
        <li class="item"><span><?= $user['name'] ?></span></li>
      <?php endforeach; ?>
    </ul>
  </section>
<?php include(__DIR__.'/../footer.php') ?>