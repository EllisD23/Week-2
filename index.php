<?php

$firstname = filter_input(INPUT_GET, 'fname', FILTER_SANITIZE_STRING); //sanitize the script
$lastname = filter_input(INPUT_GET, 'lname', FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);

if (!empty($firstname) && !empty($lastname) && !empty($age)) {
    echo 'Hello, my name is '. $firstname .' '. $lastname . '.'. "<br>";
    if($age >= 18){
        echo 'I am ' . $age . ' years old and I am old enough to vote in the United States.'. "<br>";
    }else{
        echo 'I am ' . $age . ' years old and I am not old enough to vote in the United States.'. "<br>";
    }
    $days_old = $age * 365;
    echo 'I am '. $days_old . ' old as of ' . date('m/d/y');
} else {
    echo "missing data";
}



?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Information</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <div class="container">
            <h1>Personal Information</h1>
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
                <div id="data">
                    <div class="mb-3">
                        <label for="first" class="form-lable">First Name</label>
                        <input type="text" class="form-control" name="fname" autocomplete="off"><br>

                        <label for="last" class="form-lable">Last Name</label>
                        <input type="text" class="form-control" name="lname" autocomplete="off"><br>

                        <label for="age" class="form-lable">Age</label>
                        <input type="text" class="form-control" name="age" autocomplete="off"><br>
                    </div>
                    <div>
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
            <div id="date">
                        <?php $date = date('m/d/y');
                        echo $date; ?>
                    </div>
        </div>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>