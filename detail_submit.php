<?php
    require_once('db.php');
    header('Location:contact.php');

    if(isset($_POST['submit'])) {

        $first_name = $_REQUEST['first_name'];
        $second_name = $_REQUEST['second_name'];
        $mobile_no = $_REQUEST['mobile_no'];
        $email = $_REQUEST['email'];
        
        $q= "INSERT INTO contact_form(first_name, second_name, mobile_no, email) VALUES ('$first_name', '$second_name', '$mobile_no', '$email')";

         mysqli_query($db, $q);
        // if($result) {
        //     echo "<script>
        //         alert('your details has been submitted');
        //         </script>";
        // }
    



    }
?>
