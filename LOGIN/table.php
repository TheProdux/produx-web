<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
      body{
        margin-left:10%;
        width:500px;
    }
  table {
   border-collapse: collapse;
   width: 100%;
   color: #0088aa;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #0088cc;
   color: white;
   border:2px solid #fff;
    }
    td {
   border:2px solid #0088cc;
    }
  tr:nth-child(even) {background-color:#0088cc1a}
 </style>
</head>
<body>
 <table>
 <tr>
  <th>Username</th> 
  <th>Email</th> 
  <th>Phone NO.</th>
  <th>Company</th>
  <th>Interested In</th>
  <th>Comment</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "test1");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT * FROM register";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["username"]. "</td><td>" . $row["email"] . "</td><td>"
. $row["phone"]. "</td><td>" . $row["company"] . "</td><td>" . $row["interest"] . "</td><td>" . $row["comment"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
