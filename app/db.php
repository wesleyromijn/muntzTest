<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dealerdatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Er is geen verbinding: " . $conn->connect_error);
} 
?> <?php echo ""; ?> <?php

// // Create database
// $sql = "CREATE DATABASE dealerDatabase";
// if ($conn->query($sql) === TRUE) {
//     echo "";
// } else {
//     echo "Geen database: " . $conn->error;
// }

// $conn->close();
// RUN ONCE, THEN COMMENTED BECAUSE DATABASE EXIST. THIS IS THE WAY I CREATED THE DB

// sql to create table
// $sql = "CREATE TABLE dealers (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//     name VARCHAR(192) NOT NULL,
//     address VARCHAR(192) NOT NULL,
//     zipcode VARCHAR(6) NOT NULL,
//     city VARCHAR(192) NOT NULL,
//     country VARCHAR(192) NOT NULL,
//     phone VARCHAR(192),
//     remarks TEXT
//     )";
    
//     if ($conn->query($sql) === TRUE) {
//         echo "";
//     } else {
//         echo "Error: " . $conn->error;
//     }
//     RUN ONCE, THEN COMMENTED BECAUSE DATABASE EXIST. THIS IS THE WAY I CREATED THE TABLE

// $sql = "INSERT INTO dealers (name, address, zipcode, city, country, phone, remarks)
// VALUES ('Piet', 'straat', '1234', 'Stad', 'NL', '0000-000000', 'Commentaar zonder wat te zeggen')";

// if ($conn->query($sql) === TRUE) {
//     $last_id = $conn->insert_id;
//     echo "Laatste ID is: " . $last_id;
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

// mysqli_close($conn);
// RUN ONCE, THEN COMMENTED BECAUSE DATABASE EXIST. THIS IS THE WAY I CREATED THE 1ST VALUES FOR COLUMNS

// $sql = "INSERT INTO dealers (name, address, zipcode, city, country, phone, remarks)
// VALUES ('Piet', 'straat', '1234', 'Stad', 'NL', '0000-000000', 'Commentaar zonder wat te zeggen');";
// $sql .= "INSERT INTO dealers (name, address, zipcode, city, country, phone, remarks)
// VALUES ('Piet2', 'straat2', '12345', 'Stad2', 'NL2', '0000-000002', 'Meer commentaar zonder wat te zeggen');";
// $sql .= "INSERT INTO dealers (name, address, zipcode, city, country, phone, remarks)
// VALUES ('Piet4', 'straat4', '12346', 'Stad3', 'NL3', '0000-000003', 'Nog meer commentaar zonder wat te zeggen');";

// if ($conn->multi_query($sql) === TRUE) {
//     echo "New records created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $stmt = $conn->prepare("INSERT INTO MyGuests (name, address, zipcode, city, country, phone, remarks) VALUES (?, ?, ?, ?, ?, ?, ?)");
// $stmt->bind_param("ssbsssb", $name, $address, $zipcode, $city, $country, $phone, $remarks);

// $name = "Peter Doe";
// $address = "Straat";
// $zipcode = "1234";
// $city = "Stad";
// $country = "Land";
// $phone = "0000-000000";
// $remarks = "Commentaar";
// $stmt->execute();

// $name = "Peter Doe";
// $address = "Straat";
// $zipcode = "1234";
// $city = "Stad";
// $country = "Land";
// $phone = "0000-000000";
// $remarks = "Commentaar";
// $stmt->execute();

// $name = "Peter Doe";
// $address = "Straat";
// $zipcode = "1234";
// $city = "Stad";
// $country = "Land";
// $phone = "0000-000000";
// $remarks = "Commentaar";
// $stmt->execute();

// echo "New records created successfully";

// $stmt->close();
// $conn->close();
// RESULT IS A BOOLEAN ERROR, BUT DATABASE IS ALREADY FILLED SO I MOVED ON TO THE NEXT CHALLANGE

?>