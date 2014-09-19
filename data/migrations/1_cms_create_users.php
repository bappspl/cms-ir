<?php
use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class CmsCreateUsers extends AbstractMigration
{

    public function up()
    {
        $this->table('cms_users', array())
             ->addColumn('name', 'string')
             ->addColumn('surname', 'string')
             ->addColumn('password', 'string')
             ->addColumn('password_salt', 'string')
             ->addColumn('email', 'string')
             ->addColumn('email_confirmed', 'integer', array('limit' => 1))
             ->addColumn('role', 'integer' , array('limit' => 1))
             ->addColumn('active', 'integer' , array('limit' => 1))
             ->addColumn('registration_date', 'datetime')
             ->addColumn('registration_token', 'string')
             ->save();

        $this->insertValues('cms_users', array(
                'name' => 'string',
                'surname' => 'string',
                'password' => 'string',
                'password_salt' => 'string',
                'email' => 'string',
                'email_confirmed' => 'integer',
                'role' => 'integer',
                'active' => 'integer',
                'registration_date' => 'string',
                'registration_token' => 'string'
            )
        );
    }

    public function insertValues($tableName, $tableColumns)
    {
        $path = fopen ('./data/fixtures/'.$tableName.'.csv',"r");
        while (($data = fgetcsv($path, 1000, ",")) !== FALSE)  {
            $num = count($data);
            print($num);
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
        $this->dropTable('cms_users');
    }
}