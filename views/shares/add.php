<div class="card">
  <div class="card-header">
    <h3 class="card-title">Share Something</h3>
  </div>
  <div class="card-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label for="title">Share Title</label>
        <input type="text" name="title" class="form-control">
      </div>
      <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" class="form-control" cols="30" rows="10"></textarea>
      </div>
      <div class="form-group">
        <label for="link">Link</label>
        <input type="text" name="link" class="form-control">
      </div>
      <input type="submit" name="submit" class="btn btn-primary" value="Submit">
      <a href="<?php echo ROOT_PATH; ?>shares" class="btn btn-danger">Cancel</a>
    </form>
  </div>
</div>