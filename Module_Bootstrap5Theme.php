<?php
namespace GDO\Bootstrap5Theme;

use GDO\Core\GDO_Module;

final class Module_Bootstrap5Theme extends GDO_Module
{
    public function getDependencies() { return ['Bootstrap5']; }
    public function getTheme() { return 'bootstrap5'; }

    ##############
    ### Assets ###
    ##############
    public function onIncludeScripts()
    {
        $this->addCSS('css/gdo6-bootstrap5.css');
        $this->addJavascript('js/gdo6-bootstrap5.js');
    }

}
