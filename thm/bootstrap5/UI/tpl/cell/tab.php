<?php
use GDO\UI\GDT_Tab;
/** @var $cell boolean **/
/** @var $field GDT_Tab **/
?>
<div class="container">
  <h4><?=$field->displayLabel()?></h4>
  <div>
<?php
foreach ($field->getFields() as $gdoType)
{
	echo $cell ? $gdoType->renderCell() : $gdoType->renderForm();
}
?>
  </div>
</div>
