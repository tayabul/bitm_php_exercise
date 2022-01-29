
<?php

    echo '<pre>';
    print_r($_POST);

    $name1= $_POST['first_name'];
    $name2= $_POST['last_name'];
    $full_name = $name1.' '.$name2;

    echo '<br/>';
    
?>

<form action="" method="POST">
    <table>
        <tr>
            <td>First Name :</td>
            <td><input type="text" name="first_name" value="" placeholder="First Nmae"></td>
        </tr>
        <tr>
            <td>Last Name :</td>
            <td><input type="text" name="last_name" value="" placeholder="Last Nmae"></td>
        </tr>
        <tr>
            <td>Full Name :</td>
            <td><input type="text" name="full_name" value="<?php echo $full_name;?>" placeholder="Full Nmae"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Show"></td>
        </tr>
    </table>
</form>