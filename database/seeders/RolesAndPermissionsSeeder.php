<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        $pers = [
            'dashboard' => [
                'access-dashboard',
                'dashboard-manage',
            ],
            'admin-user' => [
                'admin-user-manage',
                'admin-user-add',
                'admin-user-edit',
                'admin-user-delete',
                'admin-user-impersonate',
                'admin-user-access-dashboard',
            ],
            'user' => [
                'user-manage',
                'user-add',
                'user-edit',
                'user-delete',
                'user-impersonate',
                'user-access-dashboard',
            ],
            'permission' => [
                'permission-manage',
                'permission-add',
                'permission-edit',
                'permission-delete',
                'permission-change',
            ],
            'role' => [
                'role-manage',
                'role-add',
                'role-edit',
                'role-delete',
            ],
            'app-setting' => [
                'app-setting-manage',
                'app-setting-add',
                'app-setting-edit',
                'app-setting-delete',
            ],
        ];
        foreach ($pers as $per => $val) {
            foreach ($val as $name) {
                Permission::create([
                    'module' => $per,
                    'name' => $name,
                    'removable' => 0,
                ]);
            }
        }

        $superadmin = Role::create(['name' => 'superadmin', 'removable' => 0]);
        $admin = Role::create(['name' => 'admin', 'removable' => 0]);
        $admin->givePermissionTo(Permission::all());
        $teacher = Role::create(['name' => 'teacher', 'removable' => 0]);
        $student = Role::create(['name' => 'student', 'removable' => 0]);
        $parent = Role::create(['name' => 'parent', 'removable' => 0]);
        $accountant = Role::create(['name' => 'accountant', 'removable' => 0]);
        $librarian = Role::create(['name' => 'librarian', 'removable' => 0]);
        $librarian = Role::create(['name' => 'committee', 'removable' => 0]);
    }
}
