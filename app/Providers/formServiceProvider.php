<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;
class formServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //  // Register the form components
      Form::component('bsTextName', 'components.form.textName', ['ename', 'value' => null, 'attributes' => []]);
      Form::component('bsTextContact', 'components.form.textContact', ['econtact', 'value' => null, 'attributes' => []]);
      Form::component('bsTextSalary', 'components.form.textSalary', ['esalary', 'value' => null, 'attributes' => []]);
      Form::component('bsTextArea', 'components.form.textarea', ['eaddress', 'value' => null, 'attributes' => []]);
      Form::component('bsSubmit', 'components.form.submit', ['value' => 'Submit', 'attributes' => []]);
      Form::component('hidden', 'components.form.hidden', ['name', 'value' => null, 'attributes' => []]);
    }
}
