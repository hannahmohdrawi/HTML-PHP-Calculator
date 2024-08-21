<html>
<body>
<!--Your code goes here-->
<?php print_r($_GET) ?> <br>

<?="The division of ${_GET['numerator']} and ${_GET['denominator']} is:" ?> <br>
<?=$_GET['numerator'] / $_GET['denominator'] ?> <br>
<a href="index.php">Reset</a>
</body>
</html>