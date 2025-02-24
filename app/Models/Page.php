<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Page extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'priority',
        'parent_id',
        'content',
        'meta_title',
        'meta_description',
        'layout',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'priority' => 'integer'
    ];

    // Relaciones
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Page::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Page::class, 'parent_id');
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('priority')->orderBy('name');
    }

    public function scopeRoot($query)
    {
        return $query->whereNull('parent_id');
    }

    // Eventos
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($page) {
            if (empty($page->slug)) {
                $page->slug = Str::slug($page->name);
            }   
            
            if (empty($page->meta_title)) {
                $page->meta_title = $page->name;
            }
        });
    }

    // Métodos de ayuda
    public function getUrl(): string
    {
        return url($this->slug);
    }

    public function hasChildren(): bool
    {
        return $this->children()->count() > 0;
    }

    public function isRoot(): bool
    {
        return is_null($this->parent_id);
    }

    public function getPath(): string
    {
        $path = collect([$this->slug]);
        
        $parent = $this->parent;
        while ($parent) {
            $path->prepend($parent->slug);
            $parent = $parent->parent;
        }
        
        return $path->implode('/');
    }
}
