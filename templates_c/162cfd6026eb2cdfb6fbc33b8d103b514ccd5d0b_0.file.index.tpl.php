<?php /* Smarty version 3.1.27, created on 2016-06-06 23:22:57
         compiled from "/Users/viktor/PhpstormProjects/testCase/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10001257575755e9b1e72364_39047010%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '162cfd6026eb2cdfb6fbc33b8d103b514ccd5d0b' => 
    array (
      0 => '/Users/viktor/PhpstormProjects/testCase/templates/index.tpl',
      1 => 1465248176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10001257575755e9b1e72364_39047010',
  'variables' => 
  array (
    'data' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5755e9b1ececc5_20625481',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5755e9b1ececc5_20625481')) {
function content_5755e9b1ececc5_20625481 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10001257575755e9b1e72364_39047010';
?>
<html>

<head>
    <title></title>
</head>
<body>
<table border="1">
    <thead>
    <th>ID</th>
    <th>CONTENT</th>
    </thead>
    <tbody>
<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['row']->value['data'];?>

                </td>
            </tr>
<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
    </tbody>
</table>
</body>
</html><?php }
}
?>