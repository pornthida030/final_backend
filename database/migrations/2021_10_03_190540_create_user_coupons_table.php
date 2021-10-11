<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUserCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_coupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignIdFor(\App\Models\Service::class); // service_id
            $table->foreignIdFor(\App\Models\Coupon::class); // coupon_owner (id)
            $table->foreignIdFor(\App\Models\User::class); // user_id
            $table->integer('employee_id');
            $table->enum('coupon_status', ["unuse", "used"])->default("unuse");

            // review
            $table->boolean('reviewed')->default(false);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_coupons');
    }
}
