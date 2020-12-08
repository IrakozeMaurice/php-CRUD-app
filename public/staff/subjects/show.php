<?php require_once('../../../private/initialize.php'); ?>

<?php

// $id = isset($_GET['id']) ? $_GET['id'] : '1';   //PHP - < 7
$id = $_GET['id'] ?? '1';   //PHP > 7
echo "id: " . h($id);

?>

<a href="show.php?name=<?php echo u_enc('John Doe'); ?>">Link</a><br>
<a href="show.php?company=<?php echo u_enc('Widgets&More'); ?>">Link</a><br>
<a href="show.php?query=<?php echo u_enc('!#*?'); ?>">Link</a><br>
