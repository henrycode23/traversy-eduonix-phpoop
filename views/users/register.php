<div class="card">
  <div class="card-header">
    <h3 class="card-title">Register Name</h3>
  </div>
  <div class="card-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
      </div>
      <input type="submit" name="submit" class="btn btn-primary" value="Register">
    </form>
  </div>
</div>