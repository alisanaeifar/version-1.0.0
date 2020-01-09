<?php

declare(strict_types=1);

namespace Dev\Link\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
/**
 * Class InstallSchema
 * @package Dev\ProductComments\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Zend_Db_Exception
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $table = $setup->getConnection()->newTable(
            $setup->getTable('dev_link_item')
        )->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            ['identity'=> true, 'nullable' => false, 'primary'=> true],
            'Item Id'
        )->addColumn(
            'status',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Status Name'
        )->addColumn(
            'created_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
            'Created At'
        )->addIndex(
            $setup->getIdxName('dev_link_item', ['status']),
            ['status']
        )->setComment(
            'SampleItem'
        );
        $setup->getConnection()->createTable($table);
        $setup->endSetup();
    }
}
