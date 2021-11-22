<?php

$employee = 		$responseEmp["data"];
$departments = 	$responseDepts["data"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?= BASE_URL . "/node_modules/normalize.css/normalize.css" ?>">
	<link rel="stylesheet" href="<?= BASE_URL . "/node_modules/bootstrap/dist/css/bootstrap.min.css" ?>">
	<link rel="stylesheet" href="<?= BASE_URL . "/assets/css/style.css" ?>">
	<script src="<?= BASE_URL . "/node_modules/bootstrap/dist/js/bootstrap.min.js" ?>"></script>
</head>

<body>
	<?php include(BASE_PATH . "/assets/html/header.html") ?>;
	<main>
		<div class="container-sm">
			<h1 class="display-6 m-0 p-0">Employee</h1>
			<hr>
			<form method="POST" action="?controller=employee&action=editEmployee">
				<input type="hidden" id="emp_no" name="emp_no" value="<?= $employee['emp_no'] ?>" />
				<div class="row">
					<div class="col-4 my-2">
						<label class="fw-normal" for="emp_name">First name</label>
						<input class="form-control my-2" type="text" id="first_name" name="first_name" value="<?= $employee['first_name'] ?>" />
					</div>
					<div class="col-4 my-2">
						<label class="fw-normal" for="emp_last">Last name</label>
						<input class="form-control my-2" type="text" id="last_name" name="last_name" value="<?= $employee['last_name'] ?>" />
					</div>
					<div class="col-4 my-2">
						<label class="fw-normal" for="gender">Gender</label>
						<select class="form-select my-2" id="gender" name="gender">
							<option value="<?= $employee['gender'] ?>" disabled><?= $employee['gender'] ?></option>
							<option value="M">M</option>
							<option value="F">F</option>
						</select>
					</div>
					<div class="col-6 my-2">
						<label class="fw-normal" for="salary">Salary</label>
						<input class="form-control my-2" type="number" id="salary" name="salary" value="<?= $employee['salary'] ?>" />
					</div>
					<div class="col-6 my-2">
						<label class="fw-normal" for="dept_name">Department</label>
						<select class="form-select my-2" id="dept_no" name="dept_no">
							<option value="<?= $employee['dept_no'] ?>" disabled selected><?= $employee['dept_name'] ?></option>
							<?php foreach ($departments as $department) : ?>
								<option value="<?= $department['dept_no'] ?>"><?= $department['dept_name'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="col-12 my-2 d-flex justify-content-center gap-3">
						<button class="btn btn-primary btn-lg" type="reset">Clear</button>
						<button class="btn btn-primary btn-lg" type="submit">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</main>
</body>

</html>