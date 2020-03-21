<?php

namespace Modules\Riders\Forms;

use Kris\LaravelFormBuilder\Form;

class RidersForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text');
    }
}
