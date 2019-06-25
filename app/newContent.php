<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newContent extends Model
{
    protected  $fillable = ['title', 'author', 'subject', 'callno', 'class_no', 'accession', 'publisher', 'publish_date', 'edition', 'isbn', 'status', 'description', 'content_image' ];
}
