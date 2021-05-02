<?php
    $name = $user['name'];
    $email = $user['email'];
    $no_data = "not submited";
    $tel = isset($user['telephone']) ? $user['telephone'] : $no_data;
    // echo "<h1>" . $tel . "</h1><br>";
?>

<div class="card">
    <div class="card_header">
        <div id="close_card"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="student_basic_data">
            <div class="avatar">
                <img src="./img/man_student.jpg" alt="student_img" id="student_img">
            </div>
            <h3><?php echo $name ?></h3>
            <div class="is_student">
                <h5>STUDENT</h5>
            </div>
                <div class="student_id">
                    <h5 id="id_number">ID: 1234567</h5>
                </div>
        </div>
    </div>

    <div class="card_body">
         <!-- div with cources info -->
            <div class="courses_info">
                    <div id="ci_elem">                       
                        <h5 id="responsive_txt">Complete</h5>
                        <h6 id="responsive_txt">Enrolment status</h6>
                    </div>
                    <div id="ci_elem">
                        <h5 id="responsive_txt"> 11 </h5>
                        <h6 id="responsive_txt">Completed courses</h6>
                    </div>
            </div> 

        <!-- student details -->
        <div class="student_details">
            <h5>CONTACT DETAILS:</h5>
            <?php 
            if(isset($email)){
                echo "Email: " . $email ;
            }else{
                echo "Email: " . $no_data;
            }
            ?>
            <h5>Tel: <?php echo $tel; ?></h5>
            <h5>ABOUT ME:</h5>
            <p>short student's descriptions - hardcoded.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="more_info">
            <div class="current_courses">
                <div id="course_icon"><i id="center_icon" class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                <div>
                    <h5>Current Course:</h5>
                    <p id="responsive_txt">A-LEVEL BIOLOGY</p>
                </div>
                <div id="open_more">
                    <p>>></p>
                </div>
            </div>
            <div class="my_photos">
                <div id="x">
                    <h5>My Photos</h5>
                </div>
                <div>
                    <p id="more_imgs">>></p>
                </div>
                <div hidden id="img_gallery">
                    <div class="gallery">
                        <div class="first_img"></div>
                        <div class="second_img"></div>
                        <div class="third-img"></div>
                        <div class="fourth-img">
                            <div id="center_icon">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>
