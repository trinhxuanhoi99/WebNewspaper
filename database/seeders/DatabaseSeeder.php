<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TinTucSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}

class TinTucSeeder extends Seeder{
    public function run(){
        DB::table('theloai')->insert([
            ['idTheLoai'=>'TL1','TenTheLoai'=>'Xã Hội'],
            ['idTheLoai'=>'TL2','TenTheLoai'=>'Văn Hóa'],
            ['idTheLoai'=>'TL3','TenTheLoai'=>'Thể Thao'],
        ]);
        DB::table('loaitin')->insert([
            ['idLoaiTin'=>'LoaiTin1','idTheLoai'=>'TL1','TenLoaiTin'=>'Giáo dục'],
            ['idLoaiTin'=>'LoaiTin2','idTheLoai'=>'TL2','TenLoaiTin'=>'Nhac Tre'],
            ['idLoaiTin'=>'LoaiTin3','idTheLoai'=>'TL1','TenLoaiTin'=>'DuLich'],
            ['idLoaiTin'=>'LoaiTin4','idTheLoai'=>'TL3','TenLoaiTin'=>'Game'],
        ]);
        
        DB::table('tintuc')->insert([
            ['idLoaiTin'=>'LoaiTin1','TieuDe'=>'Học bổng KHTN dành cho học sinh nghèo','TomTat'=>'Nhằm giúp đỡ các sinh viên có hoàn cảnh khó khăn...','NoiDung'=>'...'],
            ['idLoaiTin'=>'LoaiTin3','TieuDe'=>'Không được phép du lịch Đà nẵng','TomTat'=>'Tình hình covid-19 căng thẳng làm cho các khu du lich đà nẵng phải đóng cửa','NoiDung'=>'...'],
            ['idLoaiTin'=>'LoaiTin4','TieuDe'=>'SBTC dành được chức vô dịnh LMHT tốc chiến','TomTat'=>'Sau trận chung kết căng thẳng thì SBTC đã dành chiến thắng trước CES để dành ngôi vô địch','NoiDung'=>'...'],
            ['idLoaiTin'=>'LoaiTin2','TieuDe'=>'Sơn Tùng-MTP cho ra mắt ca khúc mới','TomTat'=>'Sau ca khúc Chúng ta của hiện tại, sơn tùng đã cho ra ca khúc mới mang tên Muộn rồi mà sao còn','NoiDung'=>'...'],
            ['idLoaiTin'=>'LoaiTin4','TieuDe'=>'Iris chia tay BTS, gia nhập GAM','TomTat'=>'BTS chia tay huấn luận viên IRIS sau khoảng thời gian gắn bó và bến đỗ tiếp theo của IRIS là GAM Esport','NoiDung'=>'...'],
            ['idLoaiTin'=>'LoaiTin1','TieuDe'=>'Dừng việc đến trường vì covid-19','TomTat'=>'Tình Hình covid-19 phức tạp chưa có dấu hiệu dừng lại','NoiDung'=>'...'],
            ['idLoaiTin'=>'LoaiTin4','TieuDe'=>'Zeros bị ban vĩnh viễn vì phát ngôn không chuẩn mực','TomTat'=>'Phát ngôn Không chuẩn mực về covid-19, tuyển thủ đường trên của SBTC esport Phạm Zeros Minh Lộc đã bị garena ban vĩnh viễn.','NoiDung'=>'...'],
            ['idLoaiTin'=>'LoaiTin2','TieuDe'=>'Sơn Tùng hợp tác với rapper Snoop Dogg','TomTat'=>'Ra mắt bài hát Hãy trao cho anh với sự kết hợp của rapper quốc tế Snoopp Dogg','NoiDung'=>'...'],
            ['idLoaiTin'=>'LoaiTin4','TieuDe'=>'Tuyển dụng vị trí Analyst Luxury Esport','TomTat'=>'Tuyển quân cho Luxury Esport','NoiDung'=>'...'],
            ['idLoaiTin'=>'LoaiTin1','TieuDe'=>'Dời lịch thi Tốt nghiệp THPT','TomTat'=>'Vì lý do dịch covid-19 bộ giáo dục quyết định dời lại lịch thi tốt nghiệp','NoiDung'=>'...'],
        ]);
    }
}

