<!DOCTYPE html>
<html>
 <head>
  <title>How to Upload Image using ckeditor in PHP</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   <h3 align="center">How to Upload Image using ckeditor in PHP</h3>
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">How to Upload Image using ckeditor in PHP</h3>
    </div>
    <div class="panel-body">
     <textarea name="content" id="content" class="form-control ckeditor"></textarea>
    </div>
   </div>
  </div>
  <div class="input_field">
    <button type="submit" id="custom-button" value="ADD " class="btn">ADD </button>
  </div>

  <script type="text/javascript">
            const realFileBtn = document.getElementById("real-file");
            const customBtn = document.getElementById("custom-button");
            const cumstomTxt = document.getElementById("custom-text");

            customBtn.addEventListener("click", function() {
                realFileBtn.click();
            });

            realFileBtn.addEventListener("change", function() {
                if(realFileBtn.value) {
                    cumstomTxt.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
                }
                else {
                    cumstomTxt.innerHTML = "No file chosen";
                }
            });
        </script>
 </body>
</html>

<script>
 CKEDITOR.replace( 'content', {
  height: 300,
  filebrowserUploadUrl: "upload.php"
 });

</script>