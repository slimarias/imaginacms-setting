<?php namespace Modules\Setting\Composers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Request;

class SidebarViewComposer
{
    public function compose($view)
    {
        $view->items->put('setting', [
            'weight' => 5,
            'request' => "*/$view->prefix/setting",
            'route' => 'dashboard.index',
            'icon-class' => 'fa fa-cog',
            'title' => 'Settings',
        ]);
    }
}