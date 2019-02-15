<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User view</title>
</head>
<body>

<h1>
<?php
foreach ($results as $object) {
    echo $object->id . " - ";
    echo $object->username . " - ";
    echo $object->password . "<br>";
}
?>
</h1>

</body>
</html>