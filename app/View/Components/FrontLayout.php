<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FrontLayout extends Component
{

    protected $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title='')
    {
        //
        $this->title=$title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.front',[
            'title'=>$this->title
        ]);
    }
}
