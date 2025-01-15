<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('misiones', function (Blueprint $table) {
			$table->id();
			$table->string('nombre')->unique();
			$table->text('descripcion')->nullable();
			$table->timestamp('fecha_lanzamiento');
			$table->boolean('activo')->default(true);
			$table->foreignId('tripulante_id')->constrained('tripulantes')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('misiones');
	}
};
