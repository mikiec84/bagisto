<?php

namespace Webkul\Attribute\Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class AttributeTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('attributes')->delete();

        $now = Carbon::now();

        DB::table('attributes')->insert([
            ['id' => '1','code' => 'sku','admin_name' => 'SKU','type' => 'text','validation' => NULL,'position' => '1','is_required' => '1','is_unique' => '1','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0','use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '2','code' => 'name','admin_name' => 'Name','type' => 'text','validation' => NULL,'position' => '2','is_required' => '1','is_unique' => '0','value_per_locale' => '1','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '3','code' => 'url_key','admin_name' => 'URL Key','type' => 'text','validation' => NULL,'position' => '3','is_required' => '1','is_unique' => '1','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '4','code' => 'tax_category_id','admin_name' => 'Tax Category','type' => 'select','validation' => NULL,'position' => '4','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '5','code' => 'new','admin_name' => 'New','type' => 'boolean','validation' => NULL,'position' => '5','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '6','code' => 'featured','admin_name' => 'Featured','type' => 'boolean','validation' => NULL,'position' => '6','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '7','code' => 'visible_individually','admin_name' => 'Visible Individually','type' => 'boolean','validation' => NULL,'position' => '7','is_required' => '1','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0','created_at' => $now,
            'use_in_flat' => '1','updated_at' => $now],
            ['id' => '8','code' => 'status','admin_name' => 'Status','type' => 'boolean','validation' => NULL,'position' => '8','is_required' => '1','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '9','code' => 'short_description','admin_name' => 'Short Description','type' => 'textarea','validation' => NULL,'position' => '9','is_required' => '1','is_unique' => '0','value_per_locale' => '1','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0',
            'is_visible_on_front' => '0','use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '10','code' => 'description','admin_name' => 'Description','type' => 'textarea','validation' => NULL,'position' => '10','is_required' => '1','is_unique' => '0','value_per_locale' => '1','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '11','code' => 'price','admin_name' => 'Price','type' => 'price','validation' => 'decimal','position' => '11','is_required' => '1','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '1','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '12','code' => 'cost','admin_name' => 'Cost','type' => 'price','validation' => 'decimal','position' => '12','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '1','is_visible_on_front' => '0',
            'use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '13','code' => 'special_price','admin_name' => 'Special Price','type' => 'price','validation' => 'decimal','position' => '13','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0','use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '14','code' => 'special_price_from','admin_name' => 'Special Price From','type' => 'date','validation' => NULL,'position' => '14','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0','use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '15','code' => 'special_price_to','admin_name' => 'Special Price To','type' => 'date','validation' => NULL,'position' => '15','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0',
            'use_in_flat' => '1','is_visible_on_front' => '0','created_at' => $now,'updated_at' => $now],
            ['id' => '16','code' => 'meta_title','admin_name' => 'Meta Title','type' => 'textarea','validation' => NULL,'position' => '16','is_required' => '0','is_unique' => '0','value_per_locale' => '1','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '17','code' => 'meta_keywords','admin_name' => 'Meta Keywords','type' => 'textarea','validation' => NULL,'position' => '17','is_required' => '0','is_unique' => '0','value_per_locale' => '1','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '18','code' => 'meta_description','admin_name' => 'Meta Description','type' => 'textarea','validation' => NULL,'position' => '18','is_required' => '0','is_unique' => '0','value_per_locale' => '1','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '1','is_visible_on_front' => '0','use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '19','code' => 'width','admin_name' => 'Width','type' => 'text','validation' => 'decimal','position' => '19','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '1','is_visible_on_front' => '0',
            'use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '20','code' => 'height','admin_name' => 'Height','type' => 'text','validation' => 'decimal','position' => '20','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '1','is_visible_on_front' => '0',
            'use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '21','code' => 'depth','admin_name' => 'Depth','type' => 'text','validation' => 'decimal','position' => '21','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '1','is_visible_on_front' => '0',
            'use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '22','code' => 'weight','admin_name' => 'Weight','type' => 'text','validation' => 'decimal','position' => '22','is_required' => '1','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '23','code' => 'color','admin_name' => 'Color','type' => 'select','validation' => NULL,'position' => '23','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '1','is_configurable' => '1','is_user_defined' => '1','is_visible_on_front' => '0',
            'use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '24','code' => 'size','admin_name' => 'Size','type' => 'select','validation' => NULL,'position' => '24','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '1','is_configurable' => '1','is_user_defined' => '1','is_visible_on_front' => '0',
            'use_in_flat' => '1','created_at' => $now,'updated_at' => $now],
            ['id' => '25','code' => 'brand','admin_name' => 'Brand','type' => 'text','validation' => NULL,'position' => '25','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '1','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '1',
            'use_in_flat' => '1','created_at' => $now,'updated_at' => $now]
        ]);


        DB::table('attribute_translations')->insert([
           ['id' => '1','locale' => 'en','name' => 'SKU','attribute_id' => '1'],
           ['id' => '2','locale' => 'en','name' => 'Name','attribute_id' => '2'],
           ['id' => '3','locale' => 'en','name' => 'URL Key','attribute_id' => '3'],
           ['id' => '4','locale' => 'en','name' => 'Tax Category','attribute_id' => '4'],
           ['id' => '5','locale' => 'en','name' => 'New','attribute_id' => '5'],
           ['id' => '6','locale' => 'en','name' => 'Featured','attribute_id' => '6'],
           ['id' => '7','locale' => 'en','name' => 'Visible Individually','attribute_id' => '7'],
           ['id' => '8','locale' => 'en','name' => 'Status','attribute_id' => '8'],
           ['id' => '9','locale' => 'en','name' => 'Short Description','attribute_id' => '9'],
           ['id' => '10','locale' => 'en','name' => 'Description','attribute_id' => '10'],
           ['id' => '11','locale' => 'en','name' => 'Price','attribute_id' => '11'],
           ['id' => '12','locale' => 'en','name' => 'Cost','attribute_id' => '12'],
           ['id' => '13','locale' => 'en','name' => 'Special Price','attribute_id' => '13'],
           ['id' => '14','locale' => 'en','name' => 'Special Price From','attribute_id' => '14'],
           ['id' => '15','locale' => 'en','name' => 'Special Price To','attribute_id' => '15'],
           ['id' => '16','locale' => 'en','name' => 'Meta Description','attribute_id' => '16'],
           ['id' => '17','locale' => 'en','name' => 'Meta Keywords','attribute_id' => '17'],
           ['id' => '18','locale' => 'en','name' => 'Meta Description','attribute_id' => '18'],
           ['id' => '19','locale' => 'en','name' => 'Width','attribute_id' => '19'],
           ['id' => '20','locale' => 'en','name' => 'Height','attribute_id' => '20'],
           ['id' => '21','locale' => 'en','name' => 'Depth','attribute_id' => '21'],
           ['id' => '22','locale' => 'en','name' => 'Weight','attribute_id' => '22'],
           ['id' => '23','locale' => 'en','name' => 'Color','attribute_id' => '23'],
           ['id' => '24','locale' => 'en','name' => 'Size','attribute_id' => '24'],
           ['id' => '25','locale' => 'en','name' => 'Brand','attribute_id' => '25']
        ]);
    }
}