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
            echo file_get_contents("data/".$_GET["id"]);
        } else {
            echo "Hello, PHP";
        }
    }

    function print_list() {
        $list = scandir("./data");

        $i = 0;
        while($i < count($list)){
            if ($list[$i] != "." && $list[$i] != "..") {
                echo "<li><a href='index.php?id=$list[$i]'>$list[$i]</a></li>";
            }
            $i += 1;
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php print_title() ?></title>
</head>
  <body>
  <h1>WEB</h1>
    <ol>
        <?php
            print_list();
        ?>
    </ol>
  <h2>
      <?php
        print_title();
      ?>
  </h2>
  <?php
    print_description();
  ?>
  </body>
</html>