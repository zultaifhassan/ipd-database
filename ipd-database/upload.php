<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div>
        <div class="table-responsive">
            <table class="table table-border table-striped table-hover text-center">

                <thead class="bg-success text-white">
                    <th>S.NO</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>CNIC</th>
                    <th>PH.NO</th>
                    <th>W.NO</th>
                    <th>ADDRESS</th>
                    <th>IMAGE</th>
                </thead>

                <tbody>
                    <?php
                    $conn = mysqli_connect("localhost", "root");
                    mysqli_select_db($conn, "ipd-database");

                    if (isset($_POST["submit"])) {

                        $course_name = $_POST["course_name"];
                        $course_duration = $_POST["cousre_duration"];
                        $name = $_POST["name"];
                        $father_name = $_POST["father_name"];
                        $email = $_POST["email"];
                        $cnic = $_POST["cnic"];
                        $dob = $_POST["dob"];
                        // $gender = $_POST["gender"];
                        $image = $_FILES["image"];
                        $phone_no = $_POST["phone_no"];
                        $whatsapp_no = $_POST["whatsapp_no"];
                        $district = $_POST["district"];
                        $profession = $_POST["profession"];
                        $address = $_POST["address"];
                        $education = $_POST["education"];
                        $institute = $_POST["institute"];
                        $passout_date = $_POST["passout_date"];


                        // print_r($name);
                        // echo "<br>";
                        // print_r($image);

                        $filename = $image["name"];
                        $fileerror = $image["error"];
                        $filetmp = $image["tmp_name"];

                        $fileext = explode(".", $filename);
                        $filecheck = strtolower(end($fileext));

                        $fileextstore = array("png", "jpg", "jpeg");

                        if (in_array($filecheck, $fileextstore)) {
                            $filedistination = "upload/" . $filename;
                            move_uploaded_file($filetmp, $filedistination);
                            $q = "INSERT INTO `std-registration` (`course_name`, `cousre_duration`, `name`, `father_name`, `email`, `cnic`, `dob`, `gender`, `image`, `phone_no`, `whatsapp_no`, `district`, `profession`, `address`, `education`, `institute`, `passout_date`)  VALUES (' $course_name', ' $course_duration', '$name', '$father_name', ' $email', '$cnic', '$dob',  '$image', '$phone_no', '$whatsapp_no', '$district', '$profession ', '$address', '$education', '$institute', '$passout_date');
                            ";
                            $result = mysqli_query($conn, $q);

                            $displayquerry = "SELECT * FROM `std-registration`";
                            $querrydisplay = mysqli_query($conn, $displayquerry);

                            // $row = mysqli_num_rows($querrydisplay);
                            while ($fresult = mysqli_fetch_array($querrydisplay)) {

                    // ?>

                                <tr>
                                     <td> <?php echo $fresult["s.no"] ?></td>
                                    <td> <?php echo $fresult["name"] ?></td>
                                    <td> <?php echo $fresult["email"] ?></td>
                                    <td> <?php echo $fresult["cnic"] ?></td>
                                    <td> <?php echo $fresult["phone_no"] ?></td>
                                    <td> <?php echo $fresult["whatsapp_no"] ?></td>
                                    <td> <?php echo $fresult["address"] ?></td>
                                    <td><img src="<?php echo $fresult["image"]  ?> " height="100px" width="100px"></td> 
                                 </tr> 

                    <?php 

                            }
                        } else {
                            echo "PLEASE SELECT JPG , JPEG OR PNG FORMAT";
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>