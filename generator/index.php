<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

require_once('source.php');

if(isset($_POST['make'])) {
	$source = new newsletterSource();
	$output = $source->productBlock($_POST['link'],$_POST['image'],$_POST['brand'],$_POST['desc'], $_POST['price'], $_POST['utm']);
}
else {
	$output = "";
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
        <table>
        	<tr>
                <td>Google UTM:</td>
                <td><input type="text" name="utm" value="<?php if(isset($_POST['make'])) { echo $_POST['utm']; } ?>"></td>
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
    </form>
    <br />
    <br />
    <textarea cols="200" rows="40"><?php echo $output;?></textarea>
</body>
</html>
