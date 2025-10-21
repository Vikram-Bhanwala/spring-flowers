<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBlogPostsTable extends Migration
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
            'meta_title' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
                'comment'    => 'SEO meta title',
            ],
            'meta_description' => [
                'type'       => 'TEXT',
                'null'       => true,
                'comment'    => 'SEO meta description',
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
                'comment'    => 'Blog post title',
            ],
            'main_description' => [
                'type'    => 'TEXT',
                'null'    => false,
                'comment' => 'Main blog content',
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
                'comment'    => 'Featured image filename',
            ],
            'image_alt' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
                'comment'    => 'Image alt text for SEO',
            ],
            'date' => [
                'type'    => 'DATE',
                'null'    => false,
                'comment' => 'Publication date',
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
                'comment'    => 'URL-friendly slug',
            ],
            'category' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => false,
                'comment'    => 'Blog category',
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['draft', 'published', 'archived'],
                'default'    => 'draft',
                'comment'    => 'Post status',
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
                'comment' => 'Creation timestamp',
            ],
            'updated_at' => [
                'type'    => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
                'comment' => 'Last update timestamp',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addKey('slug', true); // Unique key for slug
        $this->forge->addKey('category');
        $this->forge->addKey('status');
        $this->forge->addKey('date');
        $this->forge->addKey('created_at');

        $this->forge->createTable('blog_posts', true, [
            'ENGINE' => 'InnoDB',
            'DEFAULT CHARSET' => 'utf8mb4',
            'COLLATE' => 'utf8mb4_unicode_ci',
            'COMMENT' => 'Blog posts management',
        ]);
    }

    public function down()
    {
        $this->forge->dropTable('blog_posts');
    }
}
