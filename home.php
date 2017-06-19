<!DOCTYPE html>
<?php
session_start(); 
if ( $_SESSION['is_logged_in']==true )
{?>
<center>
<h2>CONTENTS</h2><br>
<a href="events.php">EVENTS</a><br>
<a href="activities.php">ACTIVITIES</a><br>
<a href="seminars.php">SEMINARS</a><br>
<a href="guestlectures.php">GUEST LECTURES</a><br>
<a href="placementevents.php">PLACEMENT EVENTS</a><br>
<a href="logout.php">LOGOUT</a>
<?php
}
?>
