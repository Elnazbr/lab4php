<?php
$db = mysqli_connect(
  'localhost',
  'root',
  '',
  'kit'
);

function articles_new($db, $kitten, $name, $email)
{
  $t="INSERT INTO kittens (kitten, name, email) VALUES ('$kitten', '$name','$email')";
  $result=mysqli_query($db, $t);
  if (!$result)
  {
    die(mysqli_error($db));
  }
}
articles_new($db, $_POST['kitten'], $_POST['name'], $_POST['email'] );
header("Location: "."kontakts.html");
?>
