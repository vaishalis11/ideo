<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Deodrands Details</h2>

<table border="2">
  <tr>
    <td>deo_id</td>
    <td>deo_brand</td>
    <td>deo_feature</td>
  </tr>

<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from deodrand"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['deo_id']; ?></td>
    <td><?php echo $data['deo_brand']; ?></td>
    <td><?php echo $data['deo_feature']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>
