<?php 
// For Review
print_r($_POST);
?>



<html>
<body>
<form method="post" action="./recieve.php">
<input type="radio" name="sex" value="1" <?php if( !empty($_POST['sex']) && $_POST['sex']==1 ){ echo "checked"; } ?>>MALE
<input type="radio" name="sex" value="2" <?php if( !empty($_POST['sex']) && $_POST['sex']==2 ){ echo "checked"; } ?>>FEMALE
<button type="submit">SEND</button>
</form>
</body>
</html>