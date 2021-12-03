<?php /** @var $field \GDO\Maps\GDT_Position **/ ?>
<div class="form-group <?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label class="form-label" <?=$field->htmlForID()?>><?= $field->displayLabel(); ?></label>
  <input
   <?=$field->htmlID()?>
   type="text"
   class="form-control gdo-auto-complete"
   <?=$field->htmlRequired()?>
   <?=$field->htmlDisabled()?>
   size="16"
   <?=$field->htmlFormName()?>
   value="<?=$field->hasVar()?$field->getValue()->displayRaw():''; ?>" />
  <?=$field->htmlError()?>
</div>
