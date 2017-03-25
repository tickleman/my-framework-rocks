<?php
namespace Tickleman\My_Framework_Rocks\Code;

use Tickleman\My_Framework_Rocks\Code;

/**
 * A 2 snippets comparison
 *
 * @display_order snippet, left, right
 */
class Comparison
{

	//----------------------------------------------------------------------------------------- $left
	/**
	 * @link Object
	 * @var Code
	 */
	public $left;

	//---------------------------------------------------------------------------------------- $right
	/**
	 * @link Object
	 * @var Code
	 */
	public $right;

	//-------------------------------------------------------------------------------------- $snippet
	/**
	 * @link Object
	 * @var Snippet
	 */
	public $snippet;

	//----------------------------------------------------------------------------------- __construct
	/**
	 * @param $left Code
	 * @param $right Code
	 */
	public function __construct(Code $left = null, Code $right = null)
	{
		if (isset($left)) {
			$this->left    = $left;
			$this->snippet = $left->snippet;
		}
		if (isset($right)) {
			$this->right   = $right;
			$this->snippet = $left->snippet;
		}
	}

	//------------------------------------------------------------------------------------ __toString
	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->snippet . ' : ' . $this->left . ' / ' . $this->right;
	}

}
