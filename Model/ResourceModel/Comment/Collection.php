<?php
namespace AHT\Blog\Model\ResourceModel\Comment;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'cmt_id';
    protected $_eventPrefix = 'blog_comments_collection';
    protected $_eventObject = 'comment_collection';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('AHT\Blog\Model\Comment', 'AHT\Blog\Model\ResourceModel\Comment');
    }
}
