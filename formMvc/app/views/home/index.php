<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
</head>
<body>
<ul>
    <?php foreach($data as $d): ?>
        
        
        <li><?= $d['user_name'] ?></li>
            
        
    <?php endforeach; ?>
    </ul>
</body>
</html>