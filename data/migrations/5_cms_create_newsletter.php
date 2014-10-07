<?php
use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class CmsCreateNewsletter extends AbstractMigration
{

    public function up()
    {
        $this->table('cms_subscriber', array())
             ->addColumn('email', 'string')
             ->addColumn('first_name', 'string', array('null'=>true))
             ->addColumn('last_name', 'string', array('null'=>true))
             ->addColumn('age', 'integer', array('null'=>true))
             ->addColumn('sex', 'string', array('null'=>true))
             ->addColumn('confirmation_code', 'string', array('null'=>true))
             ->save();

        $this->table('cms_subscriber_group', array())
            ->addColumn('name', 'string')
            ->addColumn('slug', 'string')
            ->addColumn('description', 'text', array('null'=>true))
            ->save();

        $this->table('cms_subscriber_group_connection', array())
            ->addColumn('subscriber_id', 'integer')
            ->addColumn('group_id', 'integer')
            ->addForeignKey('subscriber_id', 'cms_subscriber', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
            ->addForeignKey('group_id', 'cms_subscriber_group', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
            ->save();

        $this->table('cms_newsletter', array())
            ->addColumn('subject', 'string')
            ->addColumn('text', 'text')
            ->addColumn('group', 'text', array('null'=>true))
            ->addColumn('status_id', 'integer')
            ->addForeignKey('status_id', 'cms_status', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
            ->save();

        $this->table('cms_newsletter_settings', array())
            ->addColumn('sender_email', 'string')
            ->addColumn('footer', 'text')
            ->save();
    }

    public function down()
    {
        $this->dropTable('cms_subscriber');
        $this->dropTable('cms_subscriber_group');
        $this->dropTable('cms_subscriber_group_connection');
        $this->dropTable('cms_newsletter');
        $this->dropTable('cms_newsletter_settings');
    }
}