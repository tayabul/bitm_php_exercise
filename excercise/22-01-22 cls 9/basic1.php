<?php

    $number1= $_POST['first_number'];
    $number2= $_POST['last_number'];
    $result = "";

    if($number1<$number2){
        for($i=$number1; $i<=$number2; $i++){
            $result.=$i.' ';
        }
    }elseif($number1>$number2){
        for($i=$number1; $i>=$number2; $i--){
            $result.=$i.' ';
        }
    }
    
        
?>



<form action="" method="POST">
    <table>
        <tr>
            <td>Starting Number :</td>
            <td><input type="number" name="first_number" value="" placeholder="First Number"></td>
        </tr>
        <tr>
            <td>Ending Number :</td>
            <td><input type="number" name="last_number" value="" placeholder="Last Number"></td>
        </tr>
        <tr>
            <td>Result :</td>
            <td><textarea type="text"name="number" id="" cols="20" rows="10" placeholder="Result"><?php echo $result;?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Go" ></td>
        </tr>
    </table>
</form>