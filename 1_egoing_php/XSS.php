<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XSS</title>
</head>
<body>
    <h1>Cross site scripting</h1>
    <?php
    echo htmlspecialchars("<script>alert('hi')</script>")
    ?>
</body>
</html>