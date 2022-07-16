<?php
if (isset($_SESSION['email'])) {

    $fetch_all_query = "SELECT * FROM users WHERE email = '" . $_SESSION['email'] . "'";
    $result = mysqli_query($conn, $fetch_all_query);

    while ($rows = mysqli_fetch_assoc($result)) {
        $user_id = $rows['id'];
        $username = $rows['username'];
        $email = $rows['email'];
        $user_type = $rows['user_type'];
    }

    if ($user_type == "Candidate") {
        # code...
        // candidate DETAILS FETCHED
        $fetch_candidates_query = "SELECT * FROM candidate_data";
        $result_candidates = mysqli_query($conn, $fetch_candidates_query);

        while ($rows = mysqli_fetch_assoc($result_candidates)) {
            $candidate_id = $rows['candidate_id'];
            $candidate_name = $rows['candidate_name'];
            $candidate_email = $rows['candidate_email'];
            $candidate_mobile = $rows['candidate_mobile'];
            $candidate_address = $rows['candidate_address'];
            $candidate_bio = $rows['candidate_bio'];
            $created_at = $rows['created_at'];
        }

        // // TEACHER DETAILS FETCHED
        // $fetch_students_query = "SELECT * FROM teacher_data";
        // $result_students = mysqli_query($conn, $fetch_students_query);

        // while ($rows = mysqli_fetch_assoc($result_students)) {
        //   $teacher_id = $rows['teacher_id'];
        //   $teacher_name = $rows['teacher_name'];
        //   $teacher_email = $rows['teacher_email'];
        //   $teacher_mobile = $rows['teacher_mobile'];
        //   $teacher_address = $rows['teacher_address'];
        //   $teacher_bio = $rows['teacher_bio'];
        //   $created_at = $rows['created_at'];
        // }

        // // TEACHER DETAILS FETCHED
        // $fetch_teacher_query = "SELECT * FROM teacher_data WHERE teacher_email = '$email'";
        // $result_teacher = mysqli_query($conn, $fetch_teacher_query);

        // while ($rows = mysqli_fetch_assoc($result_teacher)) {
        //   $profile_id = $rows['teacher_id'];
        //   $profile_name = $rows['teacher_name'];
        //   $profile_email = $rows['teacher_email'];
        //   $profile_mobile = $rows['teacher_mobile'];
        //   $profile_address = $rows['teacher_address'];
        //   $profile_country = $rows['teacher_country'];
        //   $profile_state = $rows['teacher_state'];
        //   $profile_bio = $rows['teacher_bio'];
        //   $created_at = $rows['created_at'];
        // }
    } else {
        // STUDENT DETAILS FETCHED
        //     $fetch_teacher_query = "SELECT * FROM student_data WHERE student_email = '$email'";
        //     $result_teacher = mysqli_query($conn, $fetch_teacher_query);

        //     while ($rows = mysqli_fetch_assoc($result_teacher)) {
        //       $profile_id = $rows['student_id'];
        //       $profile_name = $rows['student_name'];
        //       $profile_email = $rows['student_email'];
        //       $profile_mobile = $rows['student_mobile'];
        //       $profile_address = $rows['student_address'];
        //       $profile_country = $rows['student_country'];
        //       $profile_state = $rows['student_state'];
        //       $profile_bio = $rows['student_bio'];
        //       $created_at = $rows['created_at'];
        //   }
    }
}
