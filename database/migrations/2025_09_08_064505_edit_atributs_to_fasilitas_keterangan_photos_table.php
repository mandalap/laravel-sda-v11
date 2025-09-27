<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('DELETE pf FROM project_fasilitas pf 
                      LEFT JOIN projects p ON pf.project_id = p.id 
                      WHERE p.id IS NULL');

        DB::statement('DELETE pp FROM project_photos pp 
                      LEFT JOIN projects p ON pp.project_id = p.id 
                      WHERE p.id IS NULL');

        DB::statement('DELETE pk FROM project_keterangans pk 
                      LEFT JOIN projects p ON pk.project_id = p.id 
                      WHERE p.id IS NULL');

        Schema::table('project_fasilitas', function (Blueprint $table) {

            // Ubah tipe data
            $table->bigInteger('project_id')->unsigned()->change();

            // Tambah foreign key constraint
            $table->foreign('project_id')
                ->references('id')
                ->on('projects')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Tambah index untuk performa
            $table->index(['project_id', 'created_at']);
        });

        Schema::table('project_photos', function (Blueprint $table) {

            $table->bigInteger('project_id')->unsigned()->change();

            $table->foreign('project_id')
                ->references('id')
                ->on('projects')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->index(['project_id', 'created_at']);
        });

        Schema::table('project_keterangans', function (Blueprint $table) {
            $table->bigInteger('project_id')->unsigned()->change();

            $table->foreign('project_id')
                ->references('id')
                ->on('projects')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->index(['project_id', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('project_fasilitas', function (Blueprint $table) {
            $table->dropForeign(['project_id']);
            $table->dropIndex(['project_id', 'created_at']);
            $table->string('project_id', 255)->change();
        });

        Schema::table('project_photos', function (Blueprint $table) {
            $table->dropForeign(['project_id']);
            $table->dropIndex(['project_id', 'created_at']);
            $table->string('project_id', 255)->change();
        });

        Schema::table('project_keterangans', function (Blueprint $table) {
            $table->dropForeign(['project_id']);
            $table->dropIndex(['project_id', 'created_at']);
            $table->string('project_id', 255)->change();
        });
    }
};
