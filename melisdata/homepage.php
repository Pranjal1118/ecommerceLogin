<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to MELISXPRESS</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/47c7df8081.js" crossorigin="anonymous"></script>
    <style>
        body{ font: 14px sans-serif; background-color: #D8BFD8; margin: 0px; padding: 0px;} 
        img{
            width: 250px; height: 50px; margin: 10px 10px 10px 10px;
        }
        .header{
            font: 18px sans-serif;
            width: 100%;
            height: 150px;
            margin: 0px;
            padding: 0px;
            position: sticky;
        }
        .header-options{
            display: flex;
            float: right;
            margin: 10px;
            padding: 5px;
        }
        .container{
            display: flex;
            justify-content: center;
        }
        .card{
            background: #fadfa6de;
            width: 300px;
            height: 280px;
            margin: 10px;
        }
        .card-image{
            background-color: black;
            height: 180px;
            margin-bottom: 15px;
            background-size: auto;
        }
        .card1{
            background-image: url('data:image/jpeg;base64,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');
        }
        .card2{
            background-image: url('data:image/jpeg;base64,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');
        }
        .card3{
            background-image: url('data:image/jpeg;base64,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');
        }
        .card4{
            background-image: url('data:image/jpeg;base64,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');
        }
        .card5{
            background-image: url('data:image/jpeg;base64,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');
        }
        .card6{
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMz3GH8JHPFM1DTMc8mmKjRRqkrjcdYmDvTg&usqp=CAU');
        }
        .card7{
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDIC2m4o5Ff_s_BOIL0-y7uq8m_Kqrn0Yq1Q&usqp=CAU');
        }
        .card8{
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREf48ilESASX02ivLsP2VyOz8O42vdYzc0uQ&usqp=CAU');
        }
        .card9{
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwpXlBbrnemR6Kbq4Fk5Hj6LeoCYLIXpuIlA&usqp=CAU');
        }
        .card10{
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoemUxDZ8Y3SZ-wg6jBIqK7lX3LRqZbCaPzg&usqp=CAU');
        }
        .card11{
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7BxDrAI3cfbhQCg1qXBbE1WGotFIMGzbqgQ&usqp=CAU');
        }
        .card12{
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTd06YiVRVckFgWe7vnsaVOdHZXCbRAukCgqA&usqp=CAU');
        }

     </style>
</head>
<body>

      <!-- php for saving modal data -->

      <?php 
       $connection = mysqli_connect("localhost", "root");
       $db = mysqli_select_db($connection, 'melisdata');

       $firstname = $lastname = $address = $city = $state = $description = NULL;
       $firstnameerr = $lastnameerr = $addresserr = $cityerr = $stateerr = $deserr = NULL;
    $flag = true;
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      if (empty($_POST["firstname"])) {
        $firstnameerr = "First name is required";
        $flag = false;
      } else {
        $firstname = test_input($_POST["firstname"]);
      }
  
      if (empty($_POST["lastname"])) {
        $lastnameerr = "Last name is required";
        $flag = false;
      } else {
        $lastname = test_input($_POST["lastname"]);
      }
      if (empty($_POST["address"])) {
        $addresserr = "Address is required";
        $flag = false;
      } else {
        $address = test_input($_POST["address"]);
      }
  
      if (empty($_POST["city"])) {
        $cityerr = "City is required";
        $flag = false;
      } else {
        $city = test_input($_POST["city"]);
      }
      if (empty($_POST["state"])) {
        $stateerr = "State is required";
        $flag = false;
      } else {
        $state = test_input($_POST["state"]);
      }
     
      if (empty($_POST["description"])) {
        $deserr = "Description is required";
        $flag = false;
      } else {
        $description = test_input($_POST["description"]);
      }

      if($flag){

        $query = "insert into modaldata (firstname, lastname, address, city, state, description) values ('$firstname', '$lastname', '$address', '$city', '$state', '$description') ";
        $query_run = mysqli_query($connection, $query);
        if($query_run){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success! Save Successful</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
          </div>';
        } else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error! Save Unsuccessful</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
          </div>';
        }
      } else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error! Save Unsuccessful</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        </button>
      </div>';
      }
   }
   function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

      <!-- php ends for saving modal data -->

    <div class="header">
    <a href="index.html"><img src="data:image/png;base64,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" alt="Logo"></a>
       <div class="header-options">
<button type="button" class="btn btn-light"><a href="account.php"><b>My Account</b></a></button>
<button type="button" class="btn btn-light"><a href="logout.php"><b>Logout</b></a></button>
</div> 
       </div>
     

     <h2 class="text-center">Welcome <?php echo $_SESSION['username']; ?> </h2>
    </div>
    
    <section class="container">
        <div class="card">
            <div class="card-image card1"></div>
                <h2>Title</h2>
                <p>Text</p>
            </div>
            <div class="card">
                <div class="card-image card2"></div>
                    <h2>Title</h2>
                    <p>Text</p>
            </div>
            <div class="card">
                <div class="card-image card3"></div>
                        <h2>Title</h2>
                        <p>Text</p>
             </div>
             <div class="card">
                <div class="card-image card4"></div>
                        <h2>Title</h2>
                        <p>Text</p>
             </div>              
    </section>
    <section class="container">
        <div class="card">
            <div class="card-image card5"></div>
                <h2>Title</h2>
                <p>Text</p>
            </div>
            <div class="card">
                <div class="card-image card6"></div>
                    <h2>Title</h2>
                    <p>Text</p>
            </div>
            <div class="card">
                <div class="card-image card7"></div>
                        <h2>Title</h2>
                        <p>Text</p>
             </div>
             <div class="card">
                <div class="card-image card8"></div>
                        <h2>Title</h2>
                        <p>Text</p>
             </div>              
    </section>
    <section class="container">
        <div class="card">
            <div class="card-image card9"></div>
                <h2>Title</h2>
                <p>Text</p>
            </div>
            <div class="card">
                <div class="card-image card10"></div>
                    <h2>Title</h2>
                    <p>Text</p>
            </div>
            <div class="card">
                <div class="card-image card11"></div>
                        <h2>Title</h2>
                        <p>Text</p>
             </div>
             <div class="card">
                <div class="card-image card12"></div>
                        <h2>Title</h2>
                        <p>Text</p>
             </div>              
    </section>


   <footer class="footer">
        <div class="inner-footer">
            <div class="social-links">
                <ul>
                    <li class="social-items"><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
                    <li class="social-items"><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                    <li class="social-items"><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="quick-links">
                <ul>
                    <li class="quick-items"><a href="signup.php">Sign Up</a></li>
                    <li class="quick-items"><a href="login.php">Login</a></li>
                    <li class="quick-items"><a href="https://www.melisxpress.in/index.php">About Us</a></li>
                </ul>
            </div>
        </div>
        <div class="outer-footer">
            Copyright &copy; Melisxpress Pvt Ltd. 
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>