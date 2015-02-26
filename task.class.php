<?php
require_once "global.class.php";
require_once "conn.php";
class Task extends Globali {
	public $execute = array( 0=>'未开始', 1=>'完成', 2=>'未完成',3=>'处理其他任务', 4=>'处理公司事务', 5=>'偷懒了');

	public function getExecute( $key=0 ){
		$execute = $this->execute;
		foreach( $execute as $a => $b ){
			if( $a == $key){
				return $b;
			}
		}
	}
	
	//根据id获取任务date
	public function getDateById( $id ){
		$date = '';
		if( empty($id) ) return $date;
		
		$sql = "SELECT date FROM task WHERE id=".$id;
		$result = mysql_query( $sql );
		if( empty($result) ) return $date;
		
		$row = mysql_fetch_assoc( $result);
		$date = $row['date'];
		
		return $date;
	}
}

?>