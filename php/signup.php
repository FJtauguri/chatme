<?php 
// echo("hellowsss");
// reports of error
error_reporting(E_ALL);
ini_set('display_errors', 1);

    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        // validating email
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            // verying email if already exist
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email ='{$email}'");
            if(mysqli_num_rows($sql) > 0) { 
                echo "$email - Already exist";
            } else {
                // file uploaded or not
                if(isset($_FILES['image'])){ //if file is uploaded
                    $img_name = $_FILES['image']['name']; //getting the users upload
                    $img_type = $_FILES['image']['type']; //getting the users upload type
                    $tmp_name = $_FILES['image']['tmp_name']; //getting the users upload filename and storage of image

                    // explode image and get the last extension
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode); //session of getting extension

                    $extensions = ['jpeg', 'jpg', 'png']; //acceptor

                    if(in_array($img_ext, $img_explode) === true){
                        $time = time(); //the current time

                        // moving uploaded img file to part_forlder
                        $new_img_name = $time.$img_name; //renaming file
                        // move_uploaded_file($tmp_name, "profile/".$new_img_name);
                        if(move_uploaded_file($tmp_name, "ico/".$new_img_name)){ //when successfully move
                            $status = "Active now";
                            $random_id = rand(time(), 10000000); //random id of user
                            $sql2 = mysqli_query($conn, "INSERT INTO users (inuq_id, fname, lname, email, password, img, status)
                                                VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");
                            if($sql2) {
                                // $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{password}'");
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if(mysqli_num_rows($sql3) > 0) {
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['inuq_id'] = $row['inuq_id'];
                                    echo "success";
                                } else {
                                    echo "Unexpected interruption. Try again, baka!";
                                }
                            } else {
                                echo "Oops! Something went wrong!";
                            }
                        }
                    }else {
                        echo "Must be a jpg, jpeg or png type";
                    }
                } else {
                    echo "Please select image profile";
                }
            }
        } else {
            echo "$email - This is not a valid email! Try Again";
        }
    } else {
        echo "Required to fulfill all form input";
    }

?>