<?phpuse GDO\UI\GDT_Accordeon;
/** @var $field GDT_Accordeon **/$field->addClass('gdt-accordeon');
?><label></label><div <?=$field->htmlAttributes()?>>  <a class="card-link" data-toggle="collapse" href="#accordeon-<?=$field->name?>"><?=html($field->title)?></a>  <div id="accordeon-<?=$field->name?>" class="collapse hide" ><?=$field->html?><?php foreach ($field->getFields() as $field) : ?><?php echo $field->renderCell(); ?><?php endforeach; ?>  </div></div>