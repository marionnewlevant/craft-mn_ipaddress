<?php
namespace Craft;

/**
 * MN IP Address
 *
 * @package   Craft
 * @author    Marion Newlevant
 * @copyright Copyright (c) 2015, Marion Newlevant
 * @license   MIT
 * @link      https://github.com/marionnewlevant/craft-mn_ipaddress
 */

class Mn_IpAddressPlugin extends BasePlugin
{
	public function getName()
	{
		return Craft::t('MN IP Address');
	}

	public function getVersion()
	{
		return '1.0';
	}

	public function getDeveloper()
	{
		return 'Marion Newlevant';
	}

	public function getDeveloperUrl()
	{
		return 'http://marion.newlevant.com';
	}
}
