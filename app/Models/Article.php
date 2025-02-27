<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [

        'list_title',
        'list_author',
        'list_published_date',
        'list_published_date_precision',
        'list_link',
        'list_clean_url',
        'list_excerpt',
        'list_summary',
        'list_rights',
        'list_rank',
        'list_topic',
        'list_country',
        'list_language',
        'list_authors',
        'list_media',
        'list_is_opinion',
        'list_twitter_account',
        'list_score',
    ];
    public function SavedNews()
    {
        return $this->hasMany(SaveNew::class);
    }
}
