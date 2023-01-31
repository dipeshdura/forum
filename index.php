<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      #ques{
        min-height:433px;
      }
    </style>
    <title>Welcome to iDiscuss Forum</title>
  </head>
  <body>
    <?php include 'partials/_header.php'?>
    <?php include 'partials/_dbconnect.php'?>


    <!-- slider starts here -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active " style="height:27em";>
          <img src="images/programmer.jpg" class="d-block w-100 h-100" alt="First slide">
        </div>
        <div class="carousel-item " style="height:27em";>
          <img class="d-block w-100 h-100" src="images/Dura.png" alt="Second slide">
        </div>
        <div class="carousel-item " style="height:27em";>
          <img class="d-block w-100 h-100" src="images/card-5.jpg" alt="Third slide">
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

    <!-- Category container starts here -->
      <div class="container my-3" id="ques">
        <h2 class="text-center my-3">iDiscuss - Browse Categories</h2>
        <div class="row my-3">

        <!-- Fetch all the categories -->
        <?php
         $sql ="SELECT * FROM `categories` ";
          $result =mysqli_query($conn,$sql);
         while($row = mysqli_fetch_assoc($result)){
          $img =array('images/apple-computer.jpg','images/Dura.png','images/programmer.jpg'
        ,'images/card-4.png','images/card-5.jpg','images/card-6.jpg','images/card-7.jpg');
          $out =rand(0,count($img)-1);
          $selected =$img[$out];
          //  echo $row['category_id'];
          //  echo $row['category_name'];
          $id =$row['category_id'];
          $cat =$row['category_name'];
          $desc =$row['category_description'];
          echo '<div class="col-md-4 my-2">
          <div class="card" style="width: 17rem;">
            <img src="'.$selected.'" class="card-img-top" alt="">
             <div class="card-body">
               <h5 class="card-title"><a href="threadlist.php?catid='.$id.'"> ' .$cat. '</a></h5>
               <p class="card-text">' .substr($desc,0,80). '....</p>
               <a href="threadlist.php?catid='.$id.'" class="btn btn-primary">View Threads</a>
             </div>
           </div>
          </div>';
        }
           ?>

        <!-- Use a for loop to iterate through categories -->

         

        </div>
      </div>

    <?php include 'partials/_footer.php'?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>