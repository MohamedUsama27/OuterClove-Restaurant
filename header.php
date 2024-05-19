<header class="header">
     <div class="flex">

     <a href="#" class="logo">The OUTER CLOVE Restaurant</a>

     <nav class="navbar">
        <a href="products.php">View Product</a>
    </nav>

    <?php
      
      $select_rows = mysqli_query($connfood, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>


     </div>
    

</header>
