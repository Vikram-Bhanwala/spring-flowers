<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddStatusToKeeperFormsTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('keeper_forms', [
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['open', 'started', 'done', 'closed'],
                'default' => 'open',
                'comment' => 'Lead status',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('keeper_forms', 'status');
    }
}
