<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <!--bootstrap-->
        <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">

    <!--font awe-->
    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  integrity="sha512-2hk0Y/m5vGm1b8S7Y6FuUogkcvL9M2gD6Xn6p51HefJ7+FYuI70jF48sl6GZGEpHK86N+lC1D9WJ+ec6qU7pDA=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer">


    <!--css-->
        <link rel="stylesheet" href="../style.css">
<style>
      .admin_image{
width: 100px;
object-fit: contain;
}
.footer{
    position: absolute;
    bottom:0;
}
</style>

        <head>
            <body>
             <div class="container fluid p-0">
                <!--first-->
                <nav class="navbar navbar-expand-lg navbar-light bg-info">
                    <div class="container-fluid">
                        <img src="../img/bb.png" alt="" class="logo">
                         <nav class="navbar navbar-expand-lg ">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="" class="nav-link">Welcome guest</a>
                                </li>
                            </ul>
</nav>
                    </div>
                </nav>
                <!--second-->
                <div class="bg-light">
                    <h3 class="text-center p-2">manage detail</h3>
                </div>
                <!--third-->
                <div class="row">
                    <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                        <div class="px-5">
                            <a href="#" ><img src="../img/b1.jpg" alt="" class="admin_image"></a>
                            <p class="text-light text-center">admin name</p>
                        </div>
                        <div class="button text-center">
                            <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">insert products</a></button>
                             <button class=""><a href="" class="nav-link text-light bg-info my-1">view products</a></button>
                             <button><a href="index.php?insert_categories" class="nav-link text-light bg-info my-1">insert categories</a></button>
                             <button><a href="" class="nav-link text-light bg-info my-1">view categories</a></button>
                           <button><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">insert brands</a></button>
                             <button><a href="" class="nav-link text-light bg-info my-1">view brands</a></button>
                             <button><a href="" class="nav-link text-light bg-info my-1">all orders</a></button>
                             <button><a href="" class="nav-link text-light bg-info my-1">all payments</a></button>
                            <button><a href="" class="nav-link text-light bg-info my-1">list users</a></button><br>
                             <button><a href="" class="nav-link text-light bg-info my-1">logout</a></button>
                        </div>
                    </div>
                </div>
             </div>

             <!--fourth-->
             <div class="container my-3">
                <?php
                if(isset($_GET['insert_categories'])){
                    include('insert_categories.php');
                }
                   if(isset($_GET['insert_brands'])){
                    include('insert_brands.php');
                }
                ?>
             </div>

<div class="bg-info p-3 text-center footer">
    <p>all right</p>
</div>


            <!--bootstrap-->
             <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoU9w35J5n9kE1zj92+7flG5SpkSxl81k7fakFPskvXusvM"
    crossorigin="anonymous"
  ></script>
            </body>
        </head>