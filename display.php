<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<?php include('db.php'); ?>
    <?php

        if(isset($_POST['submit'])){
            $userName = $_POST['userName'];
            $userMobile = $_POST['userMobile'];
            $img = $_FILES['userfile'];

            //image data
            $imgfileName = $img['name'];
            $imgfileTmpName = $img['tmp_name'];
            $imgfileError = $img['error'];

            $filename_separarte = explode(".",$imgfileName);

            // $file_extension = strtolower($filename_separarte[1]);
            
            $file_extension = strtolower(end($filename_separarte));

            $extension = ['png','jpeg','jpg'];
            if(in_array($file_extension,$extension)){
                $upload_Image = "img/".$imgfileName;
                move_uploaded_file($imgfileTmpName,$upload_Image);

                $query = "INSERT INTO `registration` (name,mobile,img) values ('$userName','$userMobile','$upload_Image')";
                $result = mysqli_query($connect,$query);
                if($result){
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Success!</strong>Your Data Insert Successfully!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                }else{
                    die("Query is failed".mysqli_error($connect));
                    header('location:indexx.php');
                    exit();
                }
            }
        }
        
    ?>
<body>


    <h1 class='text-center'>User Data</h1>
    <div class="container mt-5 d-flex justify-content-center">
    <table class="table table-bordered w-50">
  <thead class='table-dark'>
    <tr>
      <th scope="col">SL NAME</th>
      <th scope="col">Username</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    <?php

        $sql = "SELECT * FROM `registration`";
        $loop = mysqli_query($connect,$sql);
        while($rows = mysqli_fetch_assoc($loop)){
            $id = $rows['id'];
            $name = $rows['name'];
            $image = $rows['img'];
            echo "    
            <tr>
                <th>$id</th>
                <td>$name</td>
                <td><img class='w-25' src='$image'></td>
            </tr>";
        }

    ?>
  </tbody>
</table>
    </div>
        
    
</body>
</html>