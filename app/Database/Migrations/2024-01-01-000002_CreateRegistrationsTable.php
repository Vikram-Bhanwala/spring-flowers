<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRegistrationsTable extends Migration
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
            'job_type' => [
                'type'       => 'ENUM',
                'constraint' => ['House Keeper', 'Companion', 'Cook', 'Groundman', 'Nanny', 'Security', 'Head House Keeper'],
                'null'       => false,
                'comment'    => 'Type of job being sought',
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
                'comment'    => 'Full name of the applicant',
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'null'       => false,
                'comment'    => 'Phone number',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
                'comment'    => 'Email address',
            ],
            'country_of_living' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => false,
                'comment'    => 'Country where applicant currently lives',
            ],
            'county' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => false,
                'comment'    => 'County/State where applicant lives',
            ],
            'type_of_work' => [
                'type'       => 'ENUM',
                'constraint' => ['live_in_work', 'live_out_work', 'flexible_work'],
                'null'       => false,
                'comment'    => 'Type of work preference',
            ],
            'availability_type' => [
                'type'       => 'ENUM',
                'constraint' => ['full_time_availability', 'part_time_availability', 'flexible_availability'],
                'null'       => false,
                'comment'    => 'Availability preference',
            ],
            'start_date' => [
                'type'       => 'ENUM',
                'constraint' => ['asap_start', 'flexible_start'],
                'null'       => false,
                'comment'    => 'Preferred start date',
            ],
            'message' => [
                'type'    => 'TEXT',
                'null'    => true,
                'comment' => 'Additional message from applicant',
            ],
            'cv_filename' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
                'comment'    => 'Uploaded CV filename',
            ],
            'cv_path' => [
                'type'       => 'VARCHAR',
                'constraint' => 500,
                'null'       => true,
                'comment'    => 'Path to uploaded CV file',
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['pending', 'reviewed', 'contacted', 'hired', 'rejected'],
                'default'    => 'pending',
                'comment'    => 'Application status',
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
                'comment' => 'Registration timestamp',
            ],
            'updated_at' => [
                'type'    => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
                'comment' => 'Last update timestamp',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addKey('email');
        $this->forge->addKey('phone');
        $this->forge->addKey('job_type');
        $this->forge->addKey('status');
        $this->forge->addKey('created_at');

        $this->forge->createTable('registrations', true, [
            'ENGINE' => 'InnoDB',
            'DEFAULT CHARSET' => 'utf8mb4',
            'COLLATE' => 'utf8mb4_unicode_ci',
            'COMMENT' => 'Job seeker registration submissions',
        ]);
    }

    public function down()
    {
        $this->forge->dropTable('registrations');
    }
}
