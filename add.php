<?php
$bird = $_POST['bird'];

// Write the animal to a file
$result = file_put_contents('birds.txt', $bird."\n", FILE_APPEND);

header('Location: index.php');
?>