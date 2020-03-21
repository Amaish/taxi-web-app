<?php namespace Modules\Drivers\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentDriver extends RepositoriesAbstract implements DriverInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}