<?php

use Illuminate\Database\Schema\Blueprint;
//----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;


class CreateCartsTable extends XotBaseMigration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up() {
        //-- CREATE --
        if (! $this->tableExists()) {
            $this->getConn()->create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
                $table->nullableMorphs('post');
                $table->integer('auth_user_id')->nullable();
                $table->text('note');
                $table->integer('status')->nullable();
                //$table->string('related_type', 50)->index()->nullable();//non serve in teoria
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();
                $table->timestamps();
            });
        }
        //-- UPDATE --
        $this->getConn()->table($this->getTable(), function (Blueprint $table) {

        });
    }


}
