<?php /* Smarty version Smarty-3.1.18, created on 2015-02-26 21:03:13
         compiled from ".\templates\listTask.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1898754d7111e4422b5-70205427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3aa29c46880f97b2e2b6357629927479fe5d16de' => 
    array (
      0 => '.\\templates\\listTask.tpl',
      1 => 1424955784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1898754d7111e4422b5-70205427',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54d7111e5571c5_17641745',
  'variables' => 
  array (
    'date' => 0,
    'nodeUrl' => 0,
    'data' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d7111e5571c5_17641745')) {function content_54d7111e5571c5_17641745($_smarty_tpl) {?><!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html;charset=gb2312"><title><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
的任务列表</title></head><body><header></header><nav>	<ul style="">		<li>			<a href="task!addTaskUI.action?date=<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">新建任务</a>		</li>		<li>			<a href="<?php echo $_smarty_tpl->tpl_vars['nodeUrl']->value;?>
">返回</a>		</li>	</ul></nav><table border=1><tr>	<td>任务名称</td>	<td>备注</td>	<td>执行情况</td>	<td>创建日期</td>	<td>操作</td></tr><?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?><tr>	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['note'];?>
</td>	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['formatExecute'];?>
</td>	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['create_time'];?>
</td> 	<td >		<a href="task!executeTaskUI.action?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" seed="task_execute" class="operate" taskId="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">执行</a>		<a href="task!editTaskUI.action?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" seed="task_edit"class="operate">修改</a>		<a href="task!deleteTask.action?id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
&date=<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
" onclick="return confirm('确认删除？')" seed="task_detete" class="operate">删除</a>	</td></tr><?php } ?></table><script src="jquery/jquery-1.8.1.min.js"></script><script>/*$(".operate").live('click',function(){	var _self = $(this),		seed = $(".operate").attr('seed');	switch( seed ){		case "task_execute":		 var id = _self.attr('taskId'),			href = "execute.php?id="+id;					//_self.css('text-decoration','underline');		window.open( href,"_blank",'width=500,height=500,scrollable=yes,menubar=no,status=no,titlebar=no,toolbar=no,left=500,top=200');		break;		case "task_delete":		var id = _self.attr('taskId'),			href = "deleteTask.php?id="+id;			window.open( href,"_blank",'width=500,height=500,scrollable=yes,menubar=no,status=no,titlebar=no,toolbar=no,left=500,top=200');			break;	} });*/</script></body></html><?php }} ?>
