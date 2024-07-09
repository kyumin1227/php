<?php
$conn = mysqli_connect("localhost:3306", "root", "1234", "opentutorials");
$sql = "
    INSERT INTO topic
    (title, description, created)
    VALUES (
        'MySQL',
        'MySQL is ..',
        NOW()
        )
    ";
mysqli_query($conn, $sql);

$result = mysqli_error($conn);
if ($result === false) {
    echo mysqli_error($conn);
}

?>