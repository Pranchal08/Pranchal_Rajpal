<?php
session_start();
if(!(isset($_SESSION['id']) && isset($_GET['postid']))){
header("location:post_property.php");
}
?>

<?php
 include('header.php');
  include('custom css/allcss.php');
  include('css.php');
  include('custom css/post_imagecss.php');
  
  
?>
 <html>
<head>
</head>
<body>
 <div class="container-fluid py-5" style="background-color:rgb(0,107,107);">
      <header class="text-white text-center"><br><br><br><br>
        <h1 class="display-4">Post Your Property Image</h1>
        <p class="lead mb-0">Take Your Dream House</p>
        <p class="mb-5 font-weight-light"> By  
            <a href="https://bootstrapious.com" class="text-white">
                <b>Express_Homz</b>
            </a>
        </p>
        <img src="images/image.svg" alt="" width="180" class="mb-4">
    </header>


    <div class="row py-4">
        <div class="col-lg-6 mx-auto">
<form action="postdata.php" method="POST" enctype="multipart/form-data">
            <!-- Upload image input-->
            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-light shadow-sm">
                <input type="hidden" name="postid" value=<?=$_GET['postid']; ?>>
				
				<input id="upload" type="file" name="image" onchange="this.form.submit()();" class="form-control border-0">
                <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                <div class="input-group-append">
                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                </div>
            </div>

            <!-- Uploaded image area-->
            <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
            <div class="image-area mt-4" ><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
</form>
        </div>
    </div>
</div>

    </body>
</html> 










<?php 
include('footer.php');
?>