<?php include 'inc/header.php'; ?>





<main role="main">

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
	<h1 class="display-3">Find a Job!</h1>
	<form action="index.php" method="get">
		<select name="category" class="form-control">
			<option value="0">Choose Category</option>
			<?php foreach($categories as $category): ?>
				<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
			<?php endforeach ?>
		</select>
		<br>
		<button type="submit" class="btn btn-lg btn-success" value="FIND">Search</button>
	</form>
	</div>
</div>

<div class="container">

	<?php foreach($jobs as $job): ?>
		<div class="row">
			<div class="col-md-10">
				<h4><?php echo $job->job_title; ?></h4>
				<p><?php echo $job->description; ?></p>
			</div>
			<div class="col-md-2">
			<a cl	ass="btn btn-secondary" href="job.php?job_id=<?php echo $job->id; ?>" role="button">View &raquo;</a>
			</div>
		</div>
	<?php endforeach; ?>
</div>

<hr>

</div> <!-- /container -->

</main>




<?php include 'inc/footer.php'; ?>