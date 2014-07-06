<?php

use Phinx\Migration\AbstractMigration;

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
        $this->insertValues('cms_test');
    }

    public function down()
    {
        $this->dropTable('cms_test');

    }

    public function insertValues($arrayData)
    {
        $con=mysqli_connect("localhost","root","","cms-ir");
        $baza_host=("localhost"); 
        $baza_login=("root"); 
        $baza_haslo=(""); 
        $baza_nazwa=("cms-ir");
    

        $polaczenie = mysql_connect($baza_host, $baza_login, $baza_haslo);
        $db = mysql_select_db($baza_nazwa);

        mysql_query("insert into cms_test set name='aaa', surname=12");       
    }
}