<?php
/** @var $field \GDO\UI\GDT_IconButton **/
/** @var $href string **/
?>
<?php if ($href) : ?>
<a
 href="<?=html($href)?>"
 <?=$field->htmlDisabled()?>
  class="btn <?=$field->primaryButton?'btn-outline-primary':'btn-outline-secondary'?> gdt-button gdt-image-button"
  ><?=$field->htmlIcon()?><?=$field->displayLabel()?></a>
<?php endif; ?>
