<?php

use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
class CmsCreateTest extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */

    public function up()
    {
        $this->table('cms_test', array())
             ->addColumn('name', 'string')
             ->addColumn('surname', 'integer')
             ->save();
        $this->insertValues('cms_test', array('name' => 'string', 'surname' => 'integer'));
    }

    public function insertValues($tableName, $tableColumns)
    {
        $path = fopen ('./data/fixtures/'.$tableName.'.csv',"r");
        while (($data = fgetcsv($path, 1000, ";")) !== FALSE)  {
            $num = count($data);
            //print($num);
            $value = '';
            $i = 0;
            foreach ($tableColumns as $kCol => $vCol) {
                switch ($vCol) {
                    case 'text':
                        $value = $value . $kCol.' = "'.$data[$i]. '", ';
                    break;
                    case 'string':
                        $value = $value . $kCol.' = "'.$data[$i]. '", ';
                    break;
                    case 'integer':
                        $value = $value . $kCol.' = '.$data[$i] . ', ';
                    break;
                }
                $i++;
            }
            $realValue = substr($value, 0, -2);
            $this->adapter->execute('insert into '.$tableName.' set '.$realValue);
        }
        fclose ($path);
    }
    public function down()
    {
        $this->dropTable('cms_test');
    }
}