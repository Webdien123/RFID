<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(SinhVienData::class);
    	$this->call(DangKyTheData::class);
    	$this->call(TaiKhoanData::class);
    }
}

/**
* Lớp tạo dữ liệu cho sinh viên
*/
class SinhVienData extends Seeder
{
	
	public function run()
	{
		DB::insert('insert into sinhvien (mssv, hoten, sdt) values (?, ?, ?)', ['B1300001', 'Nguyễn Văn A', '0919000001']);
		DB::insert('insert into sinhvien (mssv, hoten, sdt) values (?, ?, ?)', ['B1300002', 'Nguyễn Văn B', '0919000002']);
		DB::insert('insert into sinhvien (mssv, hoten, sdt) values (?, ?, ?)', ['B1300003', 'Nguyễn Văn C', '0919000003']);
		DB::insert('insert into sinhvien (mssv, hoten, sdt) values (?, ?, ?)', ['B1300004', 'Nguyễn Văn D', '0919000004']);
		DB::insert('insert into sinhvien (mssv, hoten, sdt) values (?, ?, ?)', ['B1300005', 'Nguyễn Văn E', '0919000005']);
		DB::insert('insert into sinhvien (mssv, hoten, sdt) values (?, ?, ?)', ['B1300006', 'Nguyễn Văn F', '0919000006']);
		DB::insert('insert into sinhvien (mssv, hoten, sdt) values (?, ?, ?)', ['B1300007', 'Nguyễn Văn G', '0919000007']);
		DB::insert('insert into sinhvien (mssv, hoten, sdt) values (?, ?, ?)', ['B1300008', 'Nguyễn Văn H', '0919000008']);
		DB::insert('insert into sinhvien (mssv, hoten, sdt) values (?, ?, ?)', ['B1300009', 'Nguyễn Văn I', '0919000009']);
		DB::insert('insert into sinhvien (mssv, hoten, sdt) values (?, ?, ?)', ['B1300010', 'Nguyễn Văn J', '0919000010']);
	}
}

/**
*Lớp tạo dữ liệu các thẻ đã đăng ký
*/
class DangKyTheData extends Seeder
{
	
	public function run()
	{
		DB::insert('insert into dang_ky_the (id, mssv) values (?, ?)', ['0005706269', 'B1300003']);
	}
}

/**
*Lớp tạo dữ liệu tài khoản quản trị viên
*/
class TaiKhoanData extends Seeder
{
	
	public function run()
	{
		DB::insert('insert into taikhoan (uname, pass) values (?, ?)', ['admin', Hash::make("admin")]);
	}
}

