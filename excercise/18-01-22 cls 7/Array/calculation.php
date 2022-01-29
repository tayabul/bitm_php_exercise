
<?php
    echo '<pre/>';
    print_r($_POST);

   $first_number = $_POST['first_number'];
   $second_number = $_POST['second_number'];
   $btn = $_POST['btn'];
   $show = '';


   /* if condition */

//    if($btn == '+'){
//        $show = $first_number + $second_number;
//    }
//    if($btn == '-'){
//     $show = $first_number - $second_number;
//    }
//    if($btn == '*'){
//        $show = $first_number * $second_number;
//     }
//    if($btn == '/'){
//     $show = $first_number / $second_number;
//    }
//    if($btn == '%'){
//     $show = $first_number % $second_number;
//    }


   /* swich condition */

   switch($btn){
       case '+';
       $show = $first_number + $second_number;
       break;
       case '-';
       $show = $first_number - $second_number;
       break;
       case '*';
       $show = $first_number * $second_number;
       break;
       case '/';
       $show = $first_number / $second_number;
       break;
       case '%';
       $show = $first_number % $second_number;
       break;
   }
    

?>

<form action="" method='POST'>
    <table>
        <tr>
            <td>First Number :</td>
            <td><input type="number" name='first_number' value=''></td>
        </tr>
        <tr>
            <td>Second Number :</td>
            <td><input type="number" name='second_number' value=''></td>
        </tr>
        <tr>
            <td>Equal Number :</td>
            <td><input type="number" name='equal_number' value='<?php echo $show; ?>'></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name='btn' value='+'>
                <input type="submit" name='btn' value='-'>
                <input type="submit" name='btn' value='*'>
                <input type="submit" name='btn' value='/'>
                <input type="submit" name='btn' value='%'>
            </td>
            
        </tr>
    </table>
</form>