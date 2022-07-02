<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<div id="calculator">
  <div class="inputbox">
    <input type="checkbox" id="option1">
    <label for="option1">Services1</label><span class="license_price bold"> €29</span>
  </div>
  <div class="inputbox">
    <input type="checkbox" id="option2">
    <label for="option2">Services2</label><span class="license_price bold"> €39</span>
  </div>
  <div class="inputbox">
    <input type="checkbox" id="option3">
    <label for="option3">Services3</label><span class="license_price bold"> €49</span>
  </div>
  <div class="inputbox">
    <input type="checkbox" id="option4">
    <label for="option4">Services4</label><span class="license_price bold"> €59</span>
  </div>
</div>
<span>$<span class="total">56</span></span>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
  var originalPrice = +$('.total').html();
  $("input[type='checkbox']").click(function() {
    var priceTotal = originalPrice;
    $("#calculator input[type='checkbox']:checked").each(function() {
      priceTotal += parseInt($(this).siblings('.license_price.bold').html().replace("€", ''), 10);
    });
    $('.total').html(priceTotal);
  });
});



$(window).load(function() {
     alert("hi 2");
});
</script>

</body>
</html>