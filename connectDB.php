<?php

// $connectDB = mysqli_connect("localhost","root","","meeting_room");
$connectDB = mysqli_connect("localhost","root","","meetingroomdb");

// Check connection
if (mysqli_connect_error($connectDB)) {
  echo "Failed to connect to MySQL: " ;
};

// $sql = "CREATE TABLE bookingroom (
//   id int(5) UNSIGNED AUTO_INCREMENT,
//   roomname varchar(255) NOT NULL,
//   numperson int(5),
//   bookname varchar(255),
//   statusroom int(5),  
//   PRIMARY KEY (id)
 
// )";
// FOREIGN KEY (statusroom) REFERENCES statusroom(statusID)
// $sql = "CREATE TABLE statusroom (
//   statusID int(5)  ,
//   statusname varchar(255),
//   PRIMARY KEY (statusID)
// )";

// $sql = "ALTER TABLE bookingroom
// ADD CONSTRAINT fk_status
// FOREIGN KEY (statusroom)
// REFERENCES statusroom(statusID)";


// $sql = "CREATE TABLE roome (
//   id int(5) UNSIGNED AUTO_INCREMENT,
//   numperson int(5),
//   bookname varchar(255),
//   statusroome int(5),  
//   PRIMARY KEY (id),
//   FOREIGN KEY (statusroome) REFERENCES statusroom(statusID)
 
// )";

// if (mysqli_query($connectDB, $sql)) {
//   echo "Table MyGuests created successfully";
// } else {
//   echo mysqli_error($connectDB);
// }

?>