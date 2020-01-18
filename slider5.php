<!DOCTYPE html>
<html>
<head>
  <title>slider</title>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

<style>
  /*.animated .imageWrapper{
    transform-origin: 100% 10;
    animation-duration: 5s;
 
}*/

/* SCALE (USE THIS)
========================================== */
.container-fluid{
  width: 100%;
  padding: 0%;
  margin:0%;
}
  .image-wrap {
  width: 100%;
  height: 40vw;
  margin: 0 auto;
  overflow: hidden;
  position: relative;
  background-position: cover;
}

.image-wrap img {
  width: 100%;
  animation: move 4s ease;
  /* Add infinite to loop. */
  
  -ms-animation: move 4s ease;
  -webkit-animation: move 4s ease;
  -0-animation: move 4s ease;
  -moz-animation: move 4s ease;
  position: absolute;
}

@-webkit-keyframes move {
  0% {
    -webkit-transform-origin: bottom left;
    -moz-transform-origin: bottom left;
    -ms-transform-origin: bottom left;
    -o-transform-origin: bottom left;
    transform-origin: bottom left;
    transform: scale(1.0);
    -ms-transform: scale(1.0);
    /* IE 9 */
    
    -webkit-transform: scale(1.0);
    /* Safari and Chrome */
    
    -o-transform: scale(1.0);
    /* Opera */
    
    -moz-transform: scale(1.0);
    /* Firefox */
  }
  100% {
    transform: scale(1.2);
    -ms-transform: scale(1.2);
    /* IE 9 */
    
    -webkit-transform: scale(1.2);
    /* Safari and Chrome */
    
    -o-transform: scale(1.2);
    /* Opera */
    
    -moz-transform: scale(1.2);
    /* Firefox */
  }
}

  .animated.SlideOutLeft{
    animation-duration: 2s;
 
  }
</style>
<body>
  <div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner animated SlideOutLeft imageWrapper" style="">
    <div class="carousel-item active">
      <div class="image-wrap">
        <img src="images/christmas-1.jpg" alt="First slide">
      </div>
    </div>
    <div class="carousel-item animated SlideOutLeft imageWrapper">
      <div class="image-wrap">
        <img src="images/christmas-2.jpg" alt="Second slide">
      </div>
    </div>
    <div class="carousel-item animated SlideOutLeft imageWrapper">
      <div class="image-wrap">
        <img src="images/christmas-3.jpg" alt="Third slide">
      </div>
    </div>
  </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
</div>
</body>
</html>