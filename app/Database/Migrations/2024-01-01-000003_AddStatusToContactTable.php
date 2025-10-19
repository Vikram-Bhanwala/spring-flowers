<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddStatusToContactTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('contact', [
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
        $this->forge->dropColumn('contact', 'status');
    }
}
