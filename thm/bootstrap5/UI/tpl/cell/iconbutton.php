<?php
/** @var $field \GDO\UI\GDT_IconButton **/
/** @var $href string **/
$classes = [
	'btn-primary',
	'btn-outline-success',
	'btn-outline-danger',
];
$field->addClass('btn');
$field->addClass($classes[$field->priority]);
$field->addClass('gdt-button');
$field->addClass('gdt-image-button');
?>
<?php if ($href) : ?>
<a
 href="<?=html($href)?>"
 <?=$field->htmlDisabled()?>
 <?=$field->htmlAttributes()?>
  ><?=$field->htmlIcon()?> <?=$field->displayLabel()?></a>
<?php endif; ?>
