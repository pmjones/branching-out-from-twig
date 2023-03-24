<?php
/* Smarty version 4.3.0, created on 2023-03-23 15:21:13
  from '/Users/pmjones/Code/template-compare/compiled/smarty/templates/example.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641c6e694ac2a1_50297724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4f434937895c09ea413d17c21bf961ee458d750' => 
    array (
      0 => '/Users/pmjones/Code/template-compare/compiled/smarty/templates/example.tpl',
      1 => 1679150691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641c6e694ac2a1_50297724 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<title>Example</title>
</head>
<body>
<p>Hello, <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
!</p>
<div foo="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['name']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div>
<?php if (empty($_smarty_tpl->tpl_vars['list']->value)) {?>
	<p>No items in list</p>
<?php } else { ?>
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
		<li><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
<?php }?>
</body>
</html>
<?php }
}
