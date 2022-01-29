<?php

    // function demo(){
    //     echo 'Hello World';
    // }

    // echo '<br/>=============<br/>';
    // demo();
    // echo '<br/>=============<br/>';
    // demo();
    // echo '<br/>=============<br/>';
    // demo();


    // function demo($data){
    //     // echo 'Hello World';
    //     echo $data;
    // }

    // echo '<br/>=============<br/>';
    // demo('Hello World');
    // echo '<br/>=============<br/>';
    // demo('Hello Bangladesh');
    // echo '<br/>=============<br/>';
    // demo('Hello Dhaka');

    /* function addition($a,$b=null){
        $result = $a+$b;
        //  echo $result;
        return $result;
     }

    $x = addition(20,50);
    // $x = addition(20);
    echo $x; */



    if(isset($_POST['btn'])){
        function makeFullName(){
            $data1 = $_POST['first_name'];
            $data2 = $_POST['last_name'];
            $fullName = $data1.' '.$data2;
            
            return $fullName;
        }
        $fullName = makeFullName();
    }
    
?>

<form action="" method="POST">
        <table>
            <tr>
                <td>First Name :</td>
                <td>
                    <input type="text" name="first_name" placeholder="Write your First Name">
                </td>
            </tr>
            <tr>
                <td>Last Name :</td>
                <td>
                    <input type="text" name="last_name" placeholder="Write your Last Name">
                </td>
            </tr>
            <tr>
                <td>Full Name :</td>
                <td>
                    <input type="text" name="full_name" placeholder="Write your Full name" value="<?php if(isset($fullName)){echo $fullName;} ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btn" value="Button">
                </td>
            </tr>
        </table>
    </form>




    <?php

    // if(isset($_POST['btn'])){
    //     function findCharacterAndWord(){
    //         $value= $_POST['string'];
    //         $data = [];
    //         $data['totalWord'] = str_word_count($value);
    //         $data['totalCharacter'] = strlen($value);
    
    //         return $data;
    //     }
    
    //     $data = findCharacterAndWord();
    // }

    ?>


    <!-- <form action="" method="POST">
        <table>
            <tr>
                <td>String :</td>
                <td>
                    <input type="text" name="string" placeholder="Write a String">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btn" value="Button">
                </td>
            </tr>
        </table>
        <hr/>

        <h2>Total String Word :<?php  // if(isset($data['totalWord'])){echo $data['totalWord'];}?> </h2>
        <h2>Total String Character :<?php // if(isset($data['totalCharacter'])){echo $data['totalCharacter'];}?></h2>
    </form> -->

    