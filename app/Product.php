<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
    	'codigo',
        'title',
        'html',
        'vendor',
        'type',
        'tags',
        'published',
        'op1_name',
        'op1_value',
        'op2_name',
        'op2_value',
        'op3_name',
        'op3_value',
        'v_sku',
        'v_grams',
        'v_inv_tracker',
        'v_inv_qty',
        'v_inv_policy',
        'v_fulf_service',
        'v_price',
        'v_compare_at_price',
        'v_requires_shipping',
        'v_taxable',
        'v_barcode',
        'img_src',
        'img_position',
        'img_alt_text',
        'gift_card',
        'g_shop_mpn',
        'g_shop_age_group',
        'g_shop_gender',
        'g_shop_g_prod_category',
        'seo_title',
        'seo_description',
        'g_shop_adwords_grouping',
        'g_shop_adwords_labels',
        'g_shop_condition',
        'g_shop_cust_product',
        'g_shop_cust_lab_0',
        'g_shop_cust_lab_1',
        'g_shop_cust_lab_2',
        'g_shop_cust_lab_3',
        'g_shop_cust_lab_4',
        'v_img',
        'v_weight_unit',
        'v_tax_code',
        'cost_per_item'];
        
            
}
