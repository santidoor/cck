<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\ObjectModel;
use Illuminate\Support\Arr;
use DateTime;
use Carbon\Carbon;

class ObjectsController extends Controller
{
        
    public function zhk_object()
    {
//        123
//        123
//        123
//        123
        $objects_group = DB::table('buildings')
            ->rightJoin('zhk_objects', 'buildings.zhk_object_id', '=', 'zhk_objects.id')
            ->leftJoin(DB::raw('(SELECT
                    apartments.buildings_id,
                    apartments.apartment_count_rooms_id,
                    COUNT(*) AS appartments_count,
                    MIN(CASE WHEN apartments.price_action = 0 THEN apartments.price ELSE apartments.price_action END) AS min_price,
                    MAX(CASE WHEN apartments.price_action > 0 THEN 1 ELSE 0 END) AS have_action,
                    (SELECT buildings.start_date FROM buildings WHERE buildings.id = apartments.buildings_id AND buildings.buildings_status_id = 2 AND buildings.end_date = (SELECT MIN(end_date) FROM buildings WHERE buildings.id = apartments.buildings_id AND buildings.buildings_status_id = 2)) AS start_date,
                    (SELECT MIN(end_date) FROM buildings WHERE buildings.id = apartments.buildings_id AND buildings.buildings_status_id = 2) AS end_date
                FROM apartments
                WHERE apartments.apartment_status_id = 2
                GROUP BY apartments.buildings_id,
                    apartments.apartment_count_rooms_id) apartments'), 'apartments.buildings_id', '=', 'buildings.id')
            ->select('zhk_objects.id', 'zhk_objects.name', DB::raw('(zhk_objects.street) AS adress'), 'zhk_objects.coords', 'apartments.apartment_count_rooms_id', DB::raw('MAX(apartments.appartments_count) AS appartments_count'), DB::raw('MIN(apartments.min_price) AS min_price'), DB::raw('MAX(apartments.have_action) AS have_action'), DB::raw('MAX(apartments.start_date) AS start_date'), DB::raw('MAX(apartments.end_date) AS end_date'), DB::raw("CONCAT(FLOOR(DATEDIFF(CURRENT_DATE(), MAX(apartments.start_date)) / DATEDIFF(MAX(apartments.end_date), MAX(apartments.start_date)) * 100), '%') AS percentage"), DB::raw('zhk_objects.gallery AS gallery'), DB::raw('SUBSTRING_INDEX(zhk_objects.gallery, \',\', 1) AS preview'))
            ->where('buildings.buildings_status_id', '=', 2)
            ->groupBy('zhk_objects.id', 'apartments.apartment_count_rooms_id')
            ->get();
            
        $arr_objects_group = array();
        foreach($objects_group as $item_objects_group){
            $arr_objects_group[] = $item_objects_group;
        }
         
        print_r('<pre>'); 
        print_r($arr_objects_group);
        print_r('</pre>');   
        
        $result = [
                'zhk_obkects' => $arr_objects_group,
                'count_zhk_objects' => count($arr_objects_group),
            ];
        
        return response()->json($result);
        
    }
    
}






