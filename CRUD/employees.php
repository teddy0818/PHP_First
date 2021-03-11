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
            </tr>
        </thead>
        <tbody>
            <?php 
            
            $jb_conn = mysqli_connect( 'localhost', 'root', '111111', 'employees', '3306'); 
            $jb_sql = "SELECT * FROM employees LIMIT 5;";
            $jb_result = mysqli_query( $jb_conn, $jb_sql );

            while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
                echo '<tr><td>' . $jb_row[ 'emp_no' ] . '</td><td>'. $jb_row[ 'first_name' ] . '</td><td>' . $jb_row[ 'last_name' ] . '</td><td>' . $jb_row[ 'hire_date' ] . '</td></tr>';
            }
            ?>
        </tbody>
    </table>
                



</body>
</html>