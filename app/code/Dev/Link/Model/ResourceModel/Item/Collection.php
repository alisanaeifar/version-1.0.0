<?php

declare(strict_types=1);

namespace Dev\Link\Model\ResourceModel\Item;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Dev\Link\Model\Item;
use Dev\Link\Model\ResourceModel\Item as ItemResource;
/**
 * Class Collection
 * @package Dev\ProductComments\Model\ResourceModel\Item
 */
class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';
    protected function _construct()
    {
        $this->_init("Dev\Link\Model\Item", "Dev\Link\Model\ResourceModel\Item");
    }
}
