<?php

session_start();

if($_SESSION['login_user']=='')
{
 header("location:index.php"); 
}



?>
<html>
 <head>
  <title>My Blog</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="img/brand-img.png">
  <style>
   body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:1270px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
  </style>
 </head>
 <body>
  <div class="container box">
   <h1 align="center">My Blog</h1>
   <br />
   <div class="table-responsive">
    <br />
    <div align="left">
            <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
    </div>
    <div align="right">
     <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>
    </div>
    <br /><br />
    <table id="user_data" class="table table-bordered table-striped">
     <thead>
      <tr class="table">
       <th width="10%">Image</th>
       <th width="35%">Title</th>
       <th width="35%">Description</th>
       <th width="10%">Edit</th>
       <th width="10%">Delete</th>
       <th width="10%">Share</th>
       
      </tr>
     </thead>
     <tbody>
     </tbody> 
    </table>
    
   </div>
  </div>
 </body>
</html>

<div id="userModal" class="modal fade">
 <div class="modal-dialog">
  <form method="post" id="user_form" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Add User</h4>
    </div>
    <div class="modal-body">
     
     <label>Enter Title</label>
     <input type="text" name="first_name" id="first_name" class="form-control" />
     <br />
     <label>Enter description</label>
     
     <textarea class="form-control" rows="5"name="last_name" id="last_name" placeholder="Enter description"  required></textarea>
     <br />
     <label>Select User Image</label>
     <input type="file" name="user_image" id="user_image" />
     <span id="user_uploaded_image"></span>
    </div>
    <div class="modal-footer">
     <input type="hidden" name="user_id" id="user_id" />
     <input type="hidden" name="operation" id="operation" />
     <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </div>
  </form>
 </div>
</div>



<script type="text/javascript" language="javascript" >
var descr;
var title;

$(document).ready(function(){
 $('#add_button').click(function(){
  $('#user_form')[0].reset();
  $('.modal-title').text("Add User");
  $('#action').val("Add");
  $('#operation').val("Add");
  $('#user_uploaded_image').html('');


 });
 
 var dataTable = $('#user_data').DataTable({
  //"processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"fetch.php",
   type:"POST"
  }

  
 });


//   $('#user_data tbody').on( 'click', 'button', function () {
//         var data = dataTable.row( $(this).parents('tr') ).data();
//         //alert( '<img src="'.data[0].'" alt="Smiley face" height="42" width="42">');
//         alert( data[2]);
//         alert( data[3]);
//     } );
$("tr.table").click(function() {
    var tableData = $(this).children("td").map(function() {
        return $(this).text();
    }).get();

    alert("Your data is: " + $.trim(tableData[0]) + " , " + $.trim(tableData[1]) + " , " + $.trim(tableData[2]));
});

    
//  var dataTable = $('#user_data').DataTable({
//   "processing":true,
//   "serverSide":true,
//   "order":[],
//   "ajax":{
//    url:"fetch.php",
//    type:"POST"
//   },
//   "columnDefs":[
//    {
//     "targets":[0, 3, 4],
//     "orderable":false,
//    },
//   ],

//  });

// var table = $('#user_data').DataTable();

//  alert( 'Rows '+table.rows( '.tr' ).data()+' are selected' );
// var table = $('#user_data').DataTable();
 
// $('#example tbody').on( 'click', 'tr', function () {
//     console.log( table.row( this ).data() );
// } );


 $(document).on('submit', '#user_form', function(event){
  event.preventDefault();
  var firstName = $('#first_name').val();
  var lastName = $('#last_name').val();
  var extension = $('#user_image').val().split('.').pop().toLowerCase();
  if(extension != '')
  {
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#user_image').val('');
    return false;
   }
  } 
  if(firstName != '' && lastName != '')
  {
   $.ajax({
    url:"add.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
     alert(data);
     $('#user_form')[0].reset();
     $('#userModal').modal('hide');
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.update', function(){
  var user_id = $(this).attr("id");
  $.ajax({
   url:"fetch_single.php",
   method:"POST",
   data:{user_id:user_id},
   dataType:"json",
   success:function(data)
   {
    $('#userModal').modal('show');
    $('#first_name').val(data.first_name);
    $('#last_name').val(data.last_name);
    $('.modal-title').text("Edit User");
    $('#user_id').val(user_id);
    $('#user_uploaded_image').html(data.user_image);
    $('#action').val("Edit");
    $('#operation').val("Edit");
   }
  })
 });
 
 $(document).on('click', '.delete', function(){
  var user_id = $(this).attr("id");
  if(confirm("Are you sure you want to delete this?"))
  {
   $.ajax({
    url:"delete.php",
    method:"POST",
    data:{user_id:user_id},
    success:function(data)
    {
     alert(data);
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   return false; 
  }
 });
 
 
});

function  onShareClick(This){
    //debugger
    var elemnt=$(This);
    var tr=$(elemnt).parent().parent().parent();
    var title=$(tr).find('td')[1].innerText;
    var description=$(tr).find('td')[2].innerText;
    alert('title:'+title+',description:'+description);
}
</script>
   