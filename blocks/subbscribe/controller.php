<?php
namespace Concrete\Package\Subbscribe\Block\Subbscribe;

use Concrete\Core\Block\BlockController;
use Core;

// folder indeling gebruiken zoals in de gratis shop van c5

class Controller extends BlockController
{
	protected $btTable = "btSubbscribe";
	protected $btInterfaceWidth = "650";
	protected $btInterfaceHeight = "500";
	protected $btDefaultSet = "Mail";
	protected $btIgnorePageThemeGridFrameworkContainer = true;

	public function getBlockTypeDescription()
	{
		return t('Opt-in popup form for MailChimp and CampaignMonitor');
	}

	public function getBlockTypeName()
	{
		return t('Subbscribe');
	}

	public function on_start()
	{
		$al = \Concrete\core\Asset\AssetList::getInstance();

		$al->register(
			'javascript', 'subbscribe', 'blocks/subbscribe/assets/subbscribe.js',
			array('version' => '2.0', 'minify' => true, 'combine' => true),
			'subbscribe'
		);

		$al->register(
			'css', 'subbscribe', 'blocks/subbscribe/assets/subbscribe.css',
			array('version' => '2.0', 'minify' => true, 'combine' => true),
			'subbscribe'
		);

		$al->registerGroup('subbscribe', array(
			array('css', 'subbscribe'),
			array('javascript', 'subbscribe')
		));
	}

	public function add()
	{

	}

	public function edit()
	{

	}

	public function view()
	{

	}

	public function registerViewAssets()
	{
		$this->requireAsset('subbscribe'); //insert name of the asset group
	}
}