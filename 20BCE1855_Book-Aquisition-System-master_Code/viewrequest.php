<html>
    <head>
            <link rel="stylesheet" type="text/css" href="searchpage.css">
            <!--link rel="stylesheet" type="text/css" href="login.css"-->
    </head>
<body>

    <div class="navigation-bar">
  
  
      <div id="navigation-container">
  
        <img src="logobook.jpg.jpeg">
  
        <ul>
          <li><a href="editrequest1.php">Edit Requests</a></li>
          <li><a href="editbook.html">Edit Books</a></li>
          <li><a href="viewrequest.php"> View Requests </a></li>
          <li id = "help"><a href="viewfeedback.php">view Feedbacks</a></li>
        </ul>
    </div>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sq = "SELECT * FROM requesttable";
$upd = $conn->query($sq);
if ($upd->num_rows > 0) {
echo '<center><span style="color:white;text-align:center;"><h2> Requested Books<h2></span></center>';
echo"<style>
      th{
        font-size: 30px;
        color:white;
        background-color:E95959;
      }
      h1{
        margin-top: 40px;
      }
      td{
        color:white;
        font-size: 20px;
        padding:8px;

      }
table{
border-radius:25px;
margin-top: 50px;
width:1000px;
border-collapse:collapse;
border: 1px double white;
text-align:center;
padding:3px;
font-family:times;}
tr:nth-child(odd) {background-color: #212122;}
</style>";
   echo "<center><table>
          <th>BOOK TITLE</th>
          <th>Author name</th>
            <th>Quantity</th>
        </tr>";
    while($row = $upd->fetch_assoc()) {
        echo "<tr>
              <td>". $row["BOOK_TITLE"]. "</td>
               <td>". $row["AUTHOR_NAME"]. "</td>
                <td>" . $row["QUANTITY"] . "</td></tr>";
    }
echo "</table></center>";

if(isset($_POST['up'])){
echo '<center><span style="color:white;text-align:center;"><h2>Request Edited.<h2></span></center>';
}
 $conn->close();
      }
?>


<div class="footer">
    <div class="navigation-bar">
      <div id="footer-container">
  <ul>
  <li>
  <img src="logobook.jpg.jpeg">
  </li>
  <li>
    Address:
    VIT Chennai,
    Kelambakkam Road,
    Chennai,
    Tamil Nadu 600127
  </li>
  <li>
    Contact Us:
    Email:vitbarnbooks@gmail.com
    Mobile No: +919876543210
  </li>
  </ul>
    </div>
</div> 
</div>

 <?$conn->close();?>
</body>
</html>

