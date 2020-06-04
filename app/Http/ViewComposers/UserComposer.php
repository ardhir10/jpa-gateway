<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class UserComposer
{
    public function compose(View $view)
    {
        $view->with('nama', 'nuge');
    }
}
