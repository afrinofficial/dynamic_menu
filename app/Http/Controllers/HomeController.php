<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{

    public function menu()
    {
        $categories = Category::all();

        return view('menu', compact('categories'));
    }

    public function buildTreeView($categories, $parent = null, $level = 0)
    {
        $html = '';

        // Filter and sort categories by priority
        $filteredCategories = $categories->where('parent_id', $parent)->sortBy('priority');

        if ($filteredCategories->count() > 0) {
            $html .= $level == 0 ? '<ul class="nav navbar-nav">' : '<ul class="dropdown-menu">';

            foreach ($filteredCategories as $category) {
                $html .= '<li><a href="#">' . $category->category . '<span class="caret"></span></a>';
                // Use $this-> to reference the method within the class
                $html .= $this->buildTreeView($categories, $category->id, $level + 1);

                $html .= '</li>';
            }

            $html .= '</ul>';
        }

        return $html;
    }
}
