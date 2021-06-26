<?php /** @var $field \GDO\DB\GDT_Decimal **/ ?>
<fieldset class="form-group <?=$field->classError()?>">
  <?= $field->htmlIcon(); ?>
  <label class="form-label" <?=$field->htmlForID()?>><?= $field->displayLabel(); ?></label>
  <input
   <?=$field->htmlID()?>
   class="form-control"
   type="number"
   <?=$field->htmlFormName()?>
   <?= $field->htmlDisabled(); ?>
   <?= $field->htmlRequired(); ?>
   min="<?= $field->min; ?>"
   max="<?= $field->max; ?>"
   step="<?= $field->step; ?>"
   value="<?= $field->getVar(); ?>" />
  <?= $field->htmlError(); ?>
</fieldset>
