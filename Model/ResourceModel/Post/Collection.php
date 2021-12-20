<?php
namespace AHT\Blog\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'post_id';
    protected $_eventPrefix = 'aht_blog_post_collection';
    protected $_eventObject = 'post_collection';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('AHT\Blog\Model\Post', 'AHT\Blog\Model\ResourceModel\Post');
    }

    protected function _initSelect()
    {   
        parent::_initSelect();
        $this->getSelect()
            ->joinleft('blog_comments as item',
                'main_table.post_id=item.post_id', 
                array('main_table.*', 'count(item.cmt_id) as sl',
                ))
                ->group('main_table.post_id');
    }
}
