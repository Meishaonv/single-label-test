<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Project Title</title>
  <meta name="description" content="Project description">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="style.css?v=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>
   <div id="container" style="text-align:center;margin-top:30px">
    <div id="container2" style="width:50%;margin-left: 25%;margin-right: 2%;">
        <div>Some description text here</div>
        
        
        <div class="row">
            <div class="col-sm-8" style="text-align:right">
                <div id="top" style="margin-top:20px">
                    <img id="imgplace" src="" data-idn="" >
                </div>
            </div>
            <div class="col-sm-4" style="margin-top:30px">
                <div class="custom-control custom-radio">
                <input type="radio" id="option1" name="imgSelect" class="custom-control-input">
                <label class="custom-control-label" for="option1">Option 1</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="option2" name="imgSelect" class="custom-control-input">
                <label class="custom-control-label" for="option2">Option 2</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="option3" name="imgSelect" class="custom-control-input">
                <label class="custom-control-label" for="option3">Option 3</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" id="option4" name="imgSelect" class="custom-control-input">
                <label class="custom-control-label" for="option4">Option 4</label>
                </div>
            </div>
        </div>
        
        <div class="row " style="margin-top:30px;">
            <div class="col-sm" style="text-align:center">
            <button id="meskip" type="button" onclick="selectn(2)" class="btn btn-info">Next</button>
            </div>
        </div>
        
        
        <div id="end2" style="margin-top:5px;margin-bottom:30px;">
        </div>
     </div>
    </div>

  <script>
    path ="images/";
    n_img = 4;
    init_img = 1;
    $(document).ready(function(){ 
        $("#imgplace").attr("src",path+toString(init_img)+".png");
    });
  
  </script>
</body>
</html>