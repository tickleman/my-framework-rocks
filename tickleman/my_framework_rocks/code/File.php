<?php
namespace Tickleman\My_Framework_Rocks\Code;

use ITRocks\Framework\Mapper\Component;
use Tickleman\My_Framework_Rocks\Code;

/**
 * Code snippet file
 *
 * @display_order file_name, code
 * @representative file_name, code.snippet.name, code.framework.framework.name,
 *   code.framework.version, code.variant.name
 * @set Code_Files
 */
class File
{
	use Component;

	//----------------------------------------------------------------------------------------- $code
	/**
	 * @composite
	 * @link Object
	 * @mandatory
	 * @var Code
	 */
	public $code;

	//------------------------------------------------------------------------------------ $file_name
	/**
	 * @mandatory
	 * @var string
	 */
	public $file_name;

	//--------------------------------------------------------------------------------------- $source
	/**
	 * @geshi
	 * @mandatory
	 * @max_length 10000000
	 * @min_length 10
	 * @multiline
	 * @var string
	 */
	public $source;

	//------------------------------------------------------------------------------------ __toString
	/**
	 * @return string
	 */
	public function __toString()
	{
		return trim(strval($this->file_name) . SP . strval($this->code));
	}

}
