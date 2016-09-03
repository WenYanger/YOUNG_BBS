<?php
	class DatabaseManager{
		
		function ConnectDatabaseServer($Database_address, $Username, $Password){
			$link = mysql_connect($Database_address,$Username,$Password)or die("不能连接数据库".mysql_error());
			return $link;
		}
		
		function ConnectDatabase($Database_name, $DatabaseServer){
			$db_selected = mysql_select_db($Database_name, $DatabaseServer);
			return $db_selected;
		}
		
		function FreeResult($Result){
			mysql_free_result($Result);
		}
		
		function FreeMySQLServer($Server){
			mysql_close($Server);
		}
		
		function FreeAll(){
		}
	}
?>