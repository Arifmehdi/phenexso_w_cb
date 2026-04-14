<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BreadCrumb extends Component
{
    public string $image;
    public string $title;
    public string $subtitle;

    public function __construct(
        string $image,
        string $title,
        string $subtitle
    ) {
        $this->image = $image;
        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    public function render()
    {
        return view('components.bread-crumb');
    }
}
