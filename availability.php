<?php
$i=0;
if(isset($_POST['searchBtn'])){
    
   $conn = mysqli_connect("localhost", "root", "", "bloodbank");
    $db=mysqli_select_db($conn,"bloodbank");
    $Bloodgroup = $_POST['Bloodgroup'];
    $donors = $db->getdonorByBloodgroup($Bloodgroup);
}
$title = "Blood Availability";
$setAvailabilityActive = "active";
?>
 <?php if(isset($donors[0])): ?>
                <label>Total number of donors with <?= $donors[0]['b_type']; ?> </label><div class="emphasize"><?= count($donors); ?> Donors</div>
                <table class="table table-condensed">
                    <thead>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>D.O.B</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Blood Group</th>
                    </thead>
                    
                    <?php foreach($donors as $d): $i++;?>
                    
                    <tr class="<?php if($i%2==0){echo 'bg-danger';} else{echo 'bg-success';} ?>">
                        <td><a href="../Miniproject/users/functions.php?id=<?= $d['Name']; ?></a></td>
                        <td><?= $d['Gender']; ?></td>
                        <td><?= $d['DOB']; ?></td>
                        <td><?= wordwrap($d['Address'],26,'<br>' ); ?></td>
                        <td><?= $d['City']; ?></td>
                 <?php endif; ?>       <td><?= $d['Bloodgroup']; ?></td>
                    </tr>
                    <?php endforeach;?>
                </table>