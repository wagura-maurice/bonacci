<?php

use App\Models\NetworkProvidentem;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetworkProvidentemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('network_providentems', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('_code')->nullable();
            $table->string('_status')->default(NetworkProvidentem::PENDING);
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
        Schema::dropIfExists('network_providentems');
    }
}
