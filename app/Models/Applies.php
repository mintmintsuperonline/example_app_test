<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applies extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'applies';

        /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function branch()
    {
        return $this->belongsTo(Branches::class);
    }
}
