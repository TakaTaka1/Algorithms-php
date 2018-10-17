<?php 


print_r($_POST['sex']);

?>



<html>
<body>
<form method="post" action="./send.php">
<input type="hidden" name="sex" value="<?=$_POST['sex']; ?>">

<button type="submit">BACK</button>
</body>
</html>