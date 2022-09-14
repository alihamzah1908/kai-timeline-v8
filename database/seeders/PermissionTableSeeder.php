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
            // 'timeline-list',
            // 'timeline-create',
            // 'timeline-edit',
            // 'timeline-delete',
            // 'timeline.approval-list',
            // 'timeline.approval-create',
            // 'timeline.approval-edit',
            // 'timeline.approval-delete',
            // 'sp3-list',
            // 'sp3-create',
            // 'sp3-edit',
            // 'sp3-delete',
            // 'sp3.approval-list',
            // 'sp3.approval-create',
            // 'sp3.approval-edit',
            // 'sp3.approval-delete',
            // 'pbj-list',
            // 'pbj-create',
            // 'pbj-edit',
            // 'pbj-delete',
            // 'pbj.approval-list',
            // 'pbj.approval-create',
            // 'pbj.approval-edit',
            // 'pbj.approval-delete',
            // 'contract-list',
            // 'contract-create',
            // 'contract-edit',
            // 'contract-delete',
            // 'contract.approval-list',
            // 'contract.approval-create',
            // 'contract.approval-edit',
            // 'contract.approval-delete',
            // 'warehouse-card-list',
            // 'warehouse-card-create',
            // 'warehouse-card-edit',
            // 'warehouse-card-delete',
            // 'warehouse-part-list',
            // 'warehouse-part-create',
            // 'warehouse-part-edit',
            // 'warehouse-part-delete',
            // 'warehouse-waste-list',
            // 'warehouse-waste-create',
            // 'warehouse-waste-edit',
            // 'warehouse-waste-delete',
            // 'vendor-list',
            // 'vendor-create',
            // 'vendor-edit',
            // 'vendor-delete',
            // 'vendor-blacklist-list',
            // 'vendor-blacklist-create',
            // 'vendor-blacklist-edit',
            // 'vendor-blacklist-delete',
            // 'harga-satuan-list',
            // 'harga-satuan-create',
            // 'harga-satuan-edit',
            // 'harga-satuan-delete',
            // 'npp-list',
            // 'npp-create',
            // 'npp-edit',
            // 'npp-delete',
        ];
        foreach ($permissions as $permission) {

            Permission::create(['name' => $permission]);
        }
    }
}
