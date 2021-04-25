<?php
	session_start();
	include("connect/connect.php");
	if(!$_SESSION['u_id']){
		header('Location: ./index.php?status=2');
	}else{

?>
<!DOCTYPE html>
<html lang="en">
		<?php
			include_once 'component/header.php';
		?>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<div class="material-loader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
			</svg>
			<div class="message">โหลด...</div>
		</div>
	</div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar">
		<?php
			include_once 'component/navbar.php';
		?>
		
		<?php
			include_once 'component/slidebar.php';
		?>
		
		<!-- begin #content -->
		<div id="content" class="content">
	
			<!-- begin page-header -->
			<h1 class="page-header">ระบบระบบบริหารจัดการเว็บไซต์ <small>www.yupparaj.ac.th/thanphisit</small></h1>
			<!-- end page-header -->

			<!-- begin panel -->
			<div class="panel panel-inverse">
				<div class="panel-heading bg-pink">
                <h4 class="panel-title s12 fw-700" style="font-size: 15px">ระบบเพิ่มเมนู Navbar</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<h4>ระบบเพิ่มเมนู Navbar</h4>
					<a href="resultindex.php" class="btn btn-pink"><i class="fas fa-arrow-left"></i>&nbsp;กลับหน้าบริหารจัดการหน้าหลักเว็บไซต์</a>
					<hr>

					<?php
                        if(isset($_GET['id'])){
                            $mn_id = $_GET['id'];
                            $sql3 = "SELECT * FROM menunavbar WHERE mn_id = '$mn_id'";
                            $result3 = mysqli_query($conn,$sql3);
                            $row3 = mysqli_fetch_array($result3);
                        }

                    ?>
						
					
					<form action="process/editnavbaract.php" method="post" enctype="multipart/form-data">
                    <input type="text" class="form-control" id="mn_id" name="mn_id"  value="<?php echo $row3['mn_id'];?>" readonly>
                        <br>
						

						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-2">ชื่อเมนู Navbar</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5" placeholder="กรอกชื่อเมนู Navbar" name="mn_name" id="mn_name" value="<?php echo $row3['mn_name'];?>">
									<small class="f-s-12 text-grey-darker">ตัวอย่างการกรอก : จุดประสงค์การเรียนรู้</small>
								</div>
						</div>

						<div class="form-group row m-b-15" style="display: none">
							<label class="col-form-label col-md-2">ลิงค์เมนู Navbar</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5" placeholder="กรอกลิงค์เมนู Navbar" name="mn_lesson" id="mn_lesson" value="<?php echo $row3['mn_lesson'];?>">
									<small class="f-s-12 text-grey-darker">ตัวอย่างการกรอก : http://www.yupparaj.ac.th/kruthanphisit/theme.php?lesson=1&id=7</small>
								</div>
						</div>

						

						<div class="form-group row m-b-15">
							<label class="col-form-label col-md-2">ลิงค์เมนู Navbar</label>
								<div class="col-md-10">
									<input type="text" class="form-control m-b-5" placeholder="กรอกลิงค์เมนู Navbar" name="mn_link" id="mn_link" value="<?php echo $row3['mn_link'];?>">
									<small class="f-s-12 text-grey-darker">ตัวอย่างการกรอก : http://www.yupparaj.ac.th/kruthanphisit/theme.php?lesson=1&id=7</small>
								</div>
						</div>

						
						

						
						<input type="submit" class="btn btn-pink w-100" name="submit" value="แก้ไขเมนู">
                    </form>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end #content -->
		<?php
			include_once 'component/footer.php';
    	?>		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="material-icons">keyboard_arrow_up</i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<?php
		include_once 'component/jslink.php';
    ?>
  
	

	<!-- ================== END BASE JS ================== -->
</body>
</html>

<script>
	var editor=CKEDITOR.replace('editor1',{
		extraPlugins:'filebrowser',
		filebrowserBrowseUrl:'browser.php',
		filebrowserUploadMethod:"form",
		filebrowserUploadUrl:"upload.php"
	});
</script>

<?php }  ?>