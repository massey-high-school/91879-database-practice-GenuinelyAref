<?php
    include "topbit.php";

$showall_sql="SELECT * FROM `L1_DB_prac_reviews` ORDER BY `L1_DB_prac_reviews`.`Title` ASC";
$showall_query=mysqli_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);

?>
        
<div class="box main">

    <h2>All Items</h2>
    
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

        <p>Title: <span class="sub_heading"><?php echo $showall_rs['Title']; ?></span></p>

        <p>Author: <span class="sub_heading"><?php echo $showall_rs['Author']; ?></span></p>

        <p>Genre: <span class="sub_heading"><?php echo $showall_rs['Genre']; ?></span></p>

        <p>Rating: 
            <span class="sub_heading">
            
            <!-- Font Awesome Icon Library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                
            <?php 
                
            if ( $showall_rs['Rating'] ==5)
                {
            ?>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            <?php   }
            
            else if ( $showall_rs['Rating'] ==4)
                {
            ?>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
            <?php   }
            
            else if ( $showall_rs['Rating'] ==3)
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
            <?php echo $showall_rs['Review']; ?>
        </p>

    </div> <!-- /end results div -->
    <br />        
    
    <?php
            
        } // end of 'do'
        
        while($showall_rs=mysqli_fetch_assoc($showall_query));
        
    } // end else
    
    
    
    // if there are results, display them
    
    ?>

    
</div>    <!-- / main -->

<?php include "footer.php"; ?>