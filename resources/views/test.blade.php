<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>kal</h1>
    <?php $count = 0; ?>
    @foreach ($pet as $item)
        <?php if($count == 10) break; ?>
          <p>{{$item['venue_name']}}</p>
          <span>{{$item['cost_per_hour']}}</span>
        <?php $count++; ?>
    @endforeach
    
</body>
</html>