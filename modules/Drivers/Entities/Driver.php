<?php namespace Modules\Drivers\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Driver extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Drivers\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];


}