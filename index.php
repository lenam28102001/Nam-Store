<?php
    session_start();
    require_once "web/config.php";
    // if(!isset($_SESSION['user'])){
    //     header("location:web/login.php");}
    $sql_pro = "SELECT * from tbl_sanpham  order by id_sanpham DESC";
    $query_pro = pg_query($dbconn, $sql_pro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Shopping</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Shop Of Nam</h1>
    <img src="" alt="">
      <nav class="navbar navbar-expand-sm bg-dark">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="web/profile.php">Profile</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="web/products.php?action=showsp">Products</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="web/contact.php">Contact</a>
             </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">OTHER</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="web/login.php">Login</a>
                    <a class="dropdown-item" href="web/register.php">Register</a>
                    <a class="dropdown-item" href="web/logout.php" title="Logout">Logout</a>
                </div>
             </li>
         </ul>
      </nav>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <section>
    <?php
        while($row_pro = pg_fetch_array($query_pro)){
    ?>
    <article>
         <a href="web/products.php?action=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
            <figure>
            <img src="web/module/quanlisp/uploads/<?php echo $row_pro['hinhanh']?>">
            </figure>
            <h1><?php echo $row_pro['tensanpham']?></h1>
            <div class="price"><?php echo number_format($row_pro['giasp'],0,',','.'). 'vn??'?></div>
                <button>Mua H??ng</button>
        </a>
    </article>
    <?php
        }
    ?>
</section>
        <div class="footer-basic">
            <footer>
                <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="https://www.facebook.com/profile.php?id=100010509247176"><i class="icon ion-social-facebook"></i></a></div>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="index.php">Home</a></li>
                    <li class="list-inline-item"><a href="#">Services</a></li>
                    <li class="list-inline-item"><a href="#">About</a></li>
                    <li class="list-inline-item"><a href="#">Terms</a></li>
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                </ul>
                <p class="copyright">Company Name ?? 2021</p>
        </div>
</body>
<style>
 figure {
  position: relative;
}
figure:before,
figure:after {
  content: '';
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  position: absolute;
}
 
img {
  width: auto;
  height: 100%;
  margin: 0;
  padding: 0;
}
article .price {
    font-size:25px;
    font-weight: bold;
    color: #27dcc4;
  }
  article h1 {
    font-size: 1.5em;
    color: hotpink;
  }
  article {
    background-color: #262626;
    display: inline-block;
    width: 15%;
    margin: 80px 20px 0 20px;
    border: 2px solid #424242;
    color: #a1a1a1;
  }
  
body {
    background: url(../pictures/background-dong-don-gian-ma-dep_032847889.gif);
    background-size: cover;
    font-size: 16px;
    font-family: Lato, sans-serif;
  }
  section {
    border: 0px;
    text-align: center;
  }
  article {
    background-color: #262626;
    display: inline-block;
    width: 23%;
    margin: 80px 20px 0 20px;
    border: 2px solid #424242;
    color: #a1a1a1;
  }
  article h1 {
    font-size: 1.5em;
    color: hotpink;
  }
  article .price {
    font-size: medium;
    font-weight: bold;
    color: #27dcc4;
  }
  article ul {
    padding: 0;
  }
  article button {
    background-color: #27dcc4;
    color: #FFFFFF;
    padding: 15px 30px;
    margin: 10px 0;
    font-size: 0.9em;
    cursor: pointer;
    border: none;
  }
  article ul li {
    list-style-type: none;
    padding: 5px 0;
  }
  article button:hover {
    background-color: #acacac;
  }
h1{
    align-items: center;
    justify-content: center;
    display: flex;
    color: #27dcc4;
}   
.footer-basic {
  padding:40px 0;
  background-color: #262626;
  color: whitesmoke;
}

.footer-basic ul {
  padding:0;
  list-style:none;
  text-align:center;
  font-size:18px;
  line-height:1;
  margin-bottom:0;
}

.footer-basic li {
  padding:0 10px;
}

.footer-basic ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.8;
}

.footer-basic ul a:hover {
  opacity:1;
}

.footer-basic .social {
  text-align:center;
  padding-bottom:25px;
}

.footer-basic .social > a {
  font-size:24px;
  width:40px;
  height:40px;
  line-height:40px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  border:1px solid #ccc;
  margin:0 8px;
  color:inherit;
  opacity:0.75;
}

.footer-basic .social > a:hover {
  opacity:0.9;
}

.footer-basic .copyright {
  margin-top:15px;
  text-align:center;
  font-size:13px;
  color:#aaa;
  margin-bottom:0;
}

</style>
</html>
<!-- helo -->
