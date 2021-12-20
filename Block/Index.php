<?php
namespace AHT\Blog\Block;

class Index extends \Magento\Framework\View\Element\Template
{
	private $postRepository;

	public function __construct(
        \Magento\Framework\View\Element\Template\Context $context, 
        \AHT\Blog\Model\PostRepository $postRepository,
        \AHT\Blog\Model\PostFactory $postFactory
        )
	{
		parent::__construct($context);
		$this->postFactory = $postFactory;
		$this->postRepository = $postRepository;
	}

	public function getBlogInfo()
	{
		return __('AHT Blog module');
	}
	
	public function getPosts()
	{	
		$posts = $this->postRepository->getList();
		// echo "<pre>";
		// var_dump($posts->getData());
		// die;

		return $posts;
	}
}