<?php
use GDO\UI\GDT_Dialog;
use GDO\UI\GDT_DIV;
/** @var $field \GDO\Maps\GDT_Position **/ ?>
<div class="form-group <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label class="form-label" <?=$field->htmlForID()?>><?= $field->displayLabel(); ?></label>
  <input
   <?=$field->htmlID()?>
   type="text"
   class="form-control gdo-auto-complete"
   <?=$field->htmlRequired()?>
   <?=$field->htmlDisabled()?>
   onclick="GDO.Maps.openDialog('<?=$field->id()?>_picker').then(GDO.Maps.pickedPosition('<?=$field->id()?>'))"
   size="16"
   <?=$field->htmlFormName()?>
   value="<?=$field->hasVar()?$field->getValue()->displayRaw():''; ?>" />
  <?=$field->htmlError()?>
</div>

<?php
$dlg = GDT_Dialog::make($field->name.'_picker');
$dlg->addField(GDT_DIV::make('canvas')->addClass('maps-canvas'));
echo $dlg->renderCell();
?>
