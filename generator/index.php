<?php

if(isset($_POST['make'])) {
	$output .= '
							<!-- START -->
                            <table align="left" width="150" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; a:hover:">
                            	<!-- IMAGE -->
                                <tr>
                                    <td align="left" valign="top">
	                                    <a href="'.$_POST['link'].'?utm_source=nyhetsbrev&utm_medium=email&utm_campaign=nyhetsbrevMars" style="color:#444444; text-decoration: none;">
	                                    	<img src="'.$_POST['image'].'" alt="" width="150" height="177" border="0"> 
	                                    </a>
                                    </td>
                                </tr>
                                <!-- BRAND -->
                                <tr>
                                    <td align="center" valign="top">
	                                    <a href="'.$_POST['link'].'?utm_source=nyhetsbrev&utm_medium=email&utm_campaign=nyhetsbrevMars" style="color:#444444; text-decoration: none;">
	                                    	<h1 style="font-size: 20px; margin: 5px 0px 7px; font-family: Oswald, sans-serif; font-weight: 400; color: rgb(255, 102, 51); text-transform: uppercase; line-height: 1; text-align: center;">'.$_POST['brand'].'</h1>
	                                    </a>
                                    </td>
                                </tr>
                                <!-- DESC -->
                                <tr>
                                	<td align="center" valign="top">
	                                	<a href="'.$_POST['link'].'?utm_source=nyhetsbrev&utm_medium=email&utm_campaign=nyhetsbrevMars" style="color:#444444; text-decoration: none;">
	                                		<h1 style="font-size: 14px; margin: 0px 0px 7px; font-family: Oswald, sans-serif; font-weight: 200; color: rgb(255, 102, 51); text-transform: uppercase; line-height: 1; text-align: center;">'.$_POST['desc'].'</h1>
	                                	</a>
                                	</td>
                                </tr>
                                <!-- PRICE -->
                                <tr>
                                    <td align="center" valign="top">
                                    	<a href="'.$_POST['link'].'?utm_source=nyhetsbrev&utm_medium=email&utm_campaign=nyhetsbrevMars" style="color:#444444; text-decoration: none;">
	                                    	<h1 style="font-size: 20px; margin: 0px 0px 7px; font-family: Oswald, sans-serif; font-weight: 400; color: rgb(255, 102, 51); text-transform: uppercase; line-height: 1; text-align: center;">
												<span style="font-size: 12px;">Nå:</span>
												'.$_POST['price'].',-
											</h1>
                                    	</a>
                                    </td>
                                </tr>
                            </table>
                            <!-- END -->	
	';
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
