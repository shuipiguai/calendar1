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
<?php if ($_valid && !is_callable('content_54d7633297da81_14398931')) {function content_54d7633297da81_14398931($_smarty_tpl) {?><!DOCTYPE html>
" />
" />
 $_from = $_smarty_tpl->tpl_vars['execute']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
' )" >