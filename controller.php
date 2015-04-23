<?php
namespace Concrete\Package\Subbscribe;

use Package;
use BlockType;
use Concrete\Core\Block\BlockType\Set;

defined('C5_EXECUTE') or die (_("Access Denied"));

class Controller extends Package
{
	protected $pkgHandle = 'subbscribe';
	protected $appVersionRequired = '5.7.3.1';
	protected $pkgVersion = "1.0.0";

	public function getPackageDescription()
	{
		return t('Opt-in popup form for MailChimp and CampaignMonitor');
	}

	public function getPackageName()
	{
		return t('Subbscribe');
	}

	public function install()
	{
		$pkg = parent::install();

		$bt = BlockType::getByHandle('subbscribe');

		if(!is_object($bt)){
			$bt = BlockType::installBlockTypeFromPackage('subbscribe', $pkg);
		}
	}
}