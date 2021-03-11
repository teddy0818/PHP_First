<?php
  $edit_emp_no = $_POST[ 'edit_emp_no' ];
  $jb_conn = mysqli_connect( 'localhost', 'root', '111111', 'employees', '3306'); 
  $jb_sql_edit = "SELECT * FROM employees WHERE emp_no = $edit_emp_no;";
  $jb_result = mysqli_query( $jb_conn, $jb_sql_edit );
  $jb_row = mysqli_fetch_array( $jb_result );
?>

<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Edit Employee</title>
    <style>
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
      }
    </style>
  </head>
  <body>
    <h1>Edit Employee</h1>
    <form action="employees_update.php" method="POST">
      <input type="hidden" name="emp_no" value="<?php echo $jb_row[ 'emp_no' ]; ?>">
      <p>NO <?php echo $jb_row[ 'emp_no' ]; ?></p>
      <p>Birth Date <input type="date" name="birth_date" value="<?php echo $jb_row[ 'birth_date' ]; ?>" required></p>
      <p>First Name <input type="text" name="first_name" value="<?php echo $jb_row[ 'first_name' ]; ?>" required></p>
      <p>Last Name <input type="text" name="last_name" value="<?php echo $jb_row[ 'last_name' ]; ?>" required></p>
      <p>Gender <select name="gender" required>
        <option value="M" <?php if ( $jb_row[ 'gender' ] == 'M' ) { echo 'selected'; } ?>>M</option> <!--// 'M' 여기부분 작은따옴표로 감싸줘야함-->
        <option value="F" <?php if ( $jb_row[ 'gender' ] == 'F' ) { echo 'selected'; } ?>>F</option>
      </select></p>
      <p>Hire Date <input type="date" name="hire_date" value="<?php echo $jb_row[ 'hire_date' ]; ?>" required></p>
      <button>Edit</button>
    </form>
  </body>
</html>