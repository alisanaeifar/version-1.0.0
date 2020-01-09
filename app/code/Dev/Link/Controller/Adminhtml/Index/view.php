<?php

declare(strict_types=1);

namespace Dev\Link\Controller\Adminhtml\Index;

/**
 * Class View
 * @package Dev\Link\Controller\Adminhtml\Index
 */
class View extends \Magento\Customer\Controller\Adminhtml\Index {

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Layout
     */
    public function execute() {

        $this->initCurrentCustomer();
        $resultLayout = $this->resultLayoutFactory->create();
        return $resultLayout;
    }

}