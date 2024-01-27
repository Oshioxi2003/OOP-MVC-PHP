<div class="card col col-md-6 col-lg-6 mx-3 mx-md-auto p-0" style="margin-bottom:20px;">
	<div class="card-header">
		<h3 class="card-title">Quên mật khẩu</h3>
	</div>
	<div class="card-body">
		<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
			
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" id="email" required />
			</div>
			<input class="btn btn-primary" name="submit" type="submit" value="Gửi yêu cầu " />
			<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>home/index">Huỷ bỏ</a>
		</form>
 	</div>
</div>