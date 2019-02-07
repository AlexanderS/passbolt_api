<?php
namespace App\Test\Fixture\Base;

use Cake\Datasource\ConnectionManager;
use Cake\TestSuite\Fixture\TestFixture;

/**
 * AuthenticationTokensFixture
 *
 */
class AuthenticationTokensFixture extends TestFixture
{

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $config = ConnectionManager::get($this->connection())->config();
        $collation = 'utf8mb4_unicode_ci';
        if (isset($config['collation'])) {
            $collation = $config['collation'];
        }

        $this->fields = [
            'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
            'token' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
            'user_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
            'active' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
            'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
            'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
            'type' => ['type' => 'string', 'length' => 16, 'null' => false, 'default' => null, 'collate' => $collation, 'comment' => '', 'precision' => null, 'fixed' => null],
            'data' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => $collation, 'comment' => '', 'precision' => null],
            '_constraints' => [
                'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            ],
            '_options' => [
                'engine' => 'InnoDB',
                'collation' => $collation
            ],
        ];

        $this->records = [];
        parent::init();
    }
}
