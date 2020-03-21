<?php

namespace Modules\Users\Services;

class PermissionManager
{

    private $module;

    public function __construct()
    {
        $this->module = app('modules');
    }

    public function all()
    {
        $permissions = [];
        foreach ($this->module->enabled() as $enabledModule) {
            $configuration = config(strtolower($enabledModule->getName()) . '.permissions');
            if ($configuration) {
                $permissions[$enabledModule->getName()] = $configuration;
            }
        }

        return $permissions;
    }

    public function clean($permissions)
    {
        if (!$permissions) {
            return [];
        }
        $cleanedPermissions = [];
        foreach ($permissions as $permissionName => $checkedPermission) {
            $cleanedPermissions[$permissionName] = $this->getState($checkedPermission);
        }

        return $cleanedPermissions;
    }

    protected function getState($checkedPermission)
    {
        if ($checkedPermission == 'true') {
            return true;
        }

        if ($checkedPermission == 'false') {
            return false;
        }

        return (bool)$checkedPermission;
    }

    public function permissionsAreAllFalse(array $permissions)
    {
        $uniquePermissions = array_unique($permissions);

        if (count($uniquePermissions) > 1) {
            return false;
        }

        $uniquePermission = reset($uniquePermissions);

        $cleanedPermission = $this->getState($uniquePermission);

        return $cleanedPermission === false;
    }
}
