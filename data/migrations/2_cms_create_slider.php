<?php
use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class CmsCreateSlider extends AbstractMigration
{

    public function up()
    {
        $this->table('cms_slider', array())
             ->addColumn('name', 'string')
             ->addColumn('slug', 'string')
             ->addColumn('status_id', 'integer')
             ->save();

        $this->table('cms_slider_item', array())
            ->addColumn('slider_id', 'integer')
            ->addColumn('name', 'string')
            ->addColumn('slug', 'string')
            ->addColumn('image', 'string')
            ->addColumn('status_id', 'integer')
            ->addColumn('position', 'integer')
            ->addForeignKey('slider_id', 'cms_slider', 'id')
            ->save();
    }
    public function down()
    {
        $this->dropTable('cms_slider');
        $this->dropTable('cms_slider_item');
    }
}