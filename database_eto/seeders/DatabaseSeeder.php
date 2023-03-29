<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => \Hash::make('admin'),
            ]);
        $this->call(PermissionsSeeder::class);

        $this->call(ActionSeeder::class);
        $this->call(ActionsTypeSeeder::class);
        $this->call(ApartmentSeeder::class);
        $this->call(ApartmentBalconyLoggiaTypeSeeder::class);
        $this->call(ApartmentCountRoomsSeeder::class);
        $this->call(ApartmentGlazingTypeSeeder::class);
        $this->call(ApartmentRepairTypeSeeder::class);
        $this->call(ApartmentStatusSeeder::class);
        $this->call(ApartmentTypeSeeder::class);
        $this->call(BanksSeeder::class);
        $this->call(BanksProgramSeeder::class);
        $this->call(BuildingMaterialSeeder::class);
        $this->call(BuildingsSeeder::class);
        $this->call(BuildingsStatusSeeder::class);
        $this->call(CardinalDirectionsSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(CommerceSeeder::class);
        $this->call(CommercePurposeSeeder::class);
        $this->call(ContactsSeeder::class);
        $this->call(DeveloperSeeder::class);
        $this->call(DeveloperOfficeSeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(DocsSeeder::class);
        $this->call(DocsTypeSeeder::class);
        $this->call(FormOfPaymentSeeder::class);
        $this->call(KlassesSeeder::class);
        $this->call(MainPageSliderSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(NewsTypeSeeder::class);
        $this->call(OkrugSeeder::class);
        $this->call(PaymentFormsSeeder::class);
        $this->call(SocialMediaSeeder::class);
        $this->call(SocialMediaTypeSeeder::class);
        $this->call(SocialProjectSeeder::class);
        $this->call(SocialProjectTypeSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(TendersSeeder::class);
        $this->call(TypeOfParkingSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(VacancySeeder::class);
        $this->call(VacancyDirectionsSeeder::class);
        $this->call(VacancyPositionsSeeder::class);
        $this->call(ViewFromWindowSeeder::class);
        $this->call(WindowsOverlookSeeder::class);
        $this->call(ZhkObjectSeeder::class);
        $this->call(ZhkObjectConstructionProgressSeeder::class);
        $this->call(ZhkObjectFeaturesSeeder::class);
        $this->call(ZhkObjectSpecificationsSeeder::class);
    }
}
