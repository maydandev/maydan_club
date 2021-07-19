<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();


            $table->string('name', 50)->nullable();
            $table->string('en_name', 50)->nullable();
            $table->string('route', 50)->nullable();
            $table->string('image')->default('/images/modules/default.png')->nullable();
            $table->string('icon')->default('<i class="feather icon-box"></i>')->nullable();
            $table->integer('parent_id')->default(0)->nullable();
            $table->string('user_type_ids', 100)->nullable();
            $table->string('app_type',50)->default('admin')->nullable();
            $table->integer('sorting')->default(1)->nullable();
            $table->boolean('is_active')->default(1)->nullable();


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
        Schema::dropIfExists('modules');
    }
}
