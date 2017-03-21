<?php
namespace Tickleman\My_Framework_Rocks\Code;

use ITRocks\Framework\Traits\Has_Name;
use Tickleman\My_Framework_Rocks\Code;

/**
 * Code snippet
 *
 * @display_order name, codes
 */
class Snippet
{
	use Has_Name;

	//---------------------------------------------------------------------------------------- $codes
	/**
	 * @link Collection
	 * @var Code[]
	 */
	public $codes;

}
