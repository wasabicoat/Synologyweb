<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Roobhinnont</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>ป้ายแกะสลัก
  <input type="submit" name="carving" id="carving" value="Submit" />
  </p>
  <p>รูปลงหิน
    <input type="submit" name="imageStone" id="imageStone" value="Submit" />
  </p>
  <p>ป้ายอัฐิ
    <input type="submit" name="deadlyCarving" id="deadlyCarving" value="Submit" />
  </p>
  <p>รูปล๊อกเก๊ต
    <input type="submit" name="locket" id="locket" value="Submit" />
  </p>
  <p>ป้ายแกะสลักแบบมีฐานตั้ง
    <input type="submit" name="carvingAndBase" id="carvingAndBase" value="Submit" />
    <br />
  </p>
  <p>ป้ายอัฐิแบบมีฐานตั้ง
    <input type="submit" name="deadlyCarvingAndBase" id="deadlyCarvingAndBase" value="Submit" />
    <br />
  </p>
</form>

<?
	if(isset( $_POST[carving] )){
			echo "carving";
			?><meta http-equiv="refresh" content="0;URL='http://bangbuathong.thddns.net:5652/RoobhinnontPrice/carving.php'" /> <?
	}else if(isset( $_POST[imageStone] )){
			echo "imageStone";
			?><meta http-equiv="refresh" content="0;URL='http://bangbuathong.thddns.net:5652/RoobhinnontPrice/imageStone.php'" /> <?
			
	}else if(isset( $_POST[deadlyCarving] )){
			echo "deadlyCarving";
			?><meta http-equiv="refresh" content="0;URL='http://bangbuathong.thddns.net:5652/RoobhinnontPrice/deadlyCarving.php'" /> <?
	}else if(isset( $_POST[locket] )){
			echo "locket";
			?><meta http-equiv="refresh" content="0;URL='http://bangbuathong.thddns.net:5652/RoobhinnontPrice/locket.php'" /> <?
	}else if(isset( $_POST[carvingAndBase] )){
			echo "carvingAndBase";
			?><meta http-equiv="refresh" content="0;URL='http://bangbuathong.thddns.net:5652/RoobhinnontPrice/carvingAndBase.php'" /> <?
	}else if(isset( $_POST[deadlyCarvingAndBase] )){
			echo "deadlyCarvingAndBase";
			?><meta http-equiv="refresh" content="0;URL='http://bangbuathong.thddns.net:5652/RoobhinnontPrice/deadlyCarvingAndBese.php'" /> <?
	}
?>

</body>
</html>