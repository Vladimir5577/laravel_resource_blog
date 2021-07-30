<?php

namespace App\Admin\Widgets;

use \SleepingOwl\Admin\Facades\Template as AdminTemplate;
use SleepingOwl\Admin\Widgets\Widget;

class NavigationUserBlock extends Widget
{
    /**
     * @return string
     * @throws \Throwable
     */
    public function toHtml()
    {
        return view('blocks.admin.logout_widget', ['user' => auth()->user()])->render();
    }

    /**
     * @return string|array
     */
    public function template()
    {
        return AdminTemplate::getViewPath('_partials.header');
    }

    /**
     * @return string
     */
    public function block()
    {
        return 'navbar.right';
    }
}