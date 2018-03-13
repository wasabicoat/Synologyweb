<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>รูปลงหิน</title>
</head>

<body>
<form id="form2" name="form2" method="post" action="">
  <input type="submit" name="Back" id="Back" value="Back" />
</form>
<form id="form1" name="form1" method="post" action="">
  <p>
  <?
  	$imageSize = array("1.5 x 2.0","2.0 x 2.5","2.5 x 3.0","2.5 x 3.5","3.0 x 4.0","3.5 x 5.0","4.0 x 6.0","5.0 x 7.0","6.0 x 8.0","7.0 x 9.0","8.0 x 10.0","9.0 x 11.0","10.0 x 12.0","11.0 x 14.0","12.0 x 15.0");
	$priceImage = array(
						array(285,335,400,450),
						array(300,350,550,600),
						array(350,400,650,700),
						array(400,450,650,700),
						array(420,470,770,820),
						array(520,570,920,970),
						array(650,750,1200,1300),
						array(850,950,1500,1600),
						array(1000,1100,2300,2400),
						array(1300,1400,2600,2700),
						array(1600,1700,3100,3700),
						array(1800,1900,3600,3700),
						array(2000,2100,4100,4200),
						array(2700,2800,5100,5200),
						array(2700,2800,5100,5200)
					);
	$imageType = array("ภาพเดี่ยว","ภาพคู่");
	$imageColorType = array("ภาพขาวดำ","ภาพสี");
	
  ?>
    <label for="sizeImage">ขนาดรูปลงหิน</label>
    <select name="sizeImage" id="sizeImage">
    <?
    	for($i=0;$i<count($imageSize);$i++){
			?>
				<option value="<?=$i?>"><?=$imageSize[$i]?></option>
			<?	
		}
	?>
    </select>
  </p>
  <p>
    <label for="imageTypeSel">ประเภทรูปลงหิน</label>
    <select name="imageTypeSel" id="imageTypeSel">
    <?
    	for($i=0;$i<count($imageSize);$i++){
			?>
				<option value="<?=$i?>"><?=$imageType[$i]?></option>
			<?	
		}
	?>
    </select>
  </p>
  <p>
    <label for="imageColorSel">สีรูปลงหิน</label>
    <select name="imageColorSel" id="imageColorSel">
    <?
    	for($i=0;$i<count($imageSize);$i++){
			?>
				<option value="<?=$i?>"><?=$imageColorType[$i]?></option>
			<?	
		}
	?>
    </select>
  </p>
  <p>
    <input type="submit" name="checkPrice" id="checkPrice" value="Submit" />
  </p>
</form>

<?
	if(isset( $_POST[Back] )){
			?><meta http-equiv="refresh" content="0;URL='http://bangbuathong.thddns.net:5652/RoobhinnontPrice/Mainmenu.php'" /> <?
	}else if(isset($_POST[checkPrice])){
		echo "รูปลงหินขนาด ".$imageSize[$_POST[sizeImage]]." ".$imageType[$_POST[imageTypeSel]]." ".$imageColorType[$_POST[imageColorSel]];
		$index=0;
		if(intval($_POST[imageTypeSel])==0){
			
		}else{	
			$index+=1;
		}
		if(intval($_POST[imageColorSel])==0){
			
		}else{	
			$index+=2;
		}
		
		?><br /><?
		echo "ราคาส่ง : ".(string)intval(1.5*$priceImage[$_POST[sizeImage]][$index]);
		?><br /><?
		echo "ราคาปลีก : ".(string)intval(1.8*$priceImage[$_POST[sizeImage]][$index]);	
	}
?>
<p></p>
</body>
</html>