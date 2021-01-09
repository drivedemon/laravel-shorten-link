<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogLink extends Model
{
    use HasFactory;

    const LINK_ID = 'link_id';

    protected $table = 'log_links';

    protected $fillable = [
        self::LINK_ID,
    ];
}
