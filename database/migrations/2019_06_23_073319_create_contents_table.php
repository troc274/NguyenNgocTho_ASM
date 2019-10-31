<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('section');
            $table->string('name');
            $table->string('content');
            $table->timestamps();
        });


        DB::insert('insert into contents (section, name , content) VALUES
        ("service","bridal","Cửa hàng cung cấp nhiều mẫu áo cưới, đồ vest, đồ bưng tráp, các món trang điểm cho cô dâu và chú rể"),
        ("service","makup","Với nhiều năm kinh nghiệm trong nghề. Cửa hàng tự tin cam kết với quý khách sẽ có gương mặt ăn ảnh đẹp tự nhiên"),
        ("service","heircuts","Nhà thiết kế với nhiều mẫu tóc hiện đại và tươi mới"),
        ("service","takeaphoto","Chúng tôi hân hạnh mang lại cho quý khách dịch vụ chụp hình chất lượng cao"),
        ("service","edit","Nhận hậu kì các ảnh đám cưới, ảnh tiệt, ảnh du lịch..."),
        ("service","orther","Và một số dịch vụ khác. Đến ngay cửa hàng để biết thêm")');
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
