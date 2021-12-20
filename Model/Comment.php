<?php
namespace AHT\Blog\Model;

class Comment extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'blog_comments';

	protected $_cacheTag = 'blog_comments';

	protected $_eventPrefix = 'blog_comments';

	protected function _construct()
	{
		$this->_init('AHT\Blog\Model\ResourceModel\Comment');
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
