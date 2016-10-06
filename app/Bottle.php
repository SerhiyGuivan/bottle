<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bottle extends Model
{
    protected $table = 'bottles';

    public function nodes()
    {
        return $this->hasMany(Node::class);
    }

    public function setNodesAttribute(){
        $this->attributes['nodes'] = $this->nodes()
            ->orderBy('created_at')
            ->get();
    }
}
