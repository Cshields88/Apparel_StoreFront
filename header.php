<div class="header">
    	<div class="logo">
        <a href="index.php"><img src="images/logo.jpg" alt="Chic Clothing logo" /></a>
        </div><!--logo ends-->
		<div class="navigation">
        <?php 
        $category_sql = "SELECT * FROM category"; //Sets UP Query
        $category_query = mysqli_query($dbconnect, $category_sql); //Runs Query
        $category_result = mysqli_fetch_assoc($category_query); //Organizes Results
        
        ?>
        <p class="nav"> <?php
        do {
            echo $category_result['name']; ?>  
            <!-- pulls in data under the name tab in the database -->
               <?php
        } while ($category_result = mysqli_fetch_assoc($category_query)) 
     
        
        ?>
        <a href="admin.php">Admin</a>
        </p>
      </div><!--navigation ends-->
	</div><!-- Header ends here-->