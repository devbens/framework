<?php
/**
 * Create Script object ot be loaded
 *
 * @package Frameworks
 * @subpackage Devbaze
 * @since 1.7.2
 */

declare(strict_types=1);

namespace Frameworks\Assets;

class Script
{
	use SetAssetsPropertiesTrait;

	/**
	 * Load script on footer or not
	 *
	 * @var boolean
	 */
	private bool $inFooter = true;

	/**
	 * Get enqueue properties
	 *
	 * @since 1.7.3
	 * @return array
	 */
	public function getProperties() : array
	{
		return [
			$this->name,
			$this->src,
			$this->deps,
			$this->version,
			$this->inFooter,
		];
	}
}
