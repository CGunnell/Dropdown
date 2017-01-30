<?php
//Include database configuration file
include('dbConfig.php');

if(isset($_POST["category"]) && !empty($_POST["category_id"])){
    //Get all Sub-category data
    $query = $db->query("SELECT * FROM Sub-cateogory WHERE categoryy_id = ".$_POST['category_id']." AND status = 1 ORDER BY Sub-category_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display Sub-category list
    if($rowCount > 0){
        echo '<option value="">Select Sub-category</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['Sub-category_id'].'">'.$row['Sub-category_name'].'</option>';
        }
    }else{
        echo '<option value="">Sub-category not available</option>';
    }
}

if(isset($_POST["Sub-category_id"]) && !empty($_POST["Sub-category_id"])){
    //Get all company data
    $query = $db->query("SELECT * FROM company WHERE Sub-category_id = ".$_POST['Sub-category_id']." AND status = 1 ORDER BY company_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display company list
    if($rowCount > 0){
        echo '<option value="">Select company</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['company_id'].'">'.$row['company_name'].'</option>';
        }
    }else{
        echo '<option value="">Company not available</option>';
    }
}
?>
