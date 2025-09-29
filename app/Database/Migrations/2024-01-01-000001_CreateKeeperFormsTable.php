<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKeeperFormsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'num_rooms' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true,
                'comment'    => 'Number of rooms in the property',
            ],
            'num_kitchens' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true,
                'comment'    => 'Number of kitchens in the property',
            ],
            'num_bathrooms' => [
                'type'       => 'INT',
                'constraint' => 11,
                'null'       => true,
                'comment'    => 'Number of bathrooms in the property',
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
                'comment'    => 'Customer full name',
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null'       => false,
                'comment'    => 'Customer phone number',
            ],
            'address' => [
                'type'    => 'TEXT',
                'null'    => false,
                'comment' => 'Full property address',
            ],
            'city' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
                'comment'    => 'City name',
            ],
            'postal_code' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => true,
                'comment'    => 'Postal/ZIP code',
            ],
            'town_area' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
                'comment'    => 'Town or area name',
            ],
            'plan' => [
                'type'       => 'ENUM',
                'constraint' => ['Daily', 'Weekly', 'Fortnightly', 'Monthly'],
                'null'       => true,
                'comment'    => 'Service frequency plan',
            ],
            'selected_date' => [
                'type'    => 'DATE',
                'null'    => true,
                'comment' => 'Selected start date for service',
            ],
            'selected_days' => [
                'type'    => 'TEXT',
                'null'    => true,
                'comment' => 'Selected days of week (comma-separated)',
            ],
            'timing' => [
                'type'       => 'ENUM',
                'constraint' => ['Morning', 'Afternoon'],
                'null'       => true,
                'comment'    => 'Preferred time of day',
            ],
            'date' => [
                'type'    => 'DATE',
                'null'    => true,
                'comment' => 'Legacy date field',
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
                'comment' => 'Record creation timestamp',
            ],
            'updated_at' => [
                'type'    => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
                'comment' => 'Record update timestamp',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addKey('name');
        $this->forge->addKey('phone');
        $this->forge->addKey('plan');
        $this->forge->addKey('created_at');

        $this->forge->createTable('keeper_forms', true, [
            'ENGINE' => 'InnoDB',
            'DEFAULT CHARSET' => 'utf8mb4',
            'COLLATE' => 'utf8mb4_unicode_ci',
            'COMMENT' => 'Property booking form submissions',
        ]);
    }

    public function down()
    {
        $this->forge->dropTable('keeper_forms');
    }
}
