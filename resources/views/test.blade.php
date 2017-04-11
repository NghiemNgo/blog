<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>CSS3 Image Collapse</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="copyright" content="Diara OÜ">
    <meta name="author" content="Ando Roots">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!--    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap-combined.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="css/example1.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(function() {
            $('#colorselector').change(function(){
              $('.colors').hide();
              $('#' + $(this).val()).show();
            });
          });
          // [forked from](http://jsfiddle.net/FvMYz/)
          // [show-hide-based-on-select-option-jquery)(http://stackoverflow.com/questions/2975521/show-hide-div-based-on-select-option-jquery/2975565#2975565)
    </script>
</head>
<body>
    <label class="wrapper" for="states">This label is stacked above the select</label>
    <div class="button dropdown"> 
      <select id="colorselector">
         <option value="red">Red</option>
         <option value="yellow">Yellow</option>
         <option value="blue">Blue</option>
      </select>
    </div>

    <div class="output">
      <div id="red" class="colors red">  “Good artists copy, great artists steal” Pablo Picasso</div>
      <div id="yellow" class="colors yellow"> “Art is the lie that enables us to realize the truth” Pablo Picasso</div>
      <div id="blue" class="colors blue"> “If I don't have red, I use blue” Pablo Picasso</div>
    </div>
</body>
</html>