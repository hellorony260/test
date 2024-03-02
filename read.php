<?php
$conn = mysqli_connect('localhost', 'root', '', 'developer');
$sql = "SELECT * FROM information";
$data = mysqli_query($conn, $sql);

if (isset($_GET['delete_developer_id'])) {
    $developer_id =  $_GET['delete_developer_id'];
    $delete_sql = "DELETE FROM information WHERE developer_id = $developer_id";
    mysqli_query($conn, $delete_sql);
    header('location: read.php');
}
?>
<table border="1" cellpadding="10">
    <thead>
        <tr>
            <td>developer_id</td>
            <td>name</td>
            <td>email</td>
            <td>programming_languages</td>
            <td>experience_years</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($rows = mysqli_fetch_assoc($data)) {
            echo '<tr>';
            echo '<td>' . $rows['developer_id']  . '</td>';
            echo '<td>' . $rows['name']  . '</td>';
            echo '<td>' . $rows['email']  . '</td>';
            echo '<td>' . $rows['programming_languages']  . '</td>';
            echo '<td>' . $rows['experience_years']  . '</td>';
            echo '<td>
                <a href="?edit_developer_id =' . $rows['developer_id'] . '">Edit</a>
                <a href="?delete_developer_id =' . $rows['developer_id'] . '">Delete</a>
            </td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>