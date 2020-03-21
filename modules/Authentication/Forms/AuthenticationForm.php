<?php namespace Modules\Authentication\Forms;

use Kris\LaravelFormBuilder\Form;

class AuthenticationForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('email', 'text',[
                'attr'=>['required','email',
                    'class'=>'form-control',
                    'placeholder'=>'Email',
                    'autocomplete'=>'off'
                ]
            ])
            ->add('password', 'password',[
                'attr'=>[
                    'required',
                    'class'=>'form-control',
                    'placeholder'=>'Password',
                    'autocomplete'=>'off'
                ]
            ])
            ->add('login', 'submit',[
                'attr'=>[
                    'class'=>'btn btn-custom btn-lg btn-block text-uppercase waves-effect waves-light'
                ]
            ]);
    }
}