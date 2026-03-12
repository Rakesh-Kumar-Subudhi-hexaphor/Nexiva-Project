<?php

namespace App\View\Components\frontend;

use App\Models\Breadcrumb;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Banner extends Component
{
    public $breadcrumb;
    public $title;
    public function __construct($pageId, $title)
    {
        $this->breadcrumb = Breadcrumb::where('page_id', $pageId)->first();
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.banner');
    }
}
