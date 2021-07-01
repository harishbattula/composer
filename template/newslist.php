<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h2>Latest News</h2>
    <?php if(sizeof($newslist)) { ?>
        <ul class="list-group">
        <?php foreach($newslist as $h){ ?>
            <li class="list-group-item"><a href="https://www.bbc.com/<?= $h['link'] ;?>"><?=$h['text'];?></a></li>
            <?php } ?>
        </ul>
        <?php  } ?>
    </div>
</body>
</html>