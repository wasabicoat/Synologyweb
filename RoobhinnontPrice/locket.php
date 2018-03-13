<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>รูปล๊อกเก๊ต</title>
</head>

<body>
<form id="form2" name="form2" method="post" action="">
  <input type="submit" name="Back" id="Back" value="Back" />
</form>



<form id="form1" name="form1" method="post" action="">
  <p>ราคางานรูปล๊อกเก๊ต</p>
  <p><img src="locket.jpg" width="709" height="850" /></p>
  <p>
    <label for="locketPrice"></label>
    หมายเลขงาน 
    <select name="locketPrice" id="locketPrice">
      
      <?
      	for($i=0;$i<=22;$i++){
			if($i==0){
				?>
	  <option value="0">Jumbo size</option>
				<?	
			}else{
				?>
					<option value="<?=$i?>"><?=$i?></option>
				<?
			}
		}
	  ?>
      
    </select>
    <input type="submit" name="submit" id="submit" value="Submit" />
  </p>
  
  <?
		if(isset( $_POST[Back] )){
			?><meta http-equiv="refresh" content="0;URL='http://bangbuathong.thddns.net:5652/RoobhinnontPrice/Mainmenu.php'" /> <?
		}else if ($_POST[submit]){
			
			$sizelocket=array("4.2x3.3","2.7x3.4","2.5x3.2","2.4x3.0","2.2x2.9","2.0x2.7","1.9x2.5","1.8x2.3","1.6x2.0","1.3x1.7","2.75x2.75","2.45x2.45","2.26x2.26","1.86x1.86","1.6x1.6","2.6x2.5","2.5x2.3","2.0x2.0","1.7x1.9","2.0x1.8","2.3x3.0","1.86x2.4","1.4x1.7");
			
			if($_POST[locketPrice]==0){
				?><p>งานล๊อกเก๊ต จัมโบ้ ขนาด <?=$sizelocket[$_POST[locketPrice]]?></p><? 
				?><p> ราคา รูปเดี่ยว : <?=350*2.0?> </p><?
				?><p> ราคา รูปคู่    : <?=400*2.0?> </p><?
				
			}else{
				?><p>งานล๊อกเก๊ต หมายเลข<?=$_POST[locketPrice]?> ขนาด <?=$sizelocket[$_POST[locketPrice]]?></p><? 
				?><p> ราคา รูปเดี่ยว : <?=250*2.0?> </p><?
				?><p> ราคา รูปคู่    : <?=300*2.0?> </p><?
			}
			
			
			
			
		}
  ?>


  
  <p>&nbsp;</p>
</form>
<p></p>
</body>
</html>