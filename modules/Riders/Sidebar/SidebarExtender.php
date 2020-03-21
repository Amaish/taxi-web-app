<?php

namespace Modules\Riders\Sidebar;


use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Maatwebsite\Sidebar\SidebarExtender as PackageSideBarExtender;
use Modules\Core\Sidebar\BaseSidebarExtender;

class SidebarExtender extends BaseSidebarExtender implements PackageSideBarExtender
{
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::global.menus.content'), function (Group $group)
        {
            $group->item('Riders',function(Item $item){
                $item->weight(config('riders.sidebar.weight'));
                $item->icon(config('riders.sidebar.icon'));
                $item->route('admin.riders.index');
                $item->authorize($this->auth->hasAccess('riders.index'));
            });
        });

        return $menu;
    }
}