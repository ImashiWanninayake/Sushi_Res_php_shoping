<header class="header">

   <div class="flex">

      

      <nav class="navbar">
         <a href="../../home.html">Home</a>
         <a href="admin.php">add products</a>
         
         <a href="../crud project/index.php">Customers</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      

      

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>