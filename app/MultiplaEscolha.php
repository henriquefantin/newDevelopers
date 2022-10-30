<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idUser
 * @property int $exercicio
 * @property int $resposta
 * @property User $user
 */
class MultiplaEscolha extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'multiplaescolha';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['idUser', 'exercicio', 'resposta'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'idUser');
    }
}
