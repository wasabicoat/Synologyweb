<?
	function SizeStonePrice($sizeX,$sizeY){
		$sizeCal =$sizeX*$sizeY/900*600;
			switch($sizeCal){
					case $sizeCal<=500: return 400;
					case $sizeCal<=1000: return 500;
					case $sizeCal<=1500: return 1000;
					case $sizeCal<=2000: return 1000;
					case $sizeCal<=2500: return 1500;
					case $sizeCal<=3000: return 1500;
					case $sizeCal<=3500: return 2000;
					case $sizeCal<=4000: return 2000;
					case $sizeCal<=4500: return 2500;
					case $sizeCal<=5000: return 2500;
				
					default : return 400;
				
				}
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ป้ายแกะสลัก</title>
</head>

<body>
<form id="form2" name="form2" method="post" action="">
  <input type="submit" name="Back" id="Back" value="Back" />
</form>
<p>โปรแกรมคำนวนราคาป้ายแกะสลัก(ไม่มีฐาน)</p>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="stoneType">ประเภทหิน</label>
    <select name="stoneType" id="stoneType">
      <?
				$stonePrice = array(1890,2790,3390,2600,579,3490);
				$stoneName = array("ดำจีน","ดำเกร็ดทอง","ไวท์คาราร่า","คริสตัลไวท์พรีเมี่ยม","เทาปากช่อง","แดงอินเดีย");
				$stoneNickName = array("หินแกรนิตดำ","หินแกรนิตดำเกร็ดทอง","หินอ่อนสีขาว","หินขาวล้วน","หินอ่อนสีเทา","หินแกรนิตสีแดง");
                	for($i=0;$i<count($stoneName);$i++)
					{
						?>
      <option value="<?=$stonePrice[$i];?>">
        <?=$stoneNickName[$i];?>
      </option>
      <?
					}
				?>
    </select>
  </p>
  <p>
    <label for="StoneSizeWidth">ความกว้างหิน</label>
    <input type="text" name="StoneSizeWidth" id="StoneSizeWidth" />
  (cm)</p>
  <p>
    <label for="stoneSizeHeigh">ความสูงหิน</label>
    <input type="text" name="stoneSizeHeigh" id="stoneSizeHeigh" />
    <label for="stoneSizeHeigh">(cm)</label>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit" />
  </p>
</form>

<?
	if(isset( $_POST[Back] )){
			?><meta http-equiv="refresh" content="0;URL='http://bangbuathong.thddns.net:5652/RoobhinnontPrice/Mainmenu.php'" /> <?
	}else if(isset( $_POST[submit] )){
			echo "ราคาป้ายแกะสลักขนาด ".$_POST[stoneSizeHeigh]."X".$_POST[StoneSizeWidth]." cm";
			?><br /><?
			echo "ราคาส่ง : ".(string)intval(1.5*(floatval($_POST[stoneSizeHeigh])*floatval($_POST[StoneSizeWidth])/10000*floatval($_POST[stoneType])+SizeStonePrice($_POST[stoneSizeHeigh],$_POST[StoneSizeWidth])))." บาท";
			?><br /><?
			echo "ราคาขายหน้าร้าน : ".(string)intval(1.8*(floatval($_POST[stoneSizeHeigh])*floatval($_POST[StoneSizeWidth])/10000*floatval($_POST[stoneType])+SizeStonePrice($_POST[stoneSizeHeigh],$_POST[StoneSizeWidth])))." บาท";
	}
	
?>

</body>
</html>