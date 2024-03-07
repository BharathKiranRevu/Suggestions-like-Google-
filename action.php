
<?php
$conn = new mysqli("localhost","root", "", "lorry");
if($conn->connect_error){
    die("failed to connect!". $conn->connect_error);
}
if(isset($_POST['consginoor'])){
    $inpText = $_POST['consginoor'];
    $consginoor = "SELECT consignor_gst FROM lr_creation WHERE consignor_gst LIKE '%$inpText%'";
    $result = $conn->query($consginoor);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['consignor_gst']."</a>";
        }
    }
    else{
        echo "<p class='list-group-item border-1'>No Record</p>";
    }
}

    if(isset($_POST['consginee'])){
        $inpText = $_POST['consginee'];
        $consginee = "SELECT consignee_gst FROM lr_creation WHERE consignee_gst LIKE '%$inpText%'";
        $result = $conn->query($consginee);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['consignee_gst']."</a>";
            }
        }
        else{
            echo "<p class='list-group-item border-1'>No Record</p>";
        }

}

?> 



