<?php
include('./includes/global.php');
include('./components/includes.php');
include('./components/header.php');
include('./components/right_sidebar.php');
include('./components/left_sidebar.php');
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="main-card mb-3 card col-md-12">
                        <div class="card-body">
                            <?php
                            $submit = @$_POST['submit'];
                            $first_name = strip_tags(@$_POST['first_name']);
                            $last_name = strip_tags(@$_POST['last_name']);
                            $email = strip_tags(@$_POST['email']);
                            $about = strip_tags(@$_POST['about']);
                            $education_title = strip_tags(@$_POST['education_title']);
                            $education_year = strip_tags(@$_POST['education_year']);
                            $education_from = strip_tags(@$_POST['education_from']);
                            $education_title2 = strip_tags(@$_POST['education_title2']);
                            $education_year2 = strip_tags(@$_POST['education_year2']);
                            $education_from2 = strip_tags(@$_POST['education_from2']);
                            $mobile = strip_tags(@$_POST['mobile']);
                            $address = strip_tags(@$_POST['address']);
                            $work_experience = strip_tags(@$_POST['work_experience']);
                            $award = strip_tags(@$_POST['award']);
                            $award_date = strip_tags(@$_POST['award_date']);
                            $award_for = strip_tags(@$_POST['award_for']);
                            $award2 = strip_tags(@$_POST['award2']);
                            $award_date2 = strip_tags(@$_POST['award_date2']);
                            $award_for2 = strip_tags(@$_POST['award_for2']);
                            $profile_picture = strip_tags(@$_POST['profile_picture']);
                            $additional_title = (@$_POST['additional_title']);
                            $additional_content = (@$_POST['additional_content']);
                            if (is_array($additional_title) || is_object($additional_title)) {
                                foreach (@$additional_title as $row) {
                                    @$additional_title .= $row . ",";
                                }
                                foreach (@$additional_content as $row) {
                                    @$additional_content .= $row . ",";
                                }
                            }
                            $additional_title = substr($additional_title, 5, -1);
                            $additional_additional_contentcontetn = substr($additional_content, 5, -1);
                            $created_at = date("Y/m/d");
                            if ($submit) {
                                if ($first_name) {
                                    // UPLOADING PROFILE PIC
                                    $length = 10;
                                    $random = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
                                    $folder = mkdir("core/resume_picture/$random");
                                    $target_dir = "core/resume_picture/$random/";
                                    $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);
                                    $uploadOk = 1;
                                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                                    if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
                                        $profile_picture = htmlspecialchars(basename($_FILES["profile_picture"]["name"]));
                                    } else {
                                        echo "Sorry, there was an error uploading your file.";
                                    }


                                    $insert_student = "INSERT INTO `resume_data`(`resume_id`, `first_name`,`last_name`, `email`, `about`, `education_title`, `education_year`, `education_from`,
                                 `education_title2`, `education_year2`, `education_from2`, `mobile`, `address`, `work_experience`, `award`, `award_date`, `award_for`,
                                  `award2`, `award_date2`, `award_for2`, `user_id`,`additional_title`, `additional_content`, `profile_picture`, `created_at`) VALUES 
                                  (NULL,'$first_name','$last_name', '$email','$about','$education_title','$education_year','$education_from','$education_title2','$education_year2',
                                  '$education_from2','$mobile','$address','$work_experience','$award','$award_date','$award_for','$award2',
                                  '$award_date2','$award_for2','$userid','$additional_title', '$additional_content', '$target_file','$created_at')";
                                    $query_insertation_result = mysqli_query($conn, $insert_student);
                                    if ($query_insertation_result) {
                                        echo "<script>
                                    $(document).ready(function() {
                                        swal('', 'Inserted Successfully!', 'success');
                                    });</script>";
                                        //echo "<meta http-equiv=\"refresh\" content=\"2; url=$base_url\">";
                                    } else {
                                        echo "<script>
                                    $(document).ready(function() {
                                        swal('', 'Error Inserting Record!', 'warning');
                                    });</script>";

                                        //echo "<meta http-equiv=\"refresh\" content=\"3; url=$base_url\">";
                                    }
                                } else {
                                    echo "<script>
                                    $(document).ready(function() {
                                        swal('', 'Empty Record can not be Inserted!', 'info');
                                    });</script>";
                                    //echo "<meta http-equiv=\"refresh\" content=\"3; url=$base_url\">";
                                }
                            }
                            ?>
                            <h5 class="card-title">Resume Form</h5>
                            <form method="post" action="<?php echo $base_url; ?>" enctype="multipart/form-data" class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">First Name</label>
                                        <input type="text" class="form-control" id="validationCustom01" name="first_name" placeholder="First name" required />
                                        <div class="valid-feedback"> Looks good! </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Last Name</label>
                                        <input type="text" class="form-control" id="validationCustom01" name="last_name" placeholder="Last name" required />
                                        <div class="valid-feedback"> Looks good! </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">E-mail</label>
                                        <input type="email" class="form-control" id="validationCustom02" name="email" placeholder="Your E-mail" required />
                                        <div class="valid-feedback"> Looks good! </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustomUsername">About Yourself</label>
                                        <div class="input-group">
                                            <textarea type="text" class="form-control" id="validationCustomUsername" name="about" placeholder="About Yourself" aria-describedby="inputGroupPrepend" required></textarea>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom03">Education Heading</label>
                                        <input type="text" class="form-control" id="validationCustom03" name="education_title" placeholder="Education Heading" required />
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom04">Passing Year</label>
                                        <input type="month" class="form-control" id="validationCustom04" name="education_year" required />
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom05">Education Institute Name</label>
                                        <input type="text" class="form-control" id="validationCustom05" name="education_from" placeholder="Education Institute Name" required />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom03">Education Heading</label>
                                        <input type="text" class="form-control" id="validationCustom03" name="education_title2" placeholder="Education Heading" required />
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom04">Passing Year</label>
                                        <input type="month" class="form-control" id="validationCustom04" name="education_year2" required />
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom05">Education Institute Name</label>
                                        <input type="text" class="form-control" id="validationCustom05" name="education_from2" placeholder="Education Institute Name" required />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Mobile Number</label>
                                        <input type="number" class="form-control" id="validationCustom01" name="mobile" placeholder="Mobile Number" required />
                                        <div class="valid-feedback"> Looks good! </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Work Experience</label>
                                        <textarea type="text" class="form-control" id="validationCustom02" name="work_experience" placeholder="Work Experience" required></textarea>
                                        <div class="valid-feedback"> Looks good! </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustomUsername">Your Address</label>
                                        <div class="input-group">
                                            <textarea type="text" class="form-control" id="validationCustomUsername" name="address" placeholder="Your Address" aria-describedby="inputGroupPrepend" required></textarea>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom03">Award Heading</label>
                                        <input type="text" class="form-control" id="validationCustom03" name="award" placeholder="Award Heading" required />
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom04">Award Received Year</label>
                                        <input type="month" class="form-control" id="validationCustom04" name="award_date" required />
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom05">Award For</label>
                                        <input type="text" class="form-control" id="validationCustom04" name="award_for" placeholder="Award For" required />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom03">Award Heading</label>
                                        <input type="text" class="form-control" id="validationCustom03" name="award2" placeholder="Award Heading" required />
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom04">Award Received Year</label>
                                        <input type="month" class="form-control" id="validationCustom04" name="award_date2" required />
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom05">Award For</label>
                                        <input type="text" class="form-control" id="validationCustom04" name="award_for2" placeholder="Award For" required />
                                    </div>
                                </div>
                                <div id="content" class="form-row"></div>
                                <script>
                                    function add_fields() {
                                        var d = document.getElementById("content");

                                        d.innerHTML += "<div class='col-md-6 mb-3'><label for='validationCustom05'>Additional Information Title</label><input type='text' class='form-control' id='validationCustomUsername' name='additional_title[]' placeholder='Additional Information Title' aria-describedby='inputGroupPrepend' required></div><div class='col-md-6 mb-3'><label for='validationCustom05'>Additional Information Content</label><textarea type='text' class='form-control' id='validationCustomUsername' name='additional_content[]' placeholder='Additional Information Content' aria-describedby='inputGroupPrepend' required></textarea></div>";
                                    }
                                </script>
                                <div class="position-relative form-group"><label for="exampleAddress" class="">Profile Picture</label><input name="profile_picture" id="exampleAddress" type="file" class="form-control"></div>
                                <input class="btn btn-success col-md-12" name="submit" type="submit" value="Submit Resume Details"></button>
                            </form><br>
                            <button class="btn btn-light col-md-12" onclick="add_fields()">Add More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('./components/footer.php');
    include('./components/end_file.php');
    ?>