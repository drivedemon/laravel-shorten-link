<?php

namespace App\Models;

use App\Models\ShortenLink;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LogLink extends Model
{
    use HasFactory;

    const LINK_ID = 'link_id';

    protected $table = 'log_links';

    protected $fillable = [
        self::LINK_ID,
    ];

    /**
     * @return BelongsTo
     */
    public function ShortenLink()
    {
        return $this->belongsTo(ShortenLink::class);
    }
}
