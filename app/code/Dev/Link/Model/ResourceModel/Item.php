<?php

declare(strict_types=1);

namespace Dev\Link\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
/**
 * Class Item
 * @package Dev\ProductComments\Model\ResourceModel
 */
class Item extends AbstractDb {
    public function _construct(){
        $this->_init("dev_link_item","id");
    }
}