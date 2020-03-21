<?php namespace Modules\Drivers\Http\Controllers;

use Modules\Core\Http\Controllers\BaseAdminController;
use Modules\Drivers\Http\Requests\FormRequest;
use Modules\Drivers\Repositories\DriverInterface as Repository;
use Modules\Drivers\Entities\Driver;

class DriversController extends BaseAdminController {

    public function __construct(Repository $repository)
    {
        parent::__construct($repository);
    }

    public function create()
    {
        $module = $this->repository->getTable();
        $form = $this->form(config($module.'.form'), [
            'method' => 'POST',
            'url' => route('admin.'.$module.'.store')
        ]);
        return view('core::admin.create')
            ->with(compact('module','form'));
    }

    public function edit(Driver $model)
    {
        $module = $model->getTable();
        $form = $this->form(config($module.'.form'), [
            'method' => 'PUT',
            'url' => route('admin.'.$module.'.update',$model),
            'model'=>$model
        ]);
        return view('core::admin.edit')
            ->with(compact('model','module','form','id'));
    }

    public function store(FormRequest $request)
    {
        $data = $request->all();

        $data = array_add($data, 'is_phone_verified', true);

        $model = $this->repository->create($data);

        return $this->redirect($request, $model, trans('core::global.new_record'));
    }

    public function update(Driver $model,FormRequest $request)
    {
        $data = $request->all();

        $data['id'] = $model->id;

        $model = $this->repository->update($data);

        return $this->redirect($request, $model, trans('core::global.update_record'));
    }

    public function view($id){

        $module = $this->repository->getTable(); 

        $model = $this->repository->byId($id);

        return view('drivers::admin.show')
            ->with(compact('model','module','id'));

    }

}
