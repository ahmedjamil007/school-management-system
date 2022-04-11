<!--connecting database-->
<?php include"connection.php"; ?>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<?php 
//storing data in message table.
    
if(isset($_POST['publish_message'])){

    // Getting data from form and storing in variables (with SQL injection).
    $name = mysqli_real_escape_string( $connection, $_POST['name'] );
    $position = mysqli_real_escape_string( $connection, $_POST['position'] );
    $message = mysqli_real_escape_string( $connection, $_POST['message'] );

    // Getting data from form and storing in variables for picture.
    $file = $_FILES['message_photo'];
    $file_name = $_FILES['message_photo']['name'];
    $file_tmp_name = $_FILES['message_photo']['tmp_name'];
    $file_size = $_FILES['message_photo']['size'];
    $file_error = $_FILES['message_photo']['error'];
    $file_type = $_FILES['message_photo']['type'];

    $file_explode = explode('.', $file_name);
    $file_extension = strtolower(end($file_explode));

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($file_extension, $allowed)){

        if($file_error === 0){

            if($file_size < 3200000){

                $new_file_name = uniqid('',true) . "." . $file_extension;

                $file_destination = "../Media/Message_photos/" . $new_file_name;

                // uploading picture.
                move_uploaded_file($file_tmp_name, $file_destination);

                // Form data insertion in Database: ambia_madrasa, Table name: messages_table.
               
                //Data insertion.
                $sql = "INSERT INTO committe_table (messenger_name, messenger_position, msg, messenger_picture) VALUES ('$name', '$position', '$message', '$new_file_name');";
                                
                mysqli_query($connection, $sql);
                
                header("Location: ../1.1comitte msg.php");

            }else{
            echo "File is to big, maximum 3MB allowed.";
        }

        }else{
            echo "There was an error uploading this file.";
        }

    }else{
        echo "Only .jpg, .jpeg and .png files allowed.";
    }

}

?>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<?php 
// Function to show messages that are stored in database.
function showMessages() {
global $connection; 
        
        //Data read.
        $read_messages = "SELECT * FROM committe_table ORDER BY message_id DESC;";
    
        $result = mysqli_query($connection, $read_messages);
        
        while($row = mysqli_fetch_assoc($result)) {
            
            $id = $row['message_id'];
            $name = $row['messenger_name'];
            $position = $row['messenger_position'];
            $message = $row['msg'];
            $pic = $row['messenger_picture'];

//post template

            echo "<div class='message_template'>";

            echo "<div class='message_body'>";
            
            echo "<img src='Media/Message_photos/$pic' alt='Upload Photo' alt='Err404' width='200px' class='messenger_photo'>";

            echo "<p class='text name'>$name</p>";

            echo "<p class='text position'>$position</p>";

            echo "<p class='text message'>$message</p>";

            echo "</div>";

            echo "<form class='btns' action='Dynamic/committe_msg.php' method='post'>";

            echo    "<input type='hidden' name='id' value='$id'>";

            echo    "<input type='hidden' name='old_pic' value='$pic'>";

            echo    "<div><a href='1.1comitte msg.php?pd=$id'><i class='fas fa-pen edit'></i></a></div>";
                
            echo    "<div><button type='submit' class='delete' name='delete_msg'><i class='fas fa-trash-alt'></i></i></button></div>";

            echo "</form>";

            echo "</div>";
        }
}
?>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<?php 
//updating data in message table.
    
if(isset($_POST['edit_message'])){

    // Getting data from form and storing in variables (with SQL injection).
    $id = $_POST['id'];
    $name = mysqli_real_escape_string( $connection, $_POST['name'] );
    $position = mysqli_real_escape_string( $connection, $_POST['position'] );
    $message = mysqli_real_escape_string( $connection, $_POST['message'] );
    $old_picture_name = $_POST['old_pic'];

    //unlinking old file
    $file_path = "../Media/Message_photos/" . $old_picture_name;
    unlink($file_path);

    // Getting data from form and storing in variables for picture.
    $file = $_FILES['message_photo'];
    $file_name = $_FILES['message_photo']['name'];
    $file_tmp_name = $_FILES['message_photo']['tmp_name'];
    $file_size = $_FILES['message_photo']['size'];
    $file_error = $_FILES['message_photo']['error'];
    $file_type = $_FILES['message_photo']['type'];

    $file_explode = explode('.', $file_name);
    $file_extension = strtolower(end($file_explode));

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($file_extension, $allowed)){

        if($file_error === 0){

            if($file_size < 3200000){

                $new_file_name = uniqid('',true) . "." . $file_extension;

                $file_destination = "../Media/Message_photos/" . $new_file_name;

                // uploading picture.
                move_uploaded_file($file_tmp_name, $file_destination);

                // Form data insertion in Database: ambia_madrasa, Table name: messages_table.
               
                //Data update.
                $sql = "UPDATE committe_table SET messenger_name = '$name', messenger_position = '$position', msg = '$message', messenger_picture = '$new_file_name' WHERE message_id = $id; ";
                                
                mysqli_query($connection, $sql);
                
                header("Location: ../1.1comitte msg.php");

            }else{
            echo "File is to big, maximum 3MB allowed.";
        }

        }else{
            echo "There was an error uploading this file.";
        }

    }else{
        echo "Only .jpg, .jpeg and .png files allowed.";
    }

}

?>
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------->
<?php 

// message delete.
if(isset($_POST['delete_msg'])){
        
    // Getting data from form and storing in variables.
    $id = $_POST['id'];
    $old_picture_name = $_POST['old_pic'];

    //unlinking old file
    $file_path = "../Media/Message_photos/" . $old_picture_name;
    unlink($file_path);

    // Query.    
    $sql = "DELETE FROM committe_table WHERE message_id = $id; ";

    mysqli_query($connection, $sql);

    header("Location: ../1.1comitte msg.php");
    
}

?>