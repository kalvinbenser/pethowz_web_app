<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

       
  
</head>
<body>
    {{-- <h1>kal</h1>
    <?php $count = 0; ?>
    @foreach ($pet as $item)
        <?php if($count == 10) break; ?>
          <p>{{$item['venue_name']}}</p>
          <span>{{$item['cost_per_hour']}}</span>
        <?php $count++; ?>
    @endforeach --}}

<div id="container"><h1>Add-ons</h1>
<input type="checkbox" name="ch1" value="10" id="qr1" />Add-on Number 1 - 10 QR <br />
<input type="checkbox" name="ch1" value="20" id="qr1" />Add-on Number 2 - 20 QR <br />
<input type="checkbox" name="ch1" value="40" id="qr1" />Add-on Number 3 - 40 QR <br />
<input type="checkbox" name="ch1" value="60" id="qr1" />Add-on Number 4 - 60 QR <br />
</div>


 User total usage: <span id="usertotal"> </span>

  <script src="{{URL::asset('front-end/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>

 <script>
    $('input:checkbox').change(function(){ 
	var tot=0;

$('input:checkbox:checked').each(function(){
	tot+=parseInt($(this).val());
});

$('#usertotal').html(tot)
});
 </script>
 
</body>

</html>