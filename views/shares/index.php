<div class="container">
<?php if(isset($_SESSION['is_logged_in'])) : ?>
  <a href="<?php echo ROOT_PATH; ?>shares/add" class="btn btn-success btn-share mb-5">Share something</a>
<?php endif; ?>
  <?php foreach($viewmodel as $item) : ?>
    <div class="card bg-light mb-3 p-3">
      <div class="card-body">
        <h3 class="card-title"><?php echo $item['title']; ?></h3>
        <small><?php echo $item['create_date']; ?></small>
        <hr>
        <p class="card-text"><?php echo $item['body']; ?></p>
        <br>
        <a href="<?php echo $item['link']; ?>" target="_blank" class="btn btn-outline-success" role="button">Go to website</a>
      </div>
    </div>
  <?php endforeach; ?>
</div>