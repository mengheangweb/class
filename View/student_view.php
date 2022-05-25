<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border: 1px solid black; border-collapse: collapse;border-spacing: 10px;  ">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Sex</th>
        </tr>
        <?php
        foreach($people as $person) {
        ?>
            <tr>
                <td><?= $person->name ?></td>
                <td><?= $person->age ?></td>
                <td><?= $person->readableSex($person->getSex()) ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>
</html>