<?php
namespace Tickleman\My_Framework_Rocks;

use ITRocks\Framework\Mapper\Component;
use ITRocks\Framework\User;
use Tickleman\My_Framework_Rocks\Code\File;
use Tickleman\My_Framework_Rocks\Code\Snippet;
use Tickleman\My_Framework_Rocks\Code\Variant;

/**
 * Some code
 *
 * @display_order snippet, framework, variant, author, code
 * @representative snippet.name, framework.framework.name, framework.version, variant.name
 * @set Snippet_Codes
 */
class Code
{
	use Component;

	//--------------------------------------------------------------------------------------- $author
	/**
	 * @link Object
	 * @mandatory
	 * @var User
	 */
	public $author;

	//---------------------------------------------------------------------------------------- $files
	/**
	 * @link Collection
	 * @mandatory
	 * @var File[]
	 */
	public $files;

	//------------------------------------------------------------------------------------ $framework
	/**
	 * @link Object
	 * @mandatory
	 * @var Framework\Version
	 */
	public $framework;

	//-------------------------------------------------------------------------------------- $snippet
	/**
	 * @composite
	 * @link Object
	 * @mandatory
	 * @var Snippet
	 */
	public $snippet;

	//-------------------------------------------------------------------------------------- $variant
	/**
	 * @link Object
	 * @mandatory
	 * @var Variant
	 */
	public $variant;

	//------------------------------------------------------------------------------------ __toString
	/**
	 * @return string
	 */
	public function __toString()
	{
		return trim(
			strval($this->snippet) . SP . strval($this->framework) . SP . strval($this->variant)
		);
	}

}
