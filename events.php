<?php
session_start(); 
if ( $_SESSION['is_logged_in']==true )
{
include("connection.php");
$q="SELECT * FROM tbl_event";
$r=mysql_query($q); 
?>
<html>
<head>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
<a href="events.php">EVENTS </a>
<a href="activities.php">ACTIVITIES </a>
<a href="seminars.php">SEMINARS </a>
<a href="guestlectures.php">GUEST LECTURES </a>
<a href="placementevents.php">PLACEMENT EVENTS </a>
<a href="logout.php">LOGOUT</a>
<br>
<br>
<br>
<br>
<br>
<br>
<table border="8" cellspacing="6" cellpadding="7"  style="border:solid 15px yellow;background-color:orange; border-radius:20px;C"  >
<tr>
<td  style="border:solid 5px green; border-radius:5px;">event_id</td>
<td  style="border:solid 5px green; border-radius:5px;">event_name</td>
<td  style="border:solid 5px green; border-radius:5px;">event_date</td>
<td  style="border:solid 5px green; border-radius:5px;">event_desc</td>
<td  style="border:solid 5px green; border-radius:5px;">event_cordinator</td>
</tr>
<?php
while($row=mysql_fetch_assoc($r))
{
	?>
<tr>
<td  style="border:solid 5px green;background-color:white; border-radius:5px;"><?php echo $row['event_id'];?></td>
<td  style="border:solid 5px green;background-color:white; border-radius:5px;"><?php echo $row['event_name'];?></td>
<td  style="border:solid 5px green;background-color:white; border-radius:5px;"><?php echo $row['event_date'];?></td>
<td  style="border:solid 5px green;background-color:white; border-radius:5px;"><?php echo $row['event_desc'];?></td>
<td  style="border:solid 5px green;background-color:white; border-radius:5px;"><?php echo $row['event_cordinator'];?></td>
</tr><?php }?>
</table>

</body>
</html>
<?php } ?>