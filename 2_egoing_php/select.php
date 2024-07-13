<?php
$conn = mysqli_connect("localhost:3306",
    "root",
    "1234",
    "opentutorials");
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);

// php는 NULL을 false로 치기 때문에 더 이상 가져올 행이 없는 경우 반복문이 종료
// PHPではNULLをfalseとして認識するため、データがない場合にはループが終了します。
while($row = mysqli_fetch_array($result)) {
    echo "<h1>" . $row["title"] . "</h1>";
    echo "<h2>" . $row["description"] . "</h2>";
}
