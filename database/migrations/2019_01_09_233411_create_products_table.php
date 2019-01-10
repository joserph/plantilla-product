<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');

            $table->string('codigo');
            $table->string('title');
            $table->text('html');
            $table->string('vendor');
            $table->string('type');
            $table->string('tags');
            $table->string('published');
            $table->string('op1_name');
            $table->string('op1_value');
            $table->string('op2_name');
            $table->string('op2_value');
            $table->string('op3_name');
            $table->string('op3_value');
            $table->string('v_sku');
            $table->string('v_grams');
            $table->string('v_inv_tracker');
            $table->string('v_inv_qty');
            $table->string('v_inv_policy');
            $table->string('v_fulf_service');
            $table->string('v_price');
            $table->string('v_compare_at_price');
            $table->string('v_requires_shipping');
            $table->string('v_taxable');
            $table->string('v_barcode');
            $table->string('img_src');
            $table->string('img_position');
            $table->string('img_alt_text');
            $table->string('gift_card');
            $table->string('g_shop_mpn');
            $table->string('g_shop_age_group');
            $table->string('g_shop_gender');
            $table->string('g_shop_g_prod_category');
            $table->string('seo_title');
            $table->string('seo_description');
            $table->string('g_shop_adwords_grouping');
            $table->string('g_shop_adwords_labels');
            $table->string('g_shop_condition');
            $table->string('g_shop_cust_product');
            $table->string('g_shop_cust_lab_0');
            $table->string('g_shop_cust_lab_1');
            $table->string('g_shop_cust_lab_2');
            $table->string('g_shop_cust_lab_3');
            $table->string('g_shop_cust_lab_4');
            $table->string('v_img');
            $table->string('v_weight_unit');
            $table->string('v_tax_code');
            $table->string('cost_per_item');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
