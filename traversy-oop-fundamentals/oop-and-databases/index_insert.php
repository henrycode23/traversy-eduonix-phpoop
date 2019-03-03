<?php
// PDO Database Class and Connection --- Start
require_once 'classes/Database.php';

$database = new Database;
// PDO Database Class and Connection --- End

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if($post['submit']){
  $title = $post['title'];
  $body = $post['body'];
  
  $database->query('INSERT INTO posts (title, body) VALUES (:title, :body)');
  $database->bind(':title', $title);
  $database->bind(':body', $body);
  $database->execute();
  if($database->lastInsertId()){
    echo '<p>Post Added!</p>';
  }
}

$database->query('SELECT * FROM posts');
$rows = $database->resultset();
?>
<h1>Add Post</h1>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
  <label for="title">Post Title</label><br>
  <input type="text" name="title" placeholder="Add a Title..."><br><br>
  <label for="body">Post Body</label><br>
  <textarea name="body"></textarea><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<h1>Posts</h1>
<div>
<?php foreach($rows as $row) : ?>
  <div>
    <h3><?php echo $row['title']; ?></h3>
    <p><?php echo $row['body']; ?></p>
  </div>
<?php endforeach; ?>
</div>

<!-- 
$database->query('SELECT * FROM posts WHERE id = :id');
$database->bind(':id', 2);
$rows = $database->resultset();
print_r($rows);
 -->