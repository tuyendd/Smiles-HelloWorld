<?php 
namespace Smiles\HelloWorld\Model;
 
 
class PostManagement {

	/**
	 * {@inheritdoc}
	 */
	public function getPost($param=null)
	{
		return 'api GET return the $param ' . $param;
	}
}