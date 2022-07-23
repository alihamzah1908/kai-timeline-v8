<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // 'user-list',
            // 'user-create',
            // 'user-edit',
            // 'user-delete',
            // 'role-list',
            // 'role-create',
            // 'role-edit',
            // 'role-delete',
            'timeline-list',
            'timeline-create',
            'timeline-edit',
            'timeline-delete',
            'timeline.approval-list',
            'timeline.approval-create',
            'timeline.approval-edit',
            'timeline.approval-delete',
            'sp3-list',
            'sp3-create',
            'sp3-edit',
            'sp3-delete',
            'sp3.approval-list',
            'sp3.approval-create',
            'sp3.approval-edit',
            'sp3.approval-delete',
            'pbj-list',
            'pbj-create',
            'pbj-edit',
            'pbj-delete',
            'pbj.approval-list',
            'pbj.approval-create',
            'pbj.approval-edit',
            'pbj.approval-delete',
        ];
        foreach ($permissions as $permission) {

            Permission::create(['name' => $permission]);
        }
    }
}
