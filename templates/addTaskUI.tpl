<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content/Type" content="text/html;charset=gb2312" >
<title>��������</title>
</head>
<script src="jquery/jquery-1.8.1.min.js"></script>
<script src="jquery/form.js"></script>
<body>
	<div>
	<form action="task!addTask.action" method="post" name="task" onsubmit="return dealSubmit(task)">
		<input type="hidden" name="date" value="{$date}" />
		<table border="0">
			
			<tr>
				<td>��������</td>
				<td>
					<input type="text" name="name" size="50" id="taskName" placeholder="��д��������" required />
					<span id="nameWrong"></span>
				</td>
			</tr>
			<tr>
				<td>��ע</td>
				<td>
					<textarea cols="45" rows="5" name="note"></textarea>
			<tr>
				<td> 
					<input type="submit" value="��������" />
				</td>
				<td>
					<input type="button" value="ȡ��" onclick="dealCancel( '{$nodeUrl}' )" />
				</td>
			<tr>
		</table>
	</form>
	</div>
</body>
</html>	