<?php
namespace Smiles\HelloWorld\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'smiles_helloworld_post';

	protected $_cacheTag = 'smiles_helloworld_post';

	protected $_eventPrefix = 'smiles_helloworld_post';

	protected function _construct()
	{
		$this->_init('Smiles\HelloWorld\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}