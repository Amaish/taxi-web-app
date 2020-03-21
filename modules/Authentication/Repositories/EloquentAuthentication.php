<?php namespace Modules\Authentication\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Repositories\RepositoriesAbstract;

class EloquentAuthentication extends RepositoriesAbstract implements AuthenticationInterface
{

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

}