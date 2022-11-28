<?php
namespace Dhural\SomeThing\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\View\Result\Page;

class Index implements ActionInterface
{
    public function __construct(
        private PageFactory $pageFactory
    ) {
    }

    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}
