<h2>Add a Row</h2>
<div class="content-full">
    <div class="container">
    <form method="post" class="newUserForm">
    	<label for="name">Name</label><input type="text" name="name" id="name">
    	<label for="address">Address</label><input type="text" name="address" id="address">
    	<label for="zipcode">Zipcode</label><input type="text" name="zipcode" id="zipcode">
    	<label for="city">City</label><input type="text" name="city" id="city">
        <label for="country">Country</label><input type="text" name="country" id="country">
        <label for="phone">Phone</label><input type="text" name="phone" id="phone">
        <label for="remarks">Remarks</label><input type="text" name="remarks" id="remarks">
        <input type="submit" name="submit" value="Submit">
    </form>
    <a href="index.php">Back</a>
</div>
</div>

<?php
if (isset($_POST['submit'])) {
    require "config.php";
  
    try {
      $connection = new PDO($dsn, $username, $password, $options);
      $new_dealer = array(
        "name" => $_POST['name'],
        "address"  => $_POST['address'],
        "zipcode"     => $_POST['zipcode'],
        "city"       => $_POST['city'],
        "country"  => $_POST['country'],
        "phone"  => $_POST['phone'],
        "remarks"  => $_POST['remarks']
      );

      $sql = sprintf(
        "INSERT INTO %s (%s) values (%s)",
        "dealers",
        implode(", ", array_keys($new_dealer)),
        ":" . implode(", :", array_keys($new_dealer))
    );
    
    $statement = $connection->prepare($sql);
    $statement->execute($new_dealer);
  
    } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
    }
  
  }

?>