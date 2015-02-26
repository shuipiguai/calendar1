<?php
require_once "conn.php";
require_once "task.class.php";
require_once "libs/Smarty.class.php";

class TaskController{
	//关联日历任务列表
	public function listAssCalendarTaskAction(){
		$date = $_GET['date'];
		echo $date.'333';
		$sql = "SELECT * FROM task WHERE date='".$date."'";

		$taskDao = new Task();
		$data = $taskDao->getRows( $sql );

		foreach( $data as $key => $value ){
			$data[$key]['formatExecute'] = $taskDao->getExecute( $value['execute'] );
		} 

		$nodeUrl = "calendar_self.php";

		$smarty = new Smarty();
		$smarty->assign( 'date', $date );
		$smarty->assign( 'data', $data );
		$smarty->assign( 'nodeUrl', $nodeUrl );
		$smarty->display("listTask.tpl");
	}
	
	//新建任务
	public function addTaskUIAction(){
		$date= $_GET['date'];

		$nodeUrl = "task!listAssCalendarTask.action?date=".$date;

		$smarty = new Smarty();
		$smarty->assign( 'date', $date );
		$smarty->assign( 'nodeUrl', $nodeUrl );
		$smarty->display('addTaskUI.tpl');
	}
	public function addTaskAction(){
		$date = $_POST['date'];
		$name = $_POST['name'];
		$note = $_POST['note'];

		if( !get_magic_quotes_gpc() ){
			$name = addslashes( $name );
			$note = addslashes( $note );
		}

		$sql = "INSERT INTO task ( id, name, note, date, create_time ) VALUES ( '', '$name', '$note', '$date', now() )";
		$result = mysql_query( $sql );
		if( $result ){
			echo '<script >location.href = "task!listAssCalendarTask.action?date='.$date.'";</script>';
		}else{
			echo "新建任务失败";
		}
	}
	
	//删除任务
	public function deleteTaskAction(){
		$taskId = $_GET['id'];
		$date = $_GET['date'];
		$sql = "DELETE FROM task WHERE id=".$taskId;

		$result = mysql_query( $sql );
		if( $result ){
			header('Location:task!listAssCalendarTask.action?date='.$date);
		}else{
			echo "failure for delete";
		}
	}
	
	//执行任务
	public function executeTaskUIAction(){
		$id = $_GET['id'];

		$taskDao = new Task();
		$execute = $taskDao->execute;
		$date = $taskDao->getDateById( $id );

		$nodeUrl = "task!listAssCalendarTask.php?date=".$date;

		$smarty = new Smarty();
		$smarty->assign( 'id', $id );
		$smarty->assign( 'execute', $execute );
		$smarty->assign( 'date', $date );
		$smarty->assign( 'nodeUrl', $nodeUrl );
		$smarty->display( "executeUI.tpl" );
	}
	
	public function executeTaskAction(){
		$taskId = $_POST['id'];
		$execute = $_POST['execute'];
		$date = $_POST['date'];

		if(!get_magic_quotes_gpc()){
			$execute = addslashes($execute);
		}

		$sql = "UPDATE task SET execute = ".$execute." WHERE id=".$taskId;

		$result = mysql_query($sql);
		if( $result ){
			header( 'Location:task!listAssCalendarTask.action?date='.$date );
		}else{
			echo "执行任务失败";s
		}
	}
}