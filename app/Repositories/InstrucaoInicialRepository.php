<?php

namespace App\Repositories;

use App\Models\InstrucaoInicial;
use InfyOm\Generator\Common\BaseRepository;

class InstrucaoInicialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'instrucaoTxt' => 'like'
    ];

    public function boot()
    {
        $this->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return InstrucaoInicial::class;
    }
}
