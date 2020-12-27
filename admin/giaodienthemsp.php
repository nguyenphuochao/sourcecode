<?php
include 'connect.php'; 			
$sql1 ="select * from sanpham";
$sql2="select * from danhmuc"; 	
$sql3="select * from tintuc";
$sql4="select * from nhasx";

$stm= $o->query($sql1);	$data1 = $stm->fetchAll(PDO::FETCH_ASSOC);
$stm= $o->query($sql2);	$data2 = $stm->fetchAll(PDO::FETCH_ASSOC);
$stm= $o->query($sql3);	$data3 = $stm->fetchAll(PDO::FETCH_ASSOC);
$stm= $o->query($sql4);	$data4 = $stm->fetchAll(PDO::FETCH_ASSOC);

?>

<form action="XL_themSP.php" method="post" enctype="multipart/form-data">
	<table>
		<!-- <tr>
			<td>Mã SP </td>
			<td><input type=text name=maSP></td>
		</tr> -->
		<tr>
			<td>Tên SP </td>
			<td><input type=text name=tenSP></td>
		</tr>
		<tr>
			<td>màu SP</td>
			<td><input tyle=text name=mauSP> </textarea></td>
		</tr>
		<tr>
			<td>CT_SP  </td>
			<td><textarea name=chitietSP></textarea></td>
		</tr>
		<tr>
			<td>Hình</td>
			<td><input type=file name=hinhanh></td>
		</tr>
		<tr>
			<td>sl  </td>
			<td><input tyle=number name=soluong> </td>
		</tr>
		<tr>
			<td>gia </td>
			<td><input type=text name=gia></td>
		</tr>

		<tr>
			<td>KM</td>
			<td><input type=text name=khuyenmai></td>
		</tr>
		<tr>
			<td>TT</td>
			<td><textarea name=trangthaiSP> </textarea></td>
		</tr>
		<tr>
			<td>DM: </td>
			<td><select name=maDM>
				<?php 
				foreach ($data2 as $key => $value) {
					?><option value='<?php echo $value['maDM'] ?>'>
						<?php echo $value['tenDM'] ?>
					</option>
					<?php
				}
				?>
				</select> <br>
			</td>
		</tr>

	
	</table>
<!-- masach  <input type=text name=maSP> <br>
ten sach <input type=text name=tenSP> <br>
mau  <textarea name=mauSP> </textarea> <br>
ct  <input type=text name=chitietSP> <br>
hinh <input type=file name=hinhanh> <br>
sl <textarea name=soluong> </textarea> <br>
gia <input type=text name=gia> <br>
KM<input type=text	 name=khuyenmai> <br>
TT<textarea name=trangthaiSP> </textarea> <br>

DM: <select name=maDM>
		
	</select> <br> -->

	<input type="submit">
</form>
<table border="1" >
	<tr>
		<td>
			mã SP
		</td>
		<td>
			Tên SP
		</td>
		<td>
			hinhanh
		</td>
		<td>
			màu SP
		</td>
		<td>
			chitiet SP
		</td>
		<td>
			so luong
		</td>
		<td>
			giá
		</td>
		<td>
			khuyenmai
		</td>
		<td>
			trangthai
		</td>
		<td>
			mã DM

		</td>

	</tr>
	<?php 
	foreach ($data1 as $key => $value) 
	{
	?>
	<tr >
		<td><?php echo $value['maSP'] ?> </td>
		<td><?php echo $value['tenSP'] ?></td>
		<td><?php echo $value['hinhanh'] ?></td>
		<td><?php echo $value['mauSP'] ?> </td>
		<td><?php echo $value['chitietSP'] ?></td>
		<td><?php echo $value['soluong'] ?></td>
		<td><?php echo $value['gia'] ?> </td>
		<td><?php echo $value['khuyenmai'] ?></td>
		<td><?php echo $value['trangthaiSP'] ?></td>
		<td><?php echo $value['maDM'] ?> </td>
		<td>
			<a href="xoasp.php?maSP=<?php echo $value['maSP'] ?>">
			xoa</a>
		</td>
	</tr>
	<?php 
	}
	?>
</table>


<!-- tintuc -->

<form action="XL_themTT.php" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Mã TT </td>
			<td><input type=text name=maTT></td>
		</tr>
		<tr>
			<td>Tiêu đề </td>
			<td><input type=text name=tieude></td>
		</tr>
		
		<tr>
			<td>Nội Dung </td>
			<td><textarea name=noidung></textarea></td>
		</tr>
		<tr>
			<td>Hình</td>
			<td><input type=file name=hinhanh></td>
		</tr>
		
		<tr>
			<td>Ngày Đăng Tin</td>
			<td><input type=date name=ngaydangtin></td>
		</tr>

		<tr>
			<td>Tác giả</td>
			<td><input type=text name=tacgia></td>
		</tr>
		<tr>
			<td>hethan</td>
			<td><input type=date name=thoigianhethan></td>
		</tr>
		
			
	</table>

	<input type="submit">
</form>
<table border="1" >
	<tr>
		<td>
			mã TT
		</td>
		<td>
			Tiêu đề
		</td>
		<td>
			Nội dung
		</td>
		<td>
			hinhanh
		</td>
		<td>
			Ngày Đăng Tin
		</td>
		<td>
			Tác Giả
		</td>
		<td>
			Thời Gian Hết Hạn
		</td>
		

	</tr>
	<?php 
	foreach ($data3 as $key => $value) 
	{
	?>
	<tr >
		<td><?php echo $value['maTT'] ?> </td>
		<td><?php echo $value['tieude'] ?></td>
		<td><?php echo $value['noidung'] ?></td>
		<td><?php echo $value['hinhanh'] ?> </td>
		<td><?php echo $value['ngaydangtin'] ?></td>
		<td><?php echo $value['tacgia'] ?></td>
		<td><?php echo $value['thoigianhethan'] ?> </td>
		
		<td>
			<a href="xoasp.php?maSP=<?php echo $value['maTT'] ?>">
			xoa</a>
		</td>
	</tr>
	<?php 
	}
	?>
</table>



<!-- phần thêm nhà sản xuất -->


<form action="themncc.php" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Mã TT </td>
			<td><input type=text name=maNSX></td>
		</tr>
		<tr>
			<td>Tiêu đề </td>
			<td><input type=text name=tenNSX></td>
		</tr>
			
	</table>

	<input type="submit">
</form>
<table border="1" >
	<tr>
		<td>
			mã NSX
		</td>
		<td>
			Tên NSX
		</td>
	</tr>
	<?php 
	foreach ($data4 as $key => $value) 
	{
	?>
	<tr >
		<td><?php echo $value['maNSX'] ?> </td>
		<td><?php echo $value['tenNSX'] ?></td>
	</tr>
	<?php 
	}
	?>
</table>

<!-- cập nhật sản phẩm -->



