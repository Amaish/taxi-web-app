<?php

namespace Modules\Drivers\Sidebar;


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
            $group->item('Drivers',function(Item $item){
                $item->weight(config('drivers.sidebar.weight'));
                $item->icon(config('drivers.sidebar.icon'));
                $item->route('admin.drivers.index');
                $item->authorize($this->auth->hasAccess('drivers.index'));
            });
        });

        return $menu;
    }
}
