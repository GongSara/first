<?php 
define('PATH', dirname(_FILE));
define('URL', 'http://localhost:8000');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="<?php echo URL ?>/save.php" method="get">
	<input type="text" name="content" value="默认内容">
	<button type="submit">提交</button>
</form>
</body>
</html>