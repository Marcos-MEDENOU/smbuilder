<?php

namespace App\Http\Controllers;

use Dotlogics\Grapesjs\App\Traits\EditorTrait;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    use EditorTrait;

    


    public function editor(Request $request, Page $page)
    {
        return $this->show_gjs_editor($request, $page);
    }
}
