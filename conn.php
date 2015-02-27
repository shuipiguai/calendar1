<?php
	/*error_reporting(0);
	$conn = mysql_connect( 'localhost', 'root', '') or die ( "链接数据库失败<br />".mysql_errno().":".mysql_error() );
	mysql_select_db( "calendar", $conn );
	mysql_query( "set names 'gbk' ");*/
	
	class DB{
		private $pdo = null;
		private static $instance = null;
		
		static protected function getInstance(){
			if( !(self::$instance instanceof self) ){
				self::$instance = new self();
			}
			
			return self::$instance;
		}
		
		private function __clone(){}

		private function __construct(){
			try{
				$this->pdo = new PDO( 'mysql:host=localhost;dbname=calendar', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8') );
				$this->pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			}catch( PDOException $e ){
				exit( $e->getMessage() );
			}
		}
		
		private function execute( $sql ){
			try{
				$stmt = $this->pdo->prepare( $sql );
				$stmt->execute();
			}catch( PDOException $e){
				exit( 'SQL语句:'.$sql.'<br />错误信息:'.$e->getMessage() );
			}
		}
		
		//添加
		protected function add( $table, Array $data ){
			if( empty($table) || empty($data) ) return false;
			
			$field = array();
			foreach( $data as $key => $value ){
				$field[] = $key."='".$value."'";
			}
			
			$fieldStr = implode( ',' $field );
			
			$sql = "INSERT INTO {$table} SET {$fieldStr}";
			return $this->execute( $sql )->rowCount();
		}
		
		//修改
		protected function  update( $table, Array $param, Array $data ){
			if( empty($table) || empty($param) || empty($data) ) return false;
			
			$whereStr = '';
			foreach( $param as $key => $value ){
				$whereStr .= $value." AND ";
			}
			$whereStr = rtrim( $whereStr, ' AND ' );
			
			$dataStr = '';
			foreach( $data as $key => $value ){
				$dataStr .= $key."='".$value."',";
			}
			$dataStr = rtrim( $dataStr, ',' );
			
			$sql = "UPDATE {$table} SET {$dataStr} WHERE {$where}";
			return $this->execute( $sql )->rowCount();
		}
		
		//删除
		protected function delete( $table, Array $param ){
			if( empty($table) || empty($param) ) return false;
			
			$whereStr = '';
			foreach( $param as $key => $value ){
				$whereStr .= $value." AND ";
			}
			$dataStr = rtrim( $dataStr, ' AND ' );
			
			$sql = "DELETE FROM {$table} WHERE {$whereStr}";
			return $this->execute( $sql )->rowCount();
		}
		
		//查询
		protected function select( $table, Array $field, Array $param ){
			if( empty($table) ) return false;
			if( !empty($param) ){
				$limit = isset( $param['limit'] ) ? 'LIMIT '.$param['limit'] : '';
				$order = isset( $param['order'] ) ? 'ORDER BY '.$param['order'] : '';
				if( isset($param['$where']) ){
					foreach( $where as $key => $value ){
						$where .= $value.' AND ';
					}
					$where = rtrim( $where, ' AND ' );
				}
				if( isset($param['like']) ){
					foreach( $param['like'] as $key => $value ){
						$like = " WHERE $key LIKE '%$value%' ";
					}
				}
				
				$fieldStr = '';
				if( !empty($field) ){
					$fieldstr = implode( ',', $field );
				}else{
					$fieldStr = '*';
				}
				
				$sql = "SELECT {$fieldStr} FROM {$table} "
			}
		}
	}
?>
