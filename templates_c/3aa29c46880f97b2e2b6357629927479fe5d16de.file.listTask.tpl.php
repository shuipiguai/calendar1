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
<?php if ($_valid && !is_callable('content_54d7111e5571c5_17641745')) {function content_54d7111e5571c5_17641745($_smarty_tpl) {?><!DOCTYPE html>
�������б�</title>
">�½�����</a>
">����</a>
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
</td>
</td>
</td>
</td> 
" seed="task_execute" class="operate" taskId="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">ִ��</a>
" seed="task_edit"class="operate">�޸�</a>
&date=<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
" onclick="return confirm('ȷ��ɾ����')" seed="task_detete" class="operate">ɾ��</a>