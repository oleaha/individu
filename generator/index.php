<?php
session_start();

/*
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
*/

require_once('source.php');
$date = date('Y-m-d');

if(isset($_POST['make'])) {
	
	$_SESSION['count'] += 1;
	$_SESSION['utm'] 	= $_POST['utm'];
	
	$source = new newsletterSource();
	
	if($_SESSION['count'] == 1) {
		$output .= $source->productLineStart();
		$output .= $source->productBlock($_POST['link'],$_POST['image'],$_POST['brand'],$_POST['desc'], $_POST['price'], $_POST['utm']);
	}
	elseif($_SESSION['count'] == 4) {
		$output .= $source->productBlock($_POST['link'],$_POST['image'],$_POST['brand'],$_POST['desc'], $_POST['price'], $_POST['utm']);
		$output .= $source->productLineEnd();
		$_SESSION['count'] = 0;
	}
	else {
		$output .= $source->productBlock($_POST['link'],$_POST['image'],$_POST['brand'],$_POST['desc'], $_POST['price'], $_POST['utm']);
	}

	$_SESSION['output'] = $output;
	
}
else {
	$output = "";
}

if(isset($_POST['addToFile'])) {
	$do = file_put_contents('files/'.$date.'.html', $_SESSION['output'], FILE_APPEND);
	$_SESSION['output'] = "";
}
if(isset($_POST['resetSession'])) {
	$_SESSION['count'] = 0;
}
if(isset($_POST['resetUTM'])) {
	$_SESSION['utm'] = "";
}
if(isset($_POST['deleteLast'])) {
	$source = new newsletterSource();
	$source->deleteLast($date);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
	<meta charset="UTF-8">
    <title>Newsletter Block Creator</title>
</head>

<body>
    <form method="post" action="">
    	<h3>Product block number: <?php echo $_SESSION['count']; ?></h3>
        <table>
        	<tr>
                <td>Google UTM:</td>
                <td><input type="text" name="utm" value="<?php if(isset($_SESSION['utm'])) { echo $_SESSION['utm']; } ?>"></td>
            </tr>
            <tr>
                <td>Link:</td>
                <td><input type="text" name="link"></td>
            </tr>

            <tr>
                <td>Bide:</td>
                <td><input type="text" name="image"></td>
            </tr>

            <tr>
                <td>Merke:</td>
                <td><input type="text" name="brand"></td>
            </tr>

            <tr>
                <td>Beskrivelse:</td>
                <td><input type="text" name="desc"></td>
            </tr>

            <tr>
                <td>Pris:</td>
                <td><input type="text" name="price"></td>
            </tr>
        </table>
        <input type="submit" name="make">
        <input type="submit" name="addToFile" value="Add to textfile">
        <input type="submit" name="resetSession" value="Reset Session">
        <input type="submit" name="resetUTM" value="Reset UTM Link">
        <a href="files/<?php echo $date; ?>.html">Preview</a>
        <input type="submit" name="deleteLast" value="Delete last">
    </form>
    <textarea cols="100" rows="40"><?php echo $output;?></textarea>
</body>
</html>
