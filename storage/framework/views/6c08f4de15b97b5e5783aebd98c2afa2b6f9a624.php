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
<div class="background-image"></div>
<div class="content">
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquam erat in ante malesuada, facilisis semper nulla semper. Phasellus sapien neque, faucibus in malesuada quis, lacinia et libero. Sed sed turpis tellus. Etiam ac aliquam tortor, eleifend rhoncus metus. Ut turpis massa, sollicitudin sit amet molestie a, posuere sit amet nisl. Mauris tincidunt cursus posuere. Nam commodo libero quis lacus sodales, nec feugiat ante posuere. Donec pulvinar auctor commodo. Donec egestas diam ut mi adipiscing, quis lacinia mauris condimentum. Quisque quis odio venenatis, venenatis nisi a, vehicula ipsum. Etiam at nisl eu felis vulputate porta.</p>
  <p>Fusce ut placerat eros. Aliquam consequat in augue sed convallis. Donec orci urna, tincidunt vel dui at, elementum semper dolor. Donec tincidunt risus sed magna dictum, quis luctus metus volutpat. Donec accumsan et nunc vulputate accumsan. Vestibulum tempor, erat in mattis fringilla, elit urna ornare nunc, vel pretium elit sem quis orci. Vivamus condimentum dictum tempor. Nam at est ante. Sed lobortis et lorem in sagittis. In suscipit in est et vehicula.</p>
</div>
</body>
</html>