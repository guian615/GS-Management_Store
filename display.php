<?php
$servername='remotemysql.com:3306';
$username='JBwwoP2pMj';
$password='8o2lwsY5Zg';
$dbname = "JBwwoP2pMj";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

$resultForOrder = mysqli_query($conn,"SELECT * FROM order_table");
$resultForCustomer = mysqli_query($conn,"SELECT * FROM customer_table");
$resultForItem = mysqli_query($conn,"SELECT * FROM item_table");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($resultForOrder) > 0) {
?>
  <table>
  
  <tr>
    <td>customer_id</td>
    <td>item_id</td>
    <td>quantity</td>
    <td>total</td>
    <td>date ordered</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($resultForOrder)) {
?>
<tr>
    <td><?php echo $row["customer_id"]; ?></td>
    <td><?php echo $row["item_id"]; ?></td>
    <td><?php echo $row["quantity"]; ?></td>
    <td><?php echo $row["total"]; ?></td>
    <td><?php echo $row["date_ordered"]; ?></td>
    
</tr>
<?php
$i++;
}
?>




</table>
 <?php
}
else{
    echo "No result found";
}
?>
<!-- for customertable -->
<?php
if (mysqli_num_rows($resultForCustomer) > 0) {
?>
  <table>
  
  <tr>
    <td>customer_id</td>
    <td>customer_name</td>
    <td>customer_address</td>
    <td>contact_number</td>
   
  </tr>
<?php
$i=0;
while($row= mysqli_fetch_array($resultForCustomer)) {
?>
<tr>
    <td><?php echo $row["customer_id"]; ?></td>
    <td><?php echo $row["customer_name"]; ?></td>
    <td><?php echo $row["customer_address"]; ?></td>
    <td><?php echo $row["contact_number"]; ?></td>
   
    
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
<!-- for item table -->
<?php
if (mysqli_num_rows($resultForItem)>0) {
?>
  <table>
  
  <tr>
    <td>Item_id</td>
    <td>Item_name</td>
    <td>description</td>
    <td>price</td>
    <td>quantity</td>
    <td>image</td>
    <td>isNew</td>
    <td>isBestSeller</td>
   
  </tr>
<?php
$i=0;
while($row= mysqli_fetch_array($resultForItem)) {
?>
<tr>
    <td><?php echo $row["item_id"]; ?></td>
    <td><?php echo $row["item_name"]; ?></td>
    <td><?php echo $row["description"]; ?></td>
    <td><?php echo $row["price"]; ?></td>
    <td><?php echo $row["quantity"]; ?></td>
    <td><?php echo $row["image"]; ?></td>
    <td><?php echo $row["isNew"]; ?></td>
    <td><?php echo $row["isBestSeller"]; ?></td>
   
    
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>