<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'email' => 'admin@admin.com',
            'password' => 'admin',
            'created' => date('Y-m-d'),
            'modified' => date('Y-m-d')
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
