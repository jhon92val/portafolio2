<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        Form ::component('text','components.form.text',['name','value' => null, 'attributes' => []]);
        Form ::component('textarea','components.form.textarea',['name','value' => null, 'attributes' => []]);
        Form ::component('submit','components.form.submit',['name','value' => null, 'attributes' => []]);
        Form ::component('text','components.form.text',['name','value' => null, 'attributes' => []]);
        Form ::component('text','components.form.text',['name','value' => null, 'attributes' => []]);
        Form ::component('text','components.form.text',['name','value' => null, 'attributes' => []]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
