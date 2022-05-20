<?php
namespace GDO\Bootstrap5;

use GDO\Core\GDO_Module;
use GDO\Javascript\Module_Javascript;
use GDO\DB\GDT_Checkbox;
use GDO\UI\GDT_Icon;

/**
 * Bootstrap5 assets.
 * @TODO Optional bs5 icon provider.
 * 
 * @author gizmore
 * @version 6.10.6
 * @since 6.10.4
 */
final class Module_Bootstrap5 extends GDO_Module
{
    public $module_priority = 25;

    public function getModuleLicenseFilenames()
    {
        return ['bower_components/bootstrap/LICENSE'];
    }
    
    ##############
    ### Config ###
    ##############
    public function getConfig()
    {
        return [
            GDT_Checkbox::make('bs5_icons')->initial('0'),
        ];
    }
    public function cfgIcons() { return $this->getConfigVar('bs5_icons'); }
    
    ##############
    ### Assets ###
    ##############
    public function onInit()
    {
        if ($this->cfgIcons())
        {
            $method = [BS5Icon::class, 'iconS'];
            GDT_Icon::$iconProvider = $method;
        }
    }
    
    public function onIncludeScripts()
    {
        $min = Module_Javascript::instance()->cfgMinAppend();
        $this->addBowerJS("@popperjs/core/dist/umd/popper{$min}.js");
        $this->addBowerCSS("bootstrap/dist/css/bootstrap{$min}.css");
        $this->addBowerJS("bootstrap/dist/js/bootstrap{$min}.js");
        if ($this->cfgIcons())
        {
            $this->addBowerCSS("bootstrap-icons/font/bootstrap-icons.css");
        }
    }
    
}
