<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{    protected $table="items";
    protected $primaryKey="itemid";
    protected $fillable = [
        'add_title', 'product_name', 'model', 'description', 'price', 'price_negotiation', 'condition',
        'used_for','image', 'documentation','sim_slot','screen_size', 'smatphone_os','back_camera','font_camera','internal_storage',
        'home_delivery',   'delivery_area',  'delivery_charges',  'warrenty_types', 'warrenty_period', 'warrenty_inludes',
    ];
}
