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
    <input id="upload_cv" type="file" name="upload_cv" onchange="return validateFileExtension(this)">
    <span class="alert alert-error collapse" role="alert" id="validateTypeCV" style="color:red"><p>
    <strong>
        <span class="glyphicon glyphicon-exclamation-sign" style="font-size:15px;color:red"></span>
    </strong>
        You can only upload a file of the following file type(s): doc, docx, pdf, txt, xls, xlsx</p>
    </span>
                                <!--</div>-->
                                <!--<div class="alert alert-error collapse" role="alert" id="validateSizeCV">-->
    <span class="alert alert-error collapse" role="alert" id="validateSizeCV" style="color:red">
        <p>
        <strong>
            <span class="glyphicon glyphicon-exclamation-sign" style="font-size:15px;color:red"></span>
        </strong>
            File size must under 3mb!
        </p>
    </span>
    <script type="text/javascript">
    function validateFileExtension(fld) {
        //var uploadedFile = document.getElementById('upload_cv');
        var fileSize = fld.files[0].size;
        $('#validateTypeCV').hide();
        $('#validateSizeCV').hide();
//        if(!/(\.docx|\.doc|\.pdf|\.txt|\.xls|\.xlsx)$/i.test(fld.value)) {
//            $('#validateTypeCV').show();
//            fld.form.reset();
//            fld.focus();        
//            return false; 
//        }
        if(fileSize > 3145728){
            $('#validateSizeCV').show();
            fld.form.reset();
            fld.focus();        
            return false; 
        }
        return true;
    }
</script>
</body>
</html>