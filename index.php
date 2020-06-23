<?php require_once '.\header.php';?>
<?php
$msg="";
if(isset($_REQUEST["msg"])){
    if($_REQUEST["msg"]==1){
        $msg="Thanks for contacting!";
    }
    else if($_REQUEST["msg"]==2){
        $msg="Patient Added Successfully!";
    }
    else if($_REQUEST["msg"]==3){
        $msg="Patient has been deleted!";
    }    
    else if($_REQUEST["msg"]==4){
        $msg="Patient has been updated!";
    }
     else if($_REQUEST["msg"]==5){
        $msg="Doctor Added Successfully!";
    }
     else if($_REQUEST["msg"]==6){
        $msg="Doctor has been deleted!";
    }
}
if(!empty($msg)){
echo "<div class='alert alert-success alert-dismissible fade show'>
    <button class='close' data-dismiss='alert'>&times;</button>
    <strong>Doctors Online</strong> $msg
    </div>";    
}
?>
<style>
    body{
        font-family: cursive;
        font-size: 20px;
        font-weight: bold;
    }
</style>
<div>
    <div class="text-center text-justify">
        <h1 class="head1 display-1">Doctors Online</h1>
        <p class="head2">Health Care At Your Desk</p>

    </div>
</div>
<style>
    body{
        font-family: cursive;
        font-size: 30px;
        font-weight: bold;
    }
</style>

<div class="row">
    <div class="col-sm-6">
       <?php
         if(is_login()){
           echo "<a href='./add_patient.php' class='btn btn-dark btn-block rounded text-white my-3'>Add Patient</a><br>";
           echo "<a href='./add_doctor.php' class='btn btn-dark btn-block rounded text-white my-3'>Add Doctor</a><br>";
         }
           ?>
    </div>
    <div class="col-sm-6">
        <?php
        if(is_login()){
           echo "<a href='./doctor_list.php' class='btn btn-dark btn-block rounded text-white my-3'>Doctor list</a><br>";
           echo "<a href='./patient_list.php' class='btn btn-dark btn-block rounded text-white my-3'>Patient list</a><br>";
        }
        ?>
     </div>
           

</div>


