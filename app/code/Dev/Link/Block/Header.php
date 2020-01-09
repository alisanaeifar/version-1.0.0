<?php

declare(strict_types=1);

namespace Dev\Link\Block;

use Magento\Framework\View\Element\Template;
use Dev\Link\Model\ResourceModel\Item\Collection;
use Dev\Link\Model\ResourceModel\Item\CollectionFactory;

/**
 * Class Header
 * @package Dev\Link\Block
 */
class Header extends Template
{
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * Header constructor.
     * @param Template\Context $context
     * @param CollectionFactory $collectionFactory
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }


    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->collectionFactory->create()->getItems();
    }
}
