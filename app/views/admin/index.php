
<div class="container">
    <br><br>
<ul class="list-group">
    <?php foreach( $data['nama'] as $account) :?>
  <li class="list-group-item"><?= $account['NOTELP'];?></li>
  <?php endforeach; ?>
</ul>
    </div>