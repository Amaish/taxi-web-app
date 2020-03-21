<?php namespace Modules\Riders\Entities;

use Modules\Core\Entities\Base;
use Modules\Core\Presenters\PresentableTrait;

class Rider extends Base {

    use PresentableTrait;

    protected $presenter = 'Modules\Riders\Presenters\ModulePresenter';

    protected $guarded = ['_token','exit'];


}