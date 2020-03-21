<?php

namespace Modules\Drivers\Forms;

use Kris\LaravelFormBuilder\Form;

class DriversForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', [ 
                'rules' => 'required|min:5',
                'error_messages' => [
                    'name.required' => 'The name field is mandatory'
                ]
            ])
            ->add('phone','text', [ 
                'rules' => 'required|min:10',
                'error_messages' => [
                    'phone.required' => 'The phone field is mandatory.'
                ]
            ])
            ->add('email','email', [
                'rules' => 'required',
                'error_messages' => [
                    'email.required' => 'The email field is mandatory.'
                ]
            ])
            ->add('address','text', [
                'rules' => 'required|min:5',
                'error_messages' => [
                    'address.required' => 'The address field is mandatory.'
                ]
            ])
            ->add('city','text', [
                'rules' => 'required|min:5',
                'error_messages' => [
                    'city.required' => 'The city field is mandatory.'
                ]
            ]);
    }
}
