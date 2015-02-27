<?php
class Globali{
	public function getRows( $sql ){
		if( empty($sql) ) return;
		
		$result = mysql_query( $sql );
		if( empty($result) ) return;
		
		$data = array();
		$i = 0;
		while( $row = mysql_fetch_assoc($result) ){
			$data[$i] = $row;
			$i++;
		}
		
		return $data;
	}
}