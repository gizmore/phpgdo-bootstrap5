<?php
namespace GDO\Bootstrap5;

use GDO\Core\GDO_Module;
use GDO\Core\GDT_Checkbox;
use GDO\UI\GDT_Icon;

/**
 * Bootstrap5 assets.
 *
 * @version 7.0.1
 * @since 6.10.4
 * @author gizmore
 */
final class Module_Bootstrap5 extends GDO_Module
{

	public int $priority = 25;
	public string $license = 'MIT';

	public function getLicenseFilenames(): array
	{
		return [
			'bower_components/bootstrap/LICENSE',
			'bower_components/@popperjs/LICENSE.md',
		];
	}

	public function getDependencies(): array
	{
		return ['Core', 'JQuery'];
	}

	public function getFriendencies(): array
	{
		return ['CSS', 'Javascript'];
	}

	##############
	### Config ###
	##############
	public function getConfig(): array
	{
		return [
			GDT_Checkbox::make('bs5_icons')->initial('0'),
		];
	}

	public function onModuleInit()
	{
		if ($this->cfgIcons())
		{
			GDT_Icon::$iconProvider = [BS5Icon::class, 'iconS'];
		}
	}

	##############
	### Assets ###
	##############

	public function cfgIcons(): string { return $this->getConfigVar('bs5_icons'); }

	public function onIncludeScripts(): void
	{
		$min = $this->cfgMinAppend();
		$this->addBowerJS("@popperjs/core/dist/umd/popper{$min}.js");
		$this->addBowerCSS("bootstrap/dist/css/bootstrap{$min}.css");
		$this->addBowerJS("bootstrap/dist/js/bootstrap{$min}.js");
		if ($this->cfgIcons())
		{
			$this->addBowerCSS('bootstrap-icons/font/bootstrap-icons.css');
		}
	}

}
