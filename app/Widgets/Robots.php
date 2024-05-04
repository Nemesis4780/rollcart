<?php

namespace App\Widgets;

use Statamic\Widgets\Widget;

class Robots extends Widget
{

    // LEARN: https://www.martyfriedel.com/blog/writing-an-addon-for-statamic-aka-learning-to-love-the-addonserviceprovider

    /**
     * The HTML that should be shown in the widget.
     *
     * @return string|\Illuminate\View\View
     */
    public function html()
    {

       $robotsTxt = file_get_contents( base_path().'/public/.htaccess' );
        return view('widgets.robots',
            ['robotsTxt' => $robotsTxt]
        );
    }

    public function test() {

    }
}
