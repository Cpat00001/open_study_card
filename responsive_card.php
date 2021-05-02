<?php
    $name = $user['name'];
    $no_data = "not submited";
    $email = empty($user['email'])? $no_data : $user['email'];
    $tel = empty($user['telephone']) ? $no_data : $user['telephone'];
    $stud_id = empty($user["id"])? $no_data : $user["id"];
    $current_course = empty($user["course_title"])? "Please enroll to new course" : $user['course_title'];
   
?>

<div class="card" id="stud_card">
    <div class="card_header">
        <div id="close_card"><i class="fa fa-times fa-lg" aria-hidden="true"></i></div>
        <div class="student_basic_data">
            <div class="avatar">
                <img src="./img/man_student.jpg" alt="student_img" id="student_img">
                <div id="small_circle">
                    <i class="fa fa-check"></i>
                </div>
            </div>
            <h3><?php echo $name ?></h3>
            <div class="is_student">
                <h5>STUDENT</h5>
            </div>
                <div class="student_id">
                    <h5 id="id_number">ID: <?php echo $stud_id; ?></h5>
                </div>
        </div>
    </div>

    <div class="card_body">
         <!-- div with cources info -->
            <div class="courses_info">
                    <div id="ci_elem">                       
                        <h5 id="responsive_txt">Complete</h5>
                        <h6 id="responsive_txt_darker">Enrolment status</h6>
                    </div>
                    <div id="ci_elem">
                        <h5 id="responsive_txt"> 3 </h5>
                        <h6 id="responsive_txt_darker">Completed courses</h6>
                    </div>
            </div> 

        <!-- student details -->
        <div class="student_details">
            <h5 id="responsive_txt_darker">CONTACT DETAILS:</h5>
            <?php echo "<h5>Email: " . $email . "</h5>"; ?>
            <h5>Tel: <?php echo $tel; ?></h5>
            <h5 id="responsive_txt_darker">ABOUT ME:</h5>
            <p>short student's descriptions - hardcoded.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="more_info">
            <div class="current_courses">
                <div id="course_icon"><i id="center_icon" class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                <div>
                    <h5>Current Course:</h5>
                    <p id="responsive_txt_course"><?php echo $current_course; ?></p>
                </div>
                <div id="open_more">
                    <p><i class="fa fa-angle-double-right" aria-hidden="true"></i></p>
                </div>
            </div>
            <div class="my_photos">
                <div id="x">
                    <h5>My Photos</h5>
                </div>
                <div>
                    <!-- <p id="more_imgs">>></p> -->
                    <p id="more_imgs"><i class="fa fa-angle-double-right" aria-hidden="true"></i></p>
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
