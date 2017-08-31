<?php

namespace SAMUEL\Forms;

use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', [
            		'label' => 'NoMe :)',
            		'rules' => 'required|max:255'
            	])
            ->add('email', 'email', [
            		'label' => 'E-M4il :P',
            		'rules' => 'required|max:255|unique:users'
            	]);
    }
}






