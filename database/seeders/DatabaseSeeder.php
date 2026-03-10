<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '9999999999',
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
        ]);
        Role::insert([
            [
                'name'       => 'admin',
                'guard_name' => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
        $i = 0;

        $permissionArray[$i]['name']       = 'dashboard';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'role_view';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'role_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'role_permission';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'user_view';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'user_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'user_edit';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'appsetting_view';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'district_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'district_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;


        $permissionArray[$i]['name']       = 'block_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'block_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'block_delete';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'panchayat_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'panchayat_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'panchayat_delete';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'category_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'category_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'category_delete';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'experties_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'experties_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'hospital_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'hospital_create';
        $permissionArray[$i]['guard_name'] = 'admin';

        $permissionArray[$i]['name']       = 'doctor_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'doctor_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'doctor_edit';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'banner_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'banner_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'banner_delete';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'service_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'service_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'service_delete';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'ambulance_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'ambulance_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'ambulance_delete';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'ambulance_booking';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'testimonial_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'testimonial_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'testimonial_delete';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'blogs_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'blogs_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'blogs_delete';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'eclinic_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'subscription_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'subscription_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'telemedicine_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'telemedicine_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'telemedicine_delete';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'certificate_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'certificate_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'certificate_delete';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'appointment_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'blood_donation_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'blood_take_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'advertisment_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'advertisment_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'coordinator_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'wallet_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'medicinestore_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'healthcard_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'specialisation_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'specialisation_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'disease_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'disease_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'disease_delete';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'inquiry_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;

        $permissionArray[$i]['name']       = 'pathology_list';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'pathology_create';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;
        $permissionArray[$i]['name']       = 'pathology_delete';
        $permissionArray[$i]['guard_name'] = 'admin';
        $i++;







        Permission::insert($permissionArray);

        $role = Role::find(1);
        if (!blank($role)) {
            $role->givePermissionTo(Permission::all());
        }
        $user = Admin::find(1);
        // $role = Role::find(1);
        if (!blank($user) && !blank($role)) {
            $user->assignRole($role->name);
        }
        $user->givePermissionTo(Permission::all());
    }
}
