<?php

    function inputFeild($placeholder,$name,$value,$type){
        $element = "
            <div class='form-group mt-3'>
                <input type='$type' name='$name' class='form-control' placeholder='$placeholder' value='$value' autocomplete =\"off\">
            </div>";

            echo $element;
    }




?>