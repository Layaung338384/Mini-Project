<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php include('opreation.php'); ?>
    <h1 class='text-center mt-3'>Registration Page</h1>

    <div class="container d-flex justify-content-center ">
        <form action="display.php" method="post" class='w-50' enctype="multipart/form-data">
            <?php  inputFeild("Username","userName","","text") ; ?>
            <?php  inputFeild("Mobile","userMobile","","text") ; ?>
            <?php  inputFeild("","userfile","","file") ; ?>
            <button class="btn btn-dark mt-3" type="submit" name="submit" >Submit</button>
        </form>
    </div>

</body>
</html>