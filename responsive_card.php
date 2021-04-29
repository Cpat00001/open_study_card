<?php
    $name = $user['name'];
    $email = $user['email'];
    $no_data = "not submited";
    $tel = isset($user['telephone']) ? $user['telephone'] : $no_data;
    echo "<h1>" . $tel . "</h1><br>";
?>

<div class="card">
    <div class="card_header">
        <h3><?php echo $name ?></h3>
    </div>

    <div class="card_body">
         <!-- div with cources info -->
            <div class="courses_info">
                    <div id="ci_elem">
                        <h5>Complete</h5>
                        <h6>Enrolment status</h6>
                    </div>
                    <div id="ci_elem">
                        <h5> 11 </h5>
                        <h6>Completed courses</h6>
                    </div>
            </div> 

        <!-- student details -->
        <div class="student_details">
            <h5>CONTACT DETAILS:</h5>
            <?php 
            if(isset($email)){
                echo "Email: " . $email;
            }else{
                echo "Email: " . $no_data;
            }
            ?>
            <h5>Tel: <?php echo $tel; ?></h5>
            <h5>About me:</h5>
            <p>short student's descriptions - hardcoded.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        
    </div>
</div>
