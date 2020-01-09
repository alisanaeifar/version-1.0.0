<?php

declare(strict_types=1);

namespace Dev\Link\Block;

/**
 * Class LinksBlock
 * @package Dev\Link\Block
 */
class LinksBlock extends \Magento\Framework\View\Element\Template
{
    /**
     * LinksBlock constructor.
     * @param \Magento\Backend\Block\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getHelloWorld()
    {
        return 'Hello World';
    }

}
?>