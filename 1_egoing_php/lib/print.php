<?php
function print_title() {
    if (isset($_GET['id'])) {
        echo $_GET["id"];
    } else {
        echo "Welcome";
    }
}

function print_description() {
    if (isset($_GET['id'])) {
        $basename = basename($_GET["id"]);  // 경로 앞의 ../ 같은 폴더 변경 요소 제거
        echo file_get_contents("data/".$basename);
    } else {
        echo "Hello, PHP";
    }
}

function print_list() {
    $list = scandir("./data");

    $i = 0;
    while($i < count($list)){
        $title = htmlspecialchars($list[$i]);
        if ($list[$i] != "." && $list[$i] != "..") {
            echo "<li><a href='index.php?id=$title'>$title</a></li>";
        }
        $i += 1;
    }
}
?>