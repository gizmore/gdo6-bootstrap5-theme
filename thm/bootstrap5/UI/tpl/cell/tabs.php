<?php
use GDO\UI\GDT_Tabs;
$field instanceof GDT_Tabs;
?>
<nav class="nav nav-tabs" role="tablist">
<?php $active = 'active'; ?>
<?php foreach ($field->getTabs() as $tab) : ?>
<?php $anchor = sprintf('%s_%s', $field->name, $tab->name); ?>
  <a class="nav-link <?=$active?>" data-toggle="tab" href="#<?=$anchor?>" role="tab"><?=html($tab->displayLabel())?></a>
<?php $active = ''; ?>
<?php endforeach; ?>
</nav>
<div class="tab-content">
<?php $active = 'show active'; ?>
<?php foreach ($field->getTabs() as $tab) : ?>
<?php $anchor = sprintf('%s_%s', $field->name, $tab->name); ?>
  <div class="tab-pane fade <?=$active?>" id="<?=$anchor?>" role="tabpanel">
<?php if ($cell) : ?>
<?=$tab->renderCell()?>
<?php else : ?>
<?=$tab->renderForm()?>
<?php endif; ?>
  </div>
<?php $active = ''; ?>
<?php endforeach; ?>
</div>
