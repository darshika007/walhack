<?php
include('connect.php');
$name= $_POST['name'];
$email= $_POST['email'];
$org= $_POST['org'];
$contact= $_POST['contact'];
$feed= $_POST['feed'];
$type=$_POST['type']

//$query="select count(*)as cnt from queries where email='".$email."'";
//$result=mysqi_query($query,$conn);
//$row=mysqli_fetch_array($result);
//if ($row['cnt']) {
  // code...?>
<!--    <div class="alert alert-warning">
      <strong>Already regstered!</strong> Email exists.
    </div>  -->
  <?php
//}

//$query="insert into queries()values('$name','$email','$org','$contact','$feed')";
//$res=mysqi_query($query,$conn);
$res=1;
if ($res) {
?>
  <div class="alert alert-success">
    <strong>Success!</strong> Feedback Submitted.
  </div>
<?php
}else {
?>
    <div class="alert alert-danger">
      <strong>Failed!</strong> Try again.
    </div>
<?php
}
?>



<script type="text/javascript">

var name;
var email;
var contact;
var org;
var feed;
var Data;
var type;

  function Queries() {
  name=document.getElementById("Name").value;
  email=document.getElementById("Email").value;
  contact=document.getElementById("Contact").value;
  org=document.getElementById("Org").value;
  feed=document.getElementById("Feed").value;
  type=document.getElementById("Type").value;


  if (name == '' || email == '' || org == '' || contact == '' || feed == '' || type == '') {
    alert("Please Fill All Fields");
  }else {
    Data="name="+name+"&email="+email+"&org="+org+"&contact="+contact+"&feed="+feed+"&type="+type;
    alert(Data);
    qloadDoc();
  }
}

  function qloadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("feedbackdiv").innerHTML = this.responseText;
      }
    };
    xhttp.open("POST", "queries.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(Data);
  //  xhttp.send("name = "+name+" || email = "+email+" || org = "+org+" || contact = "+contact+" || feed == "+feed+"");
  }

</script>
