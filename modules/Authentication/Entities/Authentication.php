<?php namespace Modules\Authentication\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Authentication extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Authentication\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];


}