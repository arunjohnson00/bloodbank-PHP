

   
    <h1 class="searchblood">Search Blood Group </h1> 
    
  
    <form id="searchForm" action="" method="post">

<select name="blood" class="inp" id="BoodGroup">
<option >Select A Blood</option>
  
  <?php


$sqlp="SELECT DISTINCT Blood_group FROM request ";
if($reqq=mysqli_query($connect,$sqlp)){
  while($ae=mysqli_fetch_array($reqq)){

  echo '<option value="'.$ae['Blood_group'].'">'.$ae['Blood_group'].'</option>';
  

}
}
?>
</select>



<button type="submit" name="search" class="search">search</button>

<div class="demotable">
<div class="table-responsive" style="width: 122%;">
</form>
<div id="locationResult">




</div>


</div>
</div>


<script>
  $(function () {$('#searchForm').on('submit', function (e) {

var BldGrp= $('#BoodGroup').val();
e.preventDefault();
$.ajax({
 type: 'post',
 url: 'requestblood.php',
 data: {'bloodgroupQ':BldGrp},
 success: function (dataS) {
  
$("#locationResult").html(dataS);
}
}); }); });

</script>


