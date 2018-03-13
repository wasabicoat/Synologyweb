 <?php
	class News_m extends CI_Model { 
	   function get_data(){
		   return mysql_query("select * from percent");
	   }
	} 
?>