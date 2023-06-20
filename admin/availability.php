<?php
$i=0;
if(isset($_POST['searchBtn'])){
    
   $conn = mysqli_connect("localhost", "root", "", "bloodbank");
    $db=mysqli_select_db($conn,"bloodbank");
    $bloodType = $_POST['blood_group'];
    $donors = $db->getDonorsByBloodType($bloodType);
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
                        <td><a href="../profile.php?id=<?= $d['id']; ?>"><?= $d['fname'] ." ".$d['mname']." ".$d['lname']; ?></a></td>
                        <td><?= $d['gender']; ?></td>
                        <td><?= $d['bday']; ?></td>
                        <td><?= wordwrap($d['h_address'],26,'<br>' ); ?></td>
                        <td><?= $d['city']; ?></td>
                 <?php endif; ?>       <td><?= $d['b_type']; ?></td>
                    </tr>
                    <?php endforeach;?>
                </table>