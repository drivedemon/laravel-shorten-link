<?php

namespace App\Models;

use App\Models\LogLink;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ShortenLink extends Model
{
    use HasFactory;

    const CODE = 'code';
    const LINK = 'link';
    const OWNER_IP = 'owner_ip';

    protected $table = 'shorten_links';

    protected $fillable = [
        self::CODE,
        self::LINK,
        self::OWNER_IP,
    ];

    /**
     * @return HasMany
     */
    public function Log(): HasMany
    {
        return $this->hasMany(LogLink::class);
    }
}
