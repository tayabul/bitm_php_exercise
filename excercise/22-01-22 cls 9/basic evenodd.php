<?php

    $data1= $_POST['first_number'];
    $data2= $_POST['last_number'];
    $check = $_POST['generate'];
    $result ='';

    if($check == 'even'){
        for($i=$data1; $i<=$data2; $i++){
            if($i%2==0){
                $result.= $i.' ';
            }
        }
    }

    if($check == 'even'){
        for($i=$data1; $i>=$data2; $i--){
            if($i%2==0){
                $result.= $i.' ';
            }
        }
    }

    if($check == 'odd'){
        for($i=$data1; $i<=$data2; $i++){
            if($i%2!=0){
                $result.= $i.' ';
            }
        }
    }

    if($check == 'odd'){
        for($i=$data1; $i>=$data2; $i--){
            if($i%2!=0){
                $result.= $i.' ';
            }
        }
    }


?>


<form action="" method="POST">
    <table>
        <tr>
            <td>First Number :</td>
            <td>
                <input type="number" name="first_number" placeholder="First Number"> 
            </td>
        </tr>
        <tr>
            <td>Last Number :</td>
            <td>
                <input type="number" name="last_number" placeholder="Last Number"> 
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="radio" name="generate" value="even" required> Even
                <input type="radio" name="generate" value="odd" required> Odd
            </td>
        </tr>
        <tr>
            <td>Show :</td>
            <td>
                <textarea name="text" id="" cols="20" rows="10" placeholder="Output"><?php echo $result;?> </textarea> 
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btn" value="Result"> 
            </td>
        </tr>
    </table>
</form>