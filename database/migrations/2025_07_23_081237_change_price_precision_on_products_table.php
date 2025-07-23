<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangePricePrecisionOnProductsTable extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Đổi từ decimal(12,2) → decimal(12,0)
            $table->decimal('price', 12, 0)->change();
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Nếu rollback thì trả về decimal(12,2)
            $table->decimal('price', 12, 2)->change();
        });
    }
}
