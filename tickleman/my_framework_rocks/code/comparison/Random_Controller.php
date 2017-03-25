<?php
namespace Tickleman\My_Framework_Rocks\Code\Comparison;

use ITRocks\Framework\Controller\Parameters;
use ITRocks\Framework\Dao;
use ITRocks\Framework\Widget\Edit\Edit_Controller;
use Tickleman\My_Framework_Rocks\Code\Snippet;
use Tickleman\My_Framework_Rocks\Code\Comparison;

/**
 * Random snippet output controller
 */
class Random_Controller extends Edit_Controller
{

	//------------------------------------------------------------------------------------------- run
	/**
	 * Random comparison controller
	 *
	 * @param $parameters Parameters
	 * @param $form       array
	 * @param $files      array[]
	 * @param $class_name string
	 * @return mixed
	 */
	public function run(Parameters $parameters, array $form, array $files, $class_name)
	{
		// 1 random snippet
		$count   = Dao::count(null, Snippet::class);
		do {
			$snippet = Dao::search(null, Snippet::class, Dao::limit(rand(1, $count), 1));
			$snippet = reset($snippet);
		} while (!($count = count($snippet->codes)));

		// 2 random codes
		$codes = array_values($snippet->codes);
		$left  = rand(0, $count - 1);
		do {
			$right = rand(0, $count - 1);
		} while (($count > 1) && ($left == $right));

		// output comparison
		$comparison = new Comparison($codes[$left], $codes[$right]);
		$parameters->unshift($comparison);
		return parent::run($parameters, $form, $files, $class_name);
	}

}
