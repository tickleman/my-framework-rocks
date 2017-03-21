<?php
namespace Tickleman\My_Framework_Rocks;

use ITRocks\Framework\Traits\Has_Name;
use Tickleman\My_Framework_Rocks\Framework\Programming_Language;
use Tickleman\My_Framework_Rocks\Framework\Version;

/**
 * A programming framework
 *
 * @display_order name, language, versions
 */
class Framework
{
	use Has_Name;

	//------------------------------------------------------------------------------------- $language
	/**
	 * @link Object
	 * @mandatory
	 * @var Programming_Language
	 */
	public $language;

	//------------------------------------------------------------------------------------- $versions
	/**
	 * @link Collection
	 * @mandatory
	 * @var Version[]
	 */
	public $versions;

}
