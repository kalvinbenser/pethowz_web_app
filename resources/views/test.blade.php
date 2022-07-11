<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .wrapper-custom{
display:block;
background-color:black;
padding:1em;
width:23em;
}

.img-custom{
display:inline-block;
}
  </style>
</head>
<body>
<div class="wrapper-custom">
  <img src="..." class="img-custom"/>
  <img src="..." class="img-custom"/>
<h1>nishanth</h1>
  </div>
 <div>
  <button onclick="onClickData()">kalvin</button>
 </div>

 <div>
 <ul>
  <li>
    <div class="form-check form-check-inline">
      <input class="form-check-input inlineCheckbox1 checkedId" type="checkbox" value="option1">
      <label class="form-check-label add" for="inlineCheckbox1" id="">something</label>
    </div>
    <input type="text" class="checkedId cal_total checked" id="file_id" value="25"></li>
  <li>
    <div class="form-check form-check-inline">
      <input class="form-check-input inlineCheckbox1 checkedId" type="checkbox" value="option1">
      <label class="form-check-label add" for="inlineCheckbox1" id="">something2</label>
    </div>
    
    <input type="text" class="checkedId cal_total checked" id="file_id" value="27"></li>

    <li>
    <div class="form-check form-check-inline">
      <input class="form-check-input inlineCheckbox1 checkedId" type="checkbox" value="option1">
      <label class="form-check-label add" for="inlineCheckbox1" id="">something3</label>
    </div>
    
    <input type="text" class="checkedId cal_total checked" id="file_id" value="28"></li>
</ul>
 </div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>


   function onClickData(){
    const books = [{
     id: "1",
     title: "Book title",
     areas: ["horror", "mystery"]
   }, {
     id: "2",
     title: "Book title 2",
     areas: ["friendship", "love", "history"]
   },
   {
     id: "2",
     title: "Book title 3",
     areas: ["friendship", "scifi"]
   }
];

const filterValue = "friendship";
const filteredBooks = books.filter(val => val.areas.includes(filterValue));
console.log(filteredBooks);
   }
    




   $(document).on("click", ".checkedId", function() {
  var prices = [];
  var names = [];
  //loop through lis with checked checkboxes
  $("ul li ").find(".checkedId:checked").each(function(index, item) {
    //get value of price
    prices.push($(this).closest('li').find(".cal_total").val());
    //get value of names and push in array
    names.push($(this).closest('li').find('label').text());
  });

  console.log(prices)
  console.log(names)


});
  </script>
</body>
</html>