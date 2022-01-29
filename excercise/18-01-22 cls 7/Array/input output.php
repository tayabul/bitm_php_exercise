
<?php
    echo '<pre/>';
    print_r($_POST);


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$full_name = $first_name.' '.$last_name;

// echo $full_name;
?>

<form action="" method='POST'>
    <table>
        <tr>
            <td>First Name :</td>
            <td><input type="text" name='first_name' value=''></td>
        </tr>
        <tr>
            <td>Last Name :</td>
            <td><input type="text" name='last_name' value=''></td>
        </tr>
        <tr>
            <td>Full Name :</td>
            <td><input type="text" name='full_name' value='<?php echo $full_name; ?>'></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name='submit' value='Show'></td>
        </tr>
    </table>
</form>
