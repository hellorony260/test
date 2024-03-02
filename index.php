<?php
if (isset($_POST['submit'])) {
    $developer_id = $_POST['developer_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $programming_languages = $_POST['programming_languages'];
    $experience_years = $_POST['experience_years'];

    $conn = mysqli_connect('localhost', 'root', '', 'developer');
    $sql = "INSERT INTO information (developer_id, name, email, programming_languages, experience_years) VALUES ($developer_id, '$name', '$email','$programming_languages', $experience_years)";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'inserted';
    }
}
?>


<form action="" method="post">

    <label for="">developer_id</label>
    <input type="text" name="developer_id"> <br><br>

    <label for="">name</label>
    <input type="text" name="name"> <br><br>

    <label for="">email</label>
    <input type="text" name="email"> <br><br>

    <label for="">programming_languages</label>
    <input type="text" name="programming_languages"> <br><br>

    <label for="">experience_years</label>
    <input type="text" name="experience_years"> <br><br>

    <input type="submit" value="Submit" name="submit">

</form>