<?php
namespace Tickleman\My_Framework_Rocks\Code;

use ITRocks\Framework\Mapper\Component;
use ITRocks\Framework\Traits\Has_Name;
use Tickleman\My_Framework_Rocks\Code;

/**
 * Code snippet file
 *
 * @display_order file_name, code
 * @set Code_Files
 */
class File
{
	use Component;
	use Has_Name;

	//----------------------------------------------------------------------------------------- $code
	/**
	 * @composite
	 * @link Object
	 * @mandatory
	 * @var Code
	 */
	public $code;

	//--------------------------------------------------------------------------------------- $source
	/**
	 * @mandatory
	 * @max_length 10000000
	 * @min_length 10
	 * @multiline
	 * @var string
	 */
	public $source;

}
