<html>
<head><title>Oracle demo</title></head>
<body>
    <?php 
    $conn=oci_connect("STUDENT","STUDENT","localhost/XE");
	if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
?>
 
</body>
</html>