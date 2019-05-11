<?php include 'header.php'; ?>
<header>
    <div class="container"><h1><span class="myName"></span></h1></div>
  </header>
<div class="content-full">
    <div class="container addForm">
    <h2>Voeg een dealer toe</h2>
    <form method="post" class="newUserForm">
      <ul>
        <li><label for="name">Name</label><input type="text" name="name" id="name" required></li>
        <li><label for="address">Address</label><input type="text" name="address" id="address" required></li>
        <li><label for="zipcode">Zipcode</label><input type="text" name="zipcode" id="zipcode" required></li>
        <li><label for="city">City</label><input type="text" name="city" id="city" required></li>
        <li><label for="country">Country</label><input type="text" name="country" id="country" required></li>
        <li><label for="phone">Phone</label><input type="text" name="phone" id="phone" required></li>
        <li><label for="remarks">Remarks</label><input type="text" name="remarks" id="remarks" required></li>
        </ul>
        <button type="submit" name="submit" value="Submit" class="button"><span>Toevoegen</span></button>
      </form>
    <a href="index.php">Terug (voor  nu)</a>
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
      if($new_dealer.name !='' or $new_dealer.address !='' or $new_dealer.zipcode !='' or $new_dealer.city !='' or $new_dealer.country !='' or $new_dealer.phone !='' or $new_dealer.remarks !=''){
      header("Location:http://localhost/Github/muntzTest/app/index.php");
      }
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
<?php include 'footer.php'; ?>