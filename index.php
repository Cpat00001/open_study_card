<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css">
    <!-- font awsome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./img/font-awesome-4.7.0/css/font-awesome.min.css">

    <title>Student's card</title>
</head>
<body>
        <!-- url to get data
            http:/ leads.beta.openstudycollege.info/getTopLeads 
        -->
<?php 
        //get data from uri
        $url_data = 'http://leads.beta.openstudycollege.info/getTopLeads';
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url_data );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $json_data = curl_exec($ch);
        curl_close($ch);
        $json_data_decode = json_decode($json_data, TRUE);

        // var_dump($json_data_decode);
        //print_r($json_data_decode);
        ?>

        <div class="card_container">
            <?php
            // $chosen_user -> can be user input to find a person 
            //or can be without $chosen_user just simply foreach loop and show all students
            $chosen_user = 0;

            foreach($json_data_decode as $key => $user){

                // var_dump($key);

                if($key == $chosen_user){
                    // echo "znalalzem usera <br>";
                    // echo $key . " => " . $user['name'];
                    include 'responsive_card.php';
                }
            }
            ?>
        </div>
        <!-- add javascript files -->
        <script src="./js_files/custom_javascript.js"></script>
</body>
</html>


