<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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

        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',           
            'category-list',
            'category-create',
            'category-edit',
            'category-delete',
            'category-view',           
            'post-list',
            'post-create',
            'post-edit',
            'post-delete',
            'post-view',
            'examination-list',
            'examination-create',
            'examination-edit',
            'examination-delete',
            'examination-view', 
            'examinationmode-list',
            'examinationmode-create',
            'examinationmode-edit',
            'examinationmode-delete',
            'examinationmode-view',  
            'examinationtype-list',
            'examinationtype-create',
            'examinationtype-edit',
            'examinationtype-delete',
            'examinationtype-view', 
            'question-list',
            'question-create',
            'question-edit',
            'question-delete',
            'question-view', 
            'groupquestion-list',
            'groupquestion-create',
            'groupquestion-edit',
            'groupquestion-delete',
            'groupquestion-view', 
            'appuser-list',
            'appuser-create',
            'appuser-edit',
            'appuser-delete',
            'appuser-view', 
            'menu-list',
            'menu-create',
            'menu-edit',
            'menu-delete',
            'menu-view',                      
            'vocabulary-list',
            'vocabulary-create',
            'vocabulary-edit',
            'vocabulary-delete',
            'vocabulary-view',                             
            'vocabularymode-list',
            'vocabularymode-create',
            'vocabularymode-edit',
            'vocabularymode-delete',
            'vocabularymode-view',                          
            'vocabularytype-list',
            'vocabularytype-create',
            'vocabularytype-edit',
            'vocabularytype-delete',
            'vocabularytype-view',              
            'learnvocabulary-list',
            'learnvocabulary-create',
            'learnvocabulary-edit',
            'learnvocabulary-delete',
            'learnvocabulary-view',             
            'package-list',
            'package-create',
            'package-edit',
            'package-delete',
            'package-view',           
            'part-list',
            'part-create',
            'part-edit',
            'part-delete',
            'part-view',
            'examination-appuser'
        ];
        // create permissions
        foreach ($permissions  as $permission) {
            Permission::create(['name' => $permission]);
        }

        // create roles and assign created permissions
        $role = Role::create(['name' => 'editor'])
            ->givePermissionTo([
                'examination-edit',
                'examination-view'
            ]);
        
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'examination-appuser'])
            ->givePermissionTo([
                'examination-view'
            ]);    
    }
}
