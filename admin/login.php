<!DOCTYPE html>
<html lang="en">
<head>
  <title>Genius Test Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style.css">
  <style type="text/css">
    .modal {
     display: block; /* Hidden by default */
     text-align: center;
     vertical-align: middle !important;
    
  }
  .modal-content {
      width: 50%;
  }
  </style>
</head>

<body>

<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header" style="background-color: #00A298;">
         <h2 style="margin-top: 5px;">Login to Genius Administrator</h2>
    </div>
    <div id="resultbody" style="display:none;"></div>
    <div class="modal-body" id="mobelbody">
      
     
         <form class="form-horizontal" id="idForm" method="post" action="index.php">
          <div class="form-group">
            <label class="control-label col-sm-2" for="Username">Username:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="username" placeholder="Enter username" name="username">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">          
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
          </div>

          <div class="form-group">
          <div id="errormsg" style="color: #F00;">
          </div>
          </div>

          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" onclick="return submitForm();" class="show_btn">Login</button>
            </div>
          </div>
        </form>

    </div>
    
  </div>

</div>


</body>

<script type="text/javascript">

function submitForm(){

  if(validation()){
  //   alert('Form Submitted')
      $.ajax({
           type: "POST",
           url: "checkAdmin.php",
           data: $("#idForm").serialize(), // serializes the form's elements.
           success: function(data)
           {
              if(data==1){
                window.location.href = "index.php"; 
                return false;
              }
              else{
              $('#errormsg').html(data);}
            }
         });
  }

  return false;
}

  function validation(){
  var retValue=true;
  var uname=document.getElementById('username').value;
  var pwd=document.getElementById('pwd').value;
  var errormsg='';

    if(uname=='' || pwd=='')
    { 
      errormsg+='<br>Please enter valid username and password.';
      retValue=false;
    }

    document.getElementById('errormsg').innerHTML=errormsg;
   // alert(errormsg);
    return(retValue);

}

</script>
</script>
</html>