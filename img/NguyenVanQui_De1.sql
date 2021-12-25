/*HoTen:
 Maso SV:
 Đề: 
 Sáng 2
*/
create Database QLNV
go
use QLNV
go
set dateformat dmy
go
create Table PhongBan(MaPB char(10) primary key not null, TenPB nvarchar(30))
go
create Table NhanVienQL(MaQL Char(10) primary key, HoTen Nvarchar(30), Giotinh Char(3), 
					Ngaysinh Date,	Diachi nvarchar(30), SDT nvarchar(10),
					Email nvarchar(30), LuongCB float, Heso int, TienLuong float, MaPB char(10))
 go
 alter Table NhanvienQL
 add constraint fK_PB_NV foreign key (MaPB) references Phongban(Mapb)

 go

 -- them du lieu phong ban
 Insert into PhongBan(MaPB, TenPB)
 values('NS',N'Nhân sự'),('KH', N'Kế hoạch'),('VT', N'Vật tư'),('KT',N'Kế Toán')
  
 go 
 Insert into NhanVienQL(MaQL, HoTen, Giotinh, Ngaysinh ,Diachi , SDT,   Email, LuongCB , Heso , TienLuong , MaPB )
 values('QL01', N'Nguyễn Ngọc Ân', 'Nam', '10/1/1969', N'TP.HCM', N'09909090',N'An@tdc.edu.vn', 10000, 5, 50000, 'NS')

 -- ghi chú: 
--LuongCB: Lương cơ bản
-- HeSo: Hệ số lương
-- TienLuong = HeSo* LuongCB: tiền lương sẽ bằng hệ số lương nhân với Lương cơ bản
-- sinh viên viết các storeProcedure để thực thi trong chương trình.
--lẤY DANH SÁCH PHÒNG BAN
create proc sp_LaydsPhongBan
as 
begin
  select * from PhongBan
  end
--LẤY DANH SÁC NHÂN VIÊN
  create proc sp_LaydsNhanVienQL
as 
begin
  select * from NhanVienQL
  end
  -- thêm phòng ban
   create proc sp_ThemPhongBan(@MaPB char(10),@TenPB nvarchar(30))
 as
 begin
 insert into PhongBan(MaPB,TenPB)
 values(@MaPB,@TenPB)
 end
 
 -- thêm nhân viên
    create proc sp_ThemNhanVien(@MaQL char(10),@Hoten nvarchar(30),@GioiTinh char(3),@NgaySinh date,@DiaChi nvarchar(30),@SDT nvarchar(10),@email nvarchar(30),
	@luongCB float,@heso int,@tienluong float,@maPB char(10))
 as
 begin
 insert into NhanVienQL(MaQL, HoTen, Giotinh, Ngaysinh ,Diachi , SDT,   Email, LuongCB , Heso , TienLuong , MaPB)
 values(@MaQL,@Hoten,@GioiTinh,@NgaySinh,@DiaChi,@SDT,@email,@luongCB,@heso,@tienluong,@maPB)
 end
 --sửa nhân viên
 create proc sp_SuaNhanVien(@MaQL char(10),@Hoten nvarchar(30),@GioiTinh char(3),@NgaySinh date,@DiaChi nvarchar(30),@SDT nvarchar(10),@email nvarchar(30),
	@luongCB float,@heso int,@tienluong float,@maPB char(10))
  as 
  begin
   update NhanVienQL
   set HoTen =@Hoten,
	Giotinh = @GioiTinh,
	Ngaysinh = @NgaySinh,
	Diachi = @DiaChi,
	SDT = @SDT,
	Email=@email,
	LuongCB = @luongCB,
	Heso =@heso,
	TienLuong = @tienluong,
	MaPB = @maPB
   where MaQL = @MaQL
   end
 --sửa phòng ban
 create proc sp_SuaTour(@MaPB char(10),@TenPB nvarchar(30))
  as 
  begin
   update PhongBan
   set TenPB = @TenPB
   where MaPB = @MaPB
   end
   -- XÓA NHÂN VIÊN
   create proc sp_XoaNhanVien(@MaQL char(10))
  as
   begin
      delete 
	  from NhanVienQL
	  where MaQL = @MaQL
	end
--Xóa phòng ban
create proc sp_XoaPhongBan(@MaPB char(10))
  as
   begin
      delete 
	  from PhongBan
	  where MaPB = @MaPB
	end