<?php
    include "topbit.php";

// if find button pushed...
if(isset($_POST['find_title']))

{

// Retrieves title and sanitises it.
$title=test_input(mysqli_real_escape_string($dbconnect,$_POST['title']));

$find_sql="SELECT *  FROM `L1_DB_prac_reviews` WHERE `Title` LIKE '%$title%' ORDER BY `Title` ASC ";
$find_query=mysqli_query($dbconnect, $find_sql);
$find_rs=mysqli_fetch_assoc($find_query);
$count=mysqli_num_rows($find_query);

?>
        
<div class="box main">

    <h2>Title search</h2>
    
    <?php
    
    // check if there are any results
    
    if($count<1)
    
    {
        
    ?>
    
        <div class="error">
            Sorry! There are no results that match your search. Please use the search box in the sidebar to try again.

        </div>

        <?php

        } // end count 'if'
    
    // if there are no results, output an error
    
    else {
        
        do {
            
        ?>
    
        <div class="results">

        <p>Title: <span class="sub_heading"><?php echo $find_rs['Title']; ?></span></p>

        <p>Author: <span class="sub_heading"><?php echo $find_rs['Author']; ?></span></p>

        <p>Genre: <span class="sub_heading"><?php echo $find_rs['Genre']; ?></span></p>

        <p>Rating: 
            <span class="sub_heading">
            
            <!-- Font Awesome Icon Library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                
            <?php 
                
            if ( $find_rs['Rating'] ==5)
                {
            ?>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            <?php   }
            
            else if ( $find_rs['Rating'] ==4)
                {
            ?>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
            <?php   }
            
            else if ( $find_rs['Rating'] ==3)
                {
            ?>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            <?php   }   ?>
                
                
            </span>
        </p>

        <p><span class="sub_heading">Review / Response</span></p>

        <p>
            <?php echo $find_rs['Review']; ?>
        </p>

        </div> <!-- /end results div -->
        <br />        
    
        <?php
            
        } // end of 'do'
        
        while($find_rs=mysqli_fetch_assoc($find_query));
        
    } // end else
    
    
    
    // if there are results, display them
    
} // end 'isset'
    
?>

    
</div>    <!-- / main -->

<?php include "footer.php"; ?>