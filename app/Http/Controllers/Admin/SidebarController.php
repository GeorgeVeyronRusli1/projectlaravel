<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

class SidebarController extends CrudController
{
    public function setupMenu()
    {
        // Add menu items here
        $this->addMenu([
            'text' => 'Books',
            'route' => 'backpack.book.index',
            'icon' => 'la la-book',
        ]);

    }

    protected function addMenu(array $menuItem)
    {
        // Get the current sidebar menu items
        $menu = config('backpack.base.sidebar');
        
        // Add new item to the menu
        $menu[] = $menuItem;
        
        // Save the updated menu to the configuration
        config(['backpack.base.sidebar' => $menu]);
    }
}
