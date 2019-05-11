<!DOCTYPE html>
<html>
  <?php include 'header.php'; ?>
  <body>
    <header>
    	<div class="container"><h1><span class="myName"></span></h1></div>
    </header>
    <div class="content-full">
      <div class="container">
        <div class="topWrapper">
        <h2>Dealers</h2> 
        <a href="new.php">+ New</a>
        </div>
        <div class="dealerTable">
          <div class='tableRow'><div class='headerRow'><div>Name</div><div>Adress</div><div>Zipcode</div><div>City</div><div>Country</div><div>Phone</div><div>Remarks</div><div></div></div>
            <?php
            include 'db.php';
              $sql = "SELECT name, address, zipcode, city, country, phone, remarks FROM dealers";
              $result = $conn->query($sql);
              
              for($i = 0; $i <= 20; $i++) {
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      echo "<div class='headerRow'><div>". $row["name"]."</div><div>". $row["address"]."</div><div>". $row["zipcode"]."</div><div>". $row["city"]."</div><div>". $row["country"]."</div><div>". $row["phone"]."</div><div>". $row["remarks"]."</div><div><div class='iconWrapper'>
                        <a href='#'><i class='fas fa-eye'></i></a>
                      </div></div></div>";
                  }
              } else {
                  echo "0 results";
              }}
              $conn->close();
            ?>
          </div>
        </div>
      </div>
      
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
