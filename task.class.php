<?php
require_once "global.class.php";
require_once "conn.php";
class Task extends Globali {
	public $execute = array( 0=>'δ��ʼ', 1=>'���', 2=>'δ���',3=>'������������', 4=>'����˾����', 5=>'͵����');

	public function getExecute( $key=0 ){
		$execute = $this->execute;
		foreach( $execute as $a => $b ){
			if( $a == $key){
				return $b;
			}
		}
	}
	
	//����id��ȡ����date
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