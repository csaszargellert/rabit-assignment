<?php include(__DIR__.'/../header.php') ?>
  <section>
    <ul class="data">
      <li class="item item--header">
          <span>
            name:
          </span>
           <span class="italic">
            advertisement
          </span>
        </li>
      <?php foreach ($this->advertisements as $ad) : ?>
        <li class="item">
          <span>
            <?= $ad['name'] ?>:
          </span>
           <span class="italic">
            <?= $ad['title'] ?>
          </span>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

<?php include(__DIR__.'/../footer.php') ?> 