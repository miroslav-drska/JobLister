<?php include 'inc/header.php'; ?>
	<div class="container">
		<h2 class="page-header">Create Jobs Listing</h2>
		<form action="create.php" method="post">
			<div class="form-group">
				<label for="">Company</label>
				<input type="text" name="company" id="" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Category</label>
				<select type="text" name="category" id="" class="form-control">
				<option value="0">Choose Category</option>
				<?php foreach($categories as $category): ?>
					<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
				<?php endforeach ?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Job Title</label>
				<input type="text" name="job_title" id="" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Description</label>
				<textarea type="text" name="description" id="" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label for="">Location</label>
				<input type="text" name="location" id="" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Salary</label>
				<input type="text" name="salary" id="" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Contact User</label>
				<input type="text" name="contact_user" id="" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Contact Email</label>
				<input type="text" name="contact_email" id="" class="form-control">
			</div>
			<button type="submit" name="submit" class="btn btn-success">Post Job</button>
		</form>
	</div>
<?php include 'inc/footer.php' ?>
