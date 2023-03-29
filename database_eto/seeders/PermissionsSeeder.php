<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create default permissions
        Permission::create(['name' => 'list actions']);
        Permission::create(['name' => 'view actions']);
        Permission::create(['name' => 'create actions']);
        Permission::create(['name' => 'update actions']);
        Permission::create(['name' => 'delete actions']);

        Permission::create(['name' => 'list actionstypes']);
        Permission::create(['name' => 'view actionstypes']);
        Permission::create(['name' => 'create actionstypes']);
        Permission::create(['name' => 'update actionstypes']);
        Permission::create(['name' => 'delete actionstypes']);

        Permission::create(['name' => 'list apartments']);
        Permission::create(['name' => 'view apartments']);
        Permission::create(['name' => 'create apartments']);
        Permission::create(['name' => 'update apartments']);
        Permission::create(['name' => 'delete apartments']);

        Permission::create(['name' => 'list apartmentbalconyloggiatypes']);
        Permission::create(['name' => 'view apartmentbalconyloggiatypes']);
        Permission::create(['name' => 'create apartmentbalconyloggiatypes']);
        Permission::create(['name' => 'update apartmentbalconyloggiatypes']);
        Permission::create(['name' => 'delete apartmentbalconyloggiatypes']);

        Permission::create(['name' => 'list allapartmentcountrooms']);
        Permission::create(['name' => 'view allapartmentcountrooms']);
        Permission::create(['name' => 'create allapartmentcountrooms']);
        Permission::create(['name' => 'update allapartmentcountrooms']);
        Permission::create(['name' => 'delete allapartmentcountrooms']);

        Permission::create(['name' => 'list apartmentglazingtypes']);
        Permission::create(['name' => 'view apartmentglazingtypes']);
        Permission::create(['name' => 'create apartmentglazingtypes']);
        Permission::create(['name' => 'update apartmentglazingtypes']);
        Permission::create(['name' => 'delete apartmentglazingtypes']);

        Permission::create(['name' => 'list apartmentrepairtypes']);
        Permission::create(['name' => 'view apartmentrepairtypes']);
        Permission::create(['name' => 'create apartmentrepairtypes']);
        Permission::create(['name' => 'update apartmentrepairtypes']);
        Permission::create(['name' => 'delete apartmentrepairtypes']);

        Permission::create(['name' => 'list apartmentstatuses']);
        Permission::create(['name' => 'view apartmentstatuses']);
        Permission::create(['name' => 'create apartmentstatuses']);
        Permission::create(['name' => 'update apartmentstatuses']);
        Permission::create(['name' => 'delete apartmentstatuses']);

        Permission::create(['name' => 'list apartmenttypes']);
        Permission::create(['name' => 'view apartmenttypes']);
        Permission::create(['name' => 'create apartmenttypes']);
        Permission::create(['name' => 'update apartmenttypes']);
        Permission::create(['name' => 'delete apartmenttypes']);

        Permission::create(['name' => 'list allbanks']);
        Permission::create(['name' => 'view allbanks']);
        Permission::create(['name' => 'create allbanks']);
        Permission::create(['name' => 'update allbanks']);
        Permission::create(['name' => 'delete allbanks']);

        Permission::create(['name' => 'list banksprograms']);
        Permission::create(['name' => 'view banksprograms']);
        Permission::create(['name' => 'create banksprograms']);
        Permission::create(['name' => 'update banksprograms']);
        Permission::create(['name' => 'delete banksprograms']);

        Permission::create(['name' => 'list buildingmaterials']);
        Permission::create(['name' => 'view buildingmaterials']);
        Permission::create(['name' => 'create buildingmaterials']);
        Permission::create(['name' => 'update buildingmaterials']);
        Permission::create(['name' => 'delete buildingmaterials']);

        Permission::create(['name' => 'list allbuildings']);
        Permission::create(['name' => 'view allbuildings']);
        Permission::create(['name' => 'create allbuildings']);
        Permission::create(['name' => 'update allbuildings']);
        Permission::create(['name' => 'delete allbuildings']);

        Permission::create(['name' => 'list buildingsstatuses']);
        Permission::create(['name' => 'view buildingsstatuses']);
        Permission::create(['name' => 'create buildingsstatuses']);
        Permission::create(['name' => 'update buildingsstatuses']);
        Permission::create(['name' => 'delete buildingsstatuses']);

        Permission::create(['name' => 'list allcardinaldirections']);
        Permission::create(['name' => 'view allcardinaldirections']);
        Permission::create(['name' => 'create allcardinaldirections']);
        Permission::create(['name' => 'update allcardinaldirections']);
        Permission::create(['name' => 'delete allcardinaldirections']);

        Permission::create(['name' => 'list cities']);
        Permission::create(['name' => 'view cities']);
        Permission::create(['name' => 'create cities']);
        Permission::create(['name' => 'update cities']);
        Permission::create(['name' => 'delete cities']);

        Permission::create(['name' => 'list allcommerce']);
        Permission::create(['name' => 'view allcommerce']);
        Permission::create(['name' => 'create allcommerce']);
        Permission::create(['name' => 'update allcommerce']);
        Permission::create(['name' => 'delete allcommerce']);

        Permission::create(['name' => 'list commercepurposes']);
        Permission::create(['name' => 'view commercepurposes']);
        Permission::create(['name' => 'create commercepurposes']);
        Permission::create(['name' => 'update commercepurposes']);
        Permission::create(['name' => 'delete commercepurposes']);

        Permission::create(['name' => 'list allcontacts']);
        Permission::create(['name' => 'view allcontacts']);
        Permission::create(['name' => 'create allcontacts']);
        Permission::create(['name' => 'update allcontacts']);
        Permission::create(['name' => 'delete allcontacts']);

        Permission::create(['name' => 'list developers']);
        Permission::create(['name' => 'view developers']);
        Permission::create(['name' => 'create developers']);
        Permission::create(['name' => 'update developers']);
        Permission::create(['name' => 'delete developers']);

        Permission::create(['name' => 'list developeroffices']);
        Permission::create(['name' => 'view developeroffices']);
        Permission::create(['name' => 'create developeroffices']);
        Permission::create(['name' => 'update developeroffices']);
        Permission::create(['name' => 'delete developeroffices']);

        Permission::create(['name' => 'list districts']);
        Permission::create(['name' => 'view districts']);
        Permission::create(['name' => 'create districts']);
        Permission::create(['name' => 'update districts']);
        Permission::create(['name' => 'delete districts']);

        Permission::create(['name' => 'list alldocs']);
        Permission::create(['name' => 'view alldocs']);
        Permission::create(['name' => 'create alldocs']);
        Permission::create(['name' => 'update alldocs']);
        Permission::create(['name' => 'delete alldocs']);

        Permission::create(['name' => 'list docstypes']);
        Permission::create(['name' => 'view docstypes']);
        Permission::create(['name' => 'create docstypes']);
        Permission::create(['name' => 'update docstypes']);
        Permission::create(['name' => 'delete docstypes']);

        Permission::create(['name' => 'list formofpayments']);
        Permission::create(['name' => 'view formofpayments']);
        Permission::create(['name' => 'create formofpayments']);
        Permission::create(['name' => 'update formofpayments']);
        Permission::create(['name' => 'delete formofpayments']);

        Permission::create(['name' => 'list allklasses']);
        Permission::create(['name' => 'view allklasses']);
        Permission::create(['name' => 'create allklasses']);
        Permission::create(['name' => 'update allklasses']);
        Permission::create(['name' => 'delete allklasses']);

        Permission::create(['name' => 'list mainpagesliders']);
        Permission::create(['name' => 'view mainpagesliders']);
        Permission::create(['name' => 'create mainpagesliders']);
        Permission::create(['name' => 'update mainpagesliders']);
        Permission::create(['name' => 'delete mainpagesliders']);

        Permission::create(['name' => 'list allnews']);
        Permission::create(['name' => 'view allnews']);
        Permission::create(['name' => 'create allnews']);
        Permission::create(['name' => 'update allnews']);
        Permission::create(['name' => 'delete allnews']);

        Permission::create(['name' => 'list newstypes']);
        Permission::create(['name' => 'view newstypes']);
        Permission::create(['name' => 'create newstypes']);
        Permission::create(['name' => 'update newstypes']);
        Permission::create(['name' => 'delete newstypes']);

        Permission::create(['name' => 'list okrugs']);
        Permission::create(['name' => 'view okrugs']);
        Permission::create(['name' => 'create okrugs']);
        Permission::create(['name' => 'update okrugs']);
        Permission::create(['name' => 'delete okrugs']);

        Permission::create(['name' => 'list allpaymentforms']);
        Permission::create(['name' => 'view allpaymentforms']);
        Permission::create(['name' => 'create allpaymentforms']);
        Permission::create(['name' => 'update allpaymentforms']);
        Permission::create(['name' => 'delete allpaymentforms']);

        Permission::create(['name' => 'list socialmedias']);
        Permission::create(['name' => 'view socialmedias']);
        Permission::create(['name' => 'create socialmedias']);
        Permission::create(['name' => 'update socialmedias']);
        Permission::create(['name' => 'delete socialmedias']);

        Permission::create(['name' => 'list socialmediatypes']);
        Permission::create(['name' => 'view socialmediatypes']);
        Permission::create(['name' => 'create socialmediatypes']);
        Permission::create(['name' => 'update socialmediatypes']);
        Permission::create(['name' => 'delete socialmediatypes']);

        Permission::create(['name' => 'list socialprojects']);
        Permission::create(['name' => 'view socialprojects']);
        Permission::create(['name' => 'create socialprojects']);
        Permission::create(['name' => 'update socialprojects']);
        Permission::create(['name' => 'delete socialprojects']);

        Permission::create(['name' => 'list socialprojecttypes']);
        Permission::create(['name' => 'view socialprojecttypes']);
        Permission::create(['name' => 'create socialprojecttypes']);
        Permission::create(['name' => 'update socialprojecttypes']);
        Permission::create(['name' => 'delete socialprojecttypes']);

        Permission::create(['name' => 'list teams']);
        Permission::create(['name' => 'view teams']);
        Permission::create(['name' => 'create teams']);
        Permission::create(['name' => 'update teams']);
        Permission::create(['name' => 'delete teams']);

        Permission::create(['name' => 'list alltenders']);
        Permission::create(['name' => 'view alltenders']);
        Permission::create(['name' => 'create alltenders']);
        Permission::create(['name' => 'update alltenders']);
        Permission::create(['name' => 'delete alltenders']);

        Permission::create(['name' => 'list typeofparkings']);
        Permission::create(['name' => 'view typeofparkings']);
        Permission::create(['name' => 'create typeofparkings']);
        Permission::create(['name' => 'update typeofparkings']);
        Permission::create(['name' => 'delete typeofparkings']);

        Permission::create(['name' => 'list vacancies']);
        Permission::create(['name' => 'view vacancies']);
        Permission::create(['name' => 'create vacancies']);
        Permission::create(['name' => 'update vacancies']);
        Permission::create(['name' => 'delete vacancies']);

        Permission::create(['name' => 'list allvacancydirections']);
        Permission::create(['name' => 'view allvacancydirections']);
        Permission::create(['name' => 'create allvacancydirections']);
        Permission::create(['name' => 'update allvacancydirections']);
        Permission::create(['name' => 'delete allvacancydirections']);

        Permission::create(['name' => 'list allvacancypositions']);
        Permission::create(['name' => 'view allvacancypositions']);
        Permission::create(['name' => 'create allvacancypositions']);
        Permission::create(['name' => 'update allvacancypositions']);
        Permission::create(['name' => 'delete allvacancypositions']);

        Permission::create(['name' => 'list viewfromwindows']);
        Permission::create(['name' => 'view viewfromwindows']);
        Permission::create(['name' => 'create viewfromwindows']);
        Permission::create(['name' => 'update viewfromwindows']);
        Permission::create(['name' => 'delete viewfromwindows']);

        Permission::create(['name' => 'list windowsoverlooks']);
        Permission::create(['name' => 'view windowsoverlooks']);
        Permission::create(['name' => 'create windowsoverlooks']);
        Permission::create(['name' => 'update windowsoverlooks']);
        Permission::create(['name' => 'delete windowsoverlooks']);

        Permission::create(['name' => 'list zhkobjects']);
        Permission::create(['name' => 'view zhkobjects']);
        Permission::create(['name' => 'create zhkobjects']);
        Permission::create(['name' => 'update zhkobjects']);
        Permission::create(['name' => 'delete zhkobjects']);

        Permission::create(['name' => 'list zhkobjectconstructionprogresses']);
        Permission::create(['name' => 'view zhkobjectconstructionprogresses']);
        Permission::create([
            'name' => 'create zhkobjectconstructionprogresses',
        ]);
        Permission::create([
            'name' => 'update zhkobjectconstructionprogresses',
        ]);
        Permission::create([
            'name' => 'delete zhkobjectconstructionprogresses',
        ]);

        Permission::create(['name' => 'list allzhkobjectfeatures']);
        Permission::create(['name' => 'view allzhkobjectfeatures']);
        Permission::create(['name' => 'create allzhkobjectfeatures']);
        Permission::create(['name' => 'update allzhkobjectfeatures']);
        Permission::create(['name' => 'delete allzhkobjectfeatures']);

        Permission::create(['name' => 'list allzhkobjectspecifications']);
        Permission::create(['name' => 'view allzhkobjectspecifications']);
        Permission::create(['name' => 'create allzhkobjectspecifications']);
        Permission::create(['name' => 'update allzhkobjectspecifications']);
        Permission::create(['name' => 'delete allzhkobjectspecifications']);

        // Create user role and assign existing permissions
        $currentPermissions = Permission::all();
        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo($currentPermissions);

        // Create admin exclusive permissions
        Permission::create(['name' => 'list roles']);
        Permission::create(['name' => 'view roles']);
        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'update roles']);
        Permission::create(['name' => 'delete roles']);

        Permission::create(['name' => 'list permissions']);
        Permission::create(['name' => 'view permissions']);
        Permission::create(['name' => 'create permissions']);
        Permission::create(['name' => 'update permissions']);
        Permission::create(['name' => 'delete permissions']);

        Permission::create(['name' => 'list users']);
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);

        // Create admin role and assign all permissions
        $allPermissions = Permission::all();
        $adminRole = Role::create(['name' => 'super-admin']);
        $adminRole->givePermissionTo($allPermissions);

        $user = \App\Models\User::whereEmail('admin@admin.com')->first();

        if ($user) {
            $user->assignRole($adminRole);
        }
    }
}
