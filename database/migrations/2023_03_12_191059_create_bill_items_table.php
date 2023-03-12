<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_item', function (Blueprint $table) {
            $table->id();
            $table->string('bill_no')->index();
            $table->string('item_code')->index();
            $table->integer('line_no')->default(0);
            $table->decimal('quantity')->default(0);
            $table->decimal('price')->default(0);
            $table->decimal('amount')->default(0);
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
        Schema::dropIfExists('bill_item');
    }
}
