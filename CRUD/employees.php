<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emplyees</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>emp_no</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>hire_date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            $jb_conn = mysqli_connect( 'localhost', 'root', '111111', 'employees', '3306'); 


            //삭제
            $delete_emp_no = $_POST[ 'delete_emp_no' ];
            if ( isset( $delete_emp_no ) ) { // isset은 변수가 설정되어있으면 ture, 아니면 false 반환 (null)
                $jb_sql_delete = "DELETE FROM employees WHERE emp_no = '$delete_emp_no';";
                mysqli_query( $jb_conn, $jb_sql_delete );
                echo '<p style="color: red;">Employee ' . $delete_emp_no . ' is deleted.</p>';
              } else {
                  echo '삭제할거없음';
              }

            //

            $jb_sql = "SELECT * FROM employees LIMIT 5;";
            $jb_result = mysqli_query( $jb_conn, $jb_sql );


             while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
            $jb_edit = '
            <form action="employees_edit.php" method="POST">
                <input type="hidden" name="edit_emp_no" value="' . $jb_row[ 'emp_no' ] . '">
                <input type="submit" value="Edit">
            </form>
            ';

            $jb_delete = '
              <form action="employees.php" method="POST">
                <input type="hidden" name="delete_emp_no" value="' . $jb_row[ 'emp_no' ] . '">
                <input type="submit" value="Delete">
              </form>
            ';
            echo '<tr><td>' . $jb_row[ 'emp_no' ] . '</td><td>'. $jb_row[ 'first_name' ] . '</td><td>' . $jb_row[ 'last_name' ] . '</td><td>' . $jb_row[ 'hire_date' ] . '</td><td>' . $jb_edit . '</td><td>' . $jb_delete . '</td></tr>';
          }

            ?>
        </tbody>
    </table>


</body>
</html>