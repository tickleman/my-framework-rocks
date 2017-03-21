<?php
namespace Tickleman\My_Framework_Rocks\Framework;

use ITRocks\Framework\Mapper\Component;
use Tickleman\My_Framework_Rocks\Framework;

/**
 * A framework version
 *
 * @representative framework.name, version
 * @set Framework_Versions
 */
class Version
{
	use Component;

	//------------------------------------------------------------------------------------ $framework
	/**
	 * @composite
	 * @link Object
	 * @mandatory
	 * @var Framework
	 */
	public $framework;

	//-------------------------------------------------------------------------------------- $version
	/**
	 * @mandatory
	 * @var string
	 */
	public $version;

	//------------------------------------------------------------------------------------ __toString
	/**
	 * @return string
	 */
	public function __toString()
	{
		return trim(strval($this->framework) . SP . strval($this->version));
	}

}
