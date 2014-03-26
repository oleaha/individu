<?php

public class newsletterSource() {
	
	private $brandSize = 20;
	private $descSize = 14;
	private $priceSize = 12;

	public __construct($brandFontSize = NULL, $descFontSize = NULL, $priceFontSize = NULL) {
		if(!empty($brandFontSize)) {
			$this->brandSize = $brandFontSize;
		}
		if(!empty($descFontSize)) {
			$this->descSize = $descFontSize;
		}
		if(!empty($priceSize)) {
			$this->brandSize = $priceFontSize;
		}
	}

	public function productBlock($link, $image, $brand, $desc, $price) {
		$output = '
			<!-- START -->
            <table align="left" width="150" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; a:hover:">
            <!-- IMAGE -->
            	<tr>
                	<td align="left" valign="top">
	                	<a href="'.$link.'?utm_source=nyhetsbrev&utm_medium=email&utm_campaign=nyhetsbrevMars" style="color:#444444; text-decoration: none;">
	                    <img src="'.$image.'" alt="" width="150" height="177" border="0"></a>
                    </td>
                </tr>
            <!-- BRAND -->
            	<tr>
                	<td align="center" valign="top">
	                	<a href="'.$link.'?utm_source=nyhetsbrev&utm_medium=email&utm_campaign=nyhetsbrevMars" style="color:#444444; text-decoration: none;">
	                    <h1 style="font-size: 20px; margin: 5px 0px 7px; font-family: Oswald, sans-serif; font-weight: 400; color: rgb(255, 102, 51); text-transform: uppercase; line-height: 1; text-align: center;">'.$brand.'</h1></a>
					</td>
					</tr>
             <!-- DESC -->
              		<tr>
			  			<td align="center" valign="top">
	                    	<a href="'.$link.'?utm_source=nyhetsbrev&utm_medium=email&utm_campaign=nyhetsbrevMars" style="color:#444444; text-decoration: none;">
	                        <h1 style="font-size: 14px; margin: 0px 0px 7px; font-family: Oswald, sans-serif; font-weight: 200; color: rgb(255, 102, 51); text-transform: uppercase; line-height: 1; text-align: center;">'.$desc.'</h1></a>
                        </td>
                    </tr>
              <!-- PRICE -->
                    <tr>
                    	<td align="center" valign="top">
                        	<a href="'.$link.'?utm_source=nyhetsbrev&utm_medium=email&utm_campaign=nyhetsbrevMars" style="color:#444444; text-decoration: none;">
	                        <h1 style="font-size: 20px; margin: 0px 0px 7px; font-family: Oswald, sans-serif; font-weight: 400; color: rgb(255, 102, 51); text-transform: uppercase; line-height: 1; text-align: center;"><span style="font-size: 12px;">Nå:</span>'.$price.',-</h1></a>
                        </td>
                    </tr>
			  </table>
              <!-- END -->';
		
		return $output;
	}	
	
	
}






?>