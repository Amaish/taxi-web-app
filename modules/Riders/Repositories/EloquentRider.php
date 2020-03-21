<?php namespace Modules\Riders\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentRider extends RepositoriesAbstract implements RiderInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}