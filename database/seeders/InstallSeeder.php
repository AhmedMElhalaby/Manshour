<?php
namespace Database\Seeders;

use App\Models\Admin;
use App\Models\ModelPermission;
use App\Models\ModelRole;
use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class InstallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Admin = (new Admin);
        $Admin->setName('Admin');
        $Admin->setEmail('admin@admin.com');
        $Admin->setPassword('123456');
        $Admin->save();
        $Role = new Role();
        $Role->setName('Admin');
        $Role->save();
        $Role->refresh();
        $Permissions = [
            'Admins',
            'Roles',
            'Permissions',
            'Settings',
            'Faq',
            'Users',
            'Tickets',
            'BankAccounts',
            'Cities',
            'Categories',
        ];
        $Settings = [
            'privacy',
            'commission',
            'about',
            'facebook',
            'instagram',
            'email',
            'mobile',
            'terms',
        ];
        foreach ($Settings as $setting){
            $Setting = new Setting();
            $Setting->setKey($setting);
            $Setting->setName($setting);
            $Setting->setNameAr($setting);
            $Setting->setValue($setting);
            $Setting->setValueAr($setting);
            $Setting->save();
        }
        foreach ($Permissions as $permission){
            $Permission = new Permission;
            $Permission->setName($permission);
            $Permission->save();
        }
        foreach (Permission::all() as $permission){
            $RolePermission = new RolePermission();
            $RolePermission->setPermissionId($permission->getId());
            $RolePermission->setRoleId($Role->getId());
            $RolePermission->save();
        }
        foreach (Role::all() as $role){
            $ModelRole = new ModelRole();
            $ModelRole->setModelId($Admin->getId());
            $ModelRole->setRoleId($role->getId());
            $ModelRole->save();
        }
        foreach (Permission::all() as $permission){
            $ModelPermission = new ModelPermission();
            $ModelPermission->setModelId($Admin->getId());
            $ModelPermission->setPermissionId($permission->getId());
            $ModelPermission->save();
        }
        Artisan::call('passport:install');
    }
}
