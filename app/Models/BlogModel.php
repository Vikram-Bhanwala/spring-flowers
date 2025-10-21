<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table            = 'blog_posts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'meta_title',
        'meta_description',
        'title',
        'main_description',
        'image',
        'image_alt',
        'date',
        'slug',
        'category',
        'status'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'meta_title'        => 'required|max_length[255]',
        'title'             => 'required|max_length[255]',
        'main_description'  => 'required',
        'date'              => 'required|valid_date',
        'slug'              => 'required|max_length[255]',
        'category'          => 'required|max_length[100]',
        'status'            => 'in_list[draft,published,archived]'
    ];

    protected $validationMessages = [
        'meta_title' => [
            'required' => 'Meta title is required',
            'max_length' => 'Meta title cannot exceed 255 characters'
        ],
        'title' => [
            'required' => 'Title is required',
            'max_length' => 'Title cannot exceed 255 characters'
        ],
        'main_description' => [
            'required' => 'Main description is required'
        ],
        'date' => [
            'required' => 'Date is required',
            'valid_date' => 'Please enter a valid date'
        ],
        'slug' => [
            'required' => 'Slug is required',
            'max_length' => 'Slug cannot exceed 255 characters',
            'is_unique' => 'This slug is already in use'
        ],
        'category' => [
            'required' => 'Category is required',
            'max_length' => 'Category cannot exceed 100 characters'
        ],
        'status' => [
            'in_list' => 'Status must be draft, published, or archived'
        ]
    ];

    /**
     * Generate a unique slug from title
     */
    public function generateSlug($title, $excludeId = null)
    {
        $slug = url_title($title, '-', true);
        $originalSlug = $slug;
        $counter = 1;

        while ($this->isSlugExists($slug, $excludeId)) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    /**
     * Check if slug exists
     */
    private function isSlugExists($slug, $excludeId = null)
    {
        $builder = $this->builder();
        $builder->where('slug', $slug);
        
        if ($excludeId) {
            $builder->where('id !=', $excludeId);
        }

        return $builder->countAllResults() > 0;
    }

    /**
     * Get published posts
     */
    public function getPublishedPosts($limit = null, $offset = 0)
    {
        $builder = $this->builder();
        $builder->where('status', 'published');
        $builder->orderBy('date', 'DESC');
        
        if ($limit) {
            $builder->limit($limit, $offset);
        }

        return $builder->get()->getResultArray();
    }

    /**
     * Get posts by category
     */
    public function getPostsByCategory($category, $limit = null)
    {
        $builder = $this->builder();
        $builder->where('category', $category);
        $builder->where('status', 'published');
        $builder->orderBy('date', 'DESC');
        
        if ($limit) {
            $builder->limit($limit);
        }

        return $builder->get()->getResultArray();
    }

    /**
     * Get post by slug
     */
    public function getPostBySlug($slug)
    {
        return $this->where('slug', $slug)
                   ->where('status', 'published')
                   ->first();
    }
}
