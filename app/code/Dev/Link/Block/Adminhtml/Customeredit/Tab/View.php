<?php

declare(strict_types=1);

namespace Dev\Link\Block\Adminhtml\Customeredit\Tab;

/**
 * Class View
 * @package Dev\Link\Block\Adminhtml\Customeredit\Tab
 */
class View extends \Magento\Backend\Block\Template implements \Magento\Ui\Component\Layout\Tabs\TabInterface
{
    /**
     * @var string
     */
    protected $_template = 'tab/customtab_view.phtml';//your template file path

    /**
     * View constructor.
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->_coreRegistry->registry(\Magento\Customer\Controller\RegistryConstants::CURRENT_CUSTOMER_ID);
    }

    /**
     * @return \Magento\Framework\Phrase|string
     */
    public function getTabLabel()
    {
        return __('Custom Tab');
    }

    /**
     * @return \Magento\Framework\Phrase|string
     */
    public function getTabTitle()
    {
        return __('Custom Tab');
    }

    /**
     * @return bool
     */
    public function canShowTab()
    {
        if ($this->getCustomerId()) {
            return true;
        }
        return false;
    }

    /**
     * @return bool
     */
    public function isHidden()
    {
        if ($this->getCustomerId()) {
            return false;
        }
        return true;
    }

    /**
     * @return string
     */
    public function getTabClass()
    {
        return '';
    }

    /**
     * @return string
     */
    public function getTabUrl()
    {
        return '';
    }

    /**
     * @return bool
     */
    public function isAjaxLoaded()
    {
        return false;
    }
}