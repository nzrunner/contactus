<?php
/**
 * @package		contactus
 * @copyright   Copyright (c)2013-2018 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license		GNU General Public License version 2 or later
 */

namespace Akeeba\ContactUs\Admin\Model;

use FOF30\Container\Container;
use FOF30\Model\DataModel;

class Items extends DataModel
{
	public function __construct(Container $container, array $config = array())
	{
		parent::__construct($container, $config);

		$this->belongsTo('category', 'Categories');
	}

}