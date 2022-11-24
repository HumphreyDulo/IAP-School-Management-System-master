<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="fonts/stylesheet.css">
<link rel="stylesheet" href="css/main.css">

<div class="st_reg fix">
	<h2>Course Registration Form</h2>
	<p class="msg">


	</p>

	<form action="" method="post" id="st_form">
		@csrf
		<table>
			<tr>
				<th>Course Name: </th>
				<td><input type="text" name="coursename" placeholder="course" required /></td>
			</tr>
			<tr>
			<tr>
				<th>Course ID: </th>
				<td><input type="text" name="cid" placeholder="course Id" required /></td>
			</tr>
			<tr>
				<th>Student ID </th>
				<td><input type="text" name="sid" placeholder="student ID" required /></td>
			</tr>

			<td colspan="2"><input type="submit" value="Register" /></td>
			</tr>
		</table>
	</form>
	<button><a href="\home"><i class="fa fa-sign-in" aria-hidden="true"></i> Back</a></button>
</div>

