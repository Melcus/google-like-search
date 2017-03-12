<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class SetupAccessTables.
 */
class SetupAccessTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(config('access.users_table'), function ($table) {
            $table->tinyInteger('status')->after('password')->default(1)->unsigned();
            $table->string('confirmation_code')->after('status')->nullable();
            $table->boolean('confirmed')->after('confirmation_code')->default(config('access.users.confirm_email') ? false : true);
            $table->softDeletes();
        });

        Schema::create(config('access.roles_table'), function ($table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->boolean('all')->default(false);
            $table->smallInteger('sort')->default(0)->unsigned();
            $table->timestamps();

            /*
             * Add Foreign/Unique/Index
             */
            $table->unique('name');
        });

        Schema::create(config('access.role_user_table'), function ($table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();

            /*
             * Add Foreign/Unique/Index
             */
            $table->foreign('user_id')
                ->references('id')
                ->on(config('access.users_table'))
                ->onDelete('cascade');

            $table->foreign('role_id')
                ->references('id')
                ->on(config('access.roles_table'))
                ->onDelete('cascade');
        });

        Schema::create(config('access.permissions_table'), function ($table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('display_name');
            $table->smallInteger('sort')->default(0)->unsigned();
            $table->timestamps();

            /*
             * Add Foreign/Unique/Index
             */
            $table->unique('name');
        });

        Schema::create(config('access.permission_role_table'), function ($table) {
            $table->increments('id')->unsigned();
            $table->integer('permission_id')->unsigned();
            $table->integer('role_id')->unsigned();

            /*
             * Add Foreign/Unique/Index
             */
            $table->foreign('permission_id')
                ->references('id')
                ->on(config('access.permissions_table'))
                ->onDelete('cascade');

            $table->foreign('role_id')
                ->references('id')
                ->on(config('access.roles_table'))
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(config('access.users_table'), function (Blueprint $table) {
            $table->dropColumn(['status', 'confirmed', 'confirmation_code', 'deleted_at']);
        });

        /*
         * Remove Foreign/Unique/Index
         */
        Schema::table(config('access.roles_table'), function (Blueprint $table) {
            $table->dropUnique(config('access.roles_table').'_name_unique');
        });

        Schema::table(config('access.role_user_table'), function (Blueprint $table) {
            $table->dropForeign(config('access.role_user_table').'_user_id_foreign');
            $table->dropForeign(config('access.role_user_table').'_role_id_foreign');
        });

        Schema::table(config('access.permissions_table'), function (Blueprint $table) {
            $table->dropUnique(config('access.permissions_table').'_name_unique');
        });

        Schema::table(config('access.permission_role_table'), function (Blueprint $table) {
            $table->dropForeign(config('access.permission_role_table').'_permission_id_foreign');
            $table->dropForeign(config('access.permission_role_table').'_role_id_foreign');
        });

        /*
         * Drop tables
         */
        Schema::dropIfExists(config('access.role_user_table'));
        Schema::dropIfExists(config('access.permission_role_table'));
        Schema::dropIfExists(config('access.roles_table'));
        Schema::dropIfExists(config('access.permissions_table'));
    }
}
