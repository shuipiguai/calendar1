<?php /* Smarty version Smarty-3.1.18, created on 2015-02-26 21:04:04
         compiled from ".\templates\executeUI.tpl" */ ?>
<?php /*%%SmartyHeaderCode:784854d763328fe5a9-10250870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bc840da9398501b0524339773ef1cffe6d3b1ae' => 
    array (
      0 => '.\\templates\\executeUI.tpl',
      1 => 1424955542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '784854d763328fe5a9-10250870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54d7633297da81_14398931',
  'variables' => 
  array (
    'id' => 0,
    'date' => 0,
    'execute' => 0,
    'value' => 0,
    'nodeUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d7633297da81_14398931')) {function content_54d7633297da81_14398931($_smarty_tpl) {?><!DOCTYPE html><html><head><meta http-equiv="Content/Type" content="text/html;charset=gb2312"><title>填写任务执行情况</title></head><script src="jquery/form.js"></script><script src="jquery/jquery-1.8.1.min.js"></script><body>	<div>		<table>		<form action="task!executeTask.action" method="post" name="execute">			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />			<input type="hidden" name="date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
" />			<tr>				<td>					<select name="execute">						<option value="0"> </option>						<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['execute']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>						<option value="<?php echo $_smarty_tpl->tpl_vars['value']->key;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>						<?php } ?>							</select>				</td>			</tr>			<tr>				<td>					<input type="submit" value="提交" />				</td>				<td>					<input type="button" value="取消" onClick="dealCancel( '<?php echo $_smarty_tpl->tpl_vars['nodeUrl']->value;?>
' )" >				</td>			</tr>		</form>		</table>	</div></body></html><?php }} ?>
