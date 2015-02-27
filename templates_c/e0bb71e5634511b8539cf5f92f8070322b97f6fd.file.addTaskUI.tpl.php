<?php /* Smarty version Smarty-3.1.18, created on 2015-02-26 20:51:09
         compiled from ".\templates\addTaskUI.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2749154d75cac2576b5-86923044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0bb71e5634511b8539cf5f92f8070322b97f6fd' => 
    array (
      0 => '.\\templates\\addTaskUI.tpl',
      1 => 1424955031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2749154d75cac2576b5-86923044',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54d75cac2cf225_68025929',
  'variables' => 
  array (
    'date' => 0,
    'nodeUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d75cac2cf225_68025929')) {function content_54d75cac2cf225_68025929($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content/Type" content="text/html;charset=gb2312" >
<title>创建任务</title>
</head>
<script src="jquery/jquery-1.8.1.min.js"></script>
<script src="jquery/form.js"></script>
<body>
	<div>
	<form action="task!addTask.action" method="post" name="task" onsubmit="return dealSubmit(task)">
		<input type="hidden" name="date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
" />
		<table border="0">
			
			<tr>
				<td>创建任务</td>
				<td>
					<input type="text" name="name" size="50" id="taskName" placeholder="填写任务名称" required />
					<span id="nameWrong"></span>
				</td>
			</tr>
			<tr>
				<td>备注</td>
				<td>
					<textarea cols="45" rows="5" name="note"></textarea>
			<tr>
				<td> 
					<input type="submit" value="创建任务" />
				</td>
				<td>
					<input type="button" value="取消" onclick="dealCancel( '<?php echo $_smarty_tpl->tpl_vars['nodeUrl']->value;?>
' )" />
				</td>
			<tr>
		</table>
	</form>
	</div>
</body>
</html>	<?php }} ?>
