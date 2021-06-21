<?php
// define variables and set to empty values
$firstname = $email = $address= $town= $postcode= $lastname= $phone= $address2= $county= $country = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $email = test_input($_POST["email"]);
  $address = test_input($_POST["address"]);
  $town = test_input($_POST["town"]);
  $postcode = test_input($_POST["postcode"]);
  $lastname = test_input($_POST["lastname"]);
  $phone = test_input($_POST["phone"]);
  $address2 = test_input($_POST["address2"]);
  $county = test_input($_POST["county"]);
  $country = test_input($_POST["country"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
?>