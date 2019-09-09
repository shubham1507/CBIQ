<?php
include('db.php');
include('function.php');
include('url.php');
include('fb.php');
$query = '';
$output = array();
$query .= "SELECT * FROM users ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE first_name LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR last_name LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}
if($_POST["length"] != -1)
    {
 $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
 $image = '';
 if($row["image"] != '')
 {
    
     $image = '<img src="'.$url.'upload/'.$row["image"].'" class="img-thumbnail" width="50" height="35" />';
    
  //   $image = '<img src="'.$url.'upload/'.$row["image"].'" class="img-thumbnail" width="50" height="35" />';
 }
 else
 {
  $image = '';
 }
 $sub_array = array();
 $sub_array[] = $image;
 $sub_array[] = $row["first_name"];
 $sub_array[] = $row["last_name"];
 
 $sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-xs update" class="use-address">Update</button>';
 $sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button>';
 
 $sub_array[] = '
 <style>.modal-content{
    border: 2px solid blue;
    border-radius: 5px;
 }</style>
 <a href="#">
          <span class="glyphicon glyphicon-share" data-toggle="modal" onclick="onShareClick(this)" data-target="#exampleModal"></span>
        </a>
 
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
   <div class="modal-header">
   <button type="button" class="close" data-dismiss="modal">&times;</button>
   <h4 class="modal-title">Share</h4>
  </div>
     <div class="modal-body1">
       <div class="row">
       <a class="btn btn-block btn-social btn-twitter"  href="https://twitter.com/intent/tweet?text=Hello%20world">
    <span class="fa fa-twitter"></span>Twitter
  </a>

  <a class="btn btn-block btn-social btn-facebook" onclick="fb()">
  
  <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.cyberbusinessiq.com#blog%2F&layout=button_count&size=small&mobile_iframe=true&appId=1787842094845227&width=69&height=20" width="69" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" onclick="fb()"></iframe>
  
</a>

<a class="btn btn-block btn-social btn-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=http://localhost/test.html&echo $data[];&source=cbiq" onclick="window.open(this.href);return false;">

<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
<script type="IN/Share" data-url="http://www.cyberbusinessiq.com"></script>

</a>
<a class="btn btn-block btn-social btn-media">
<i class="fa fa-medium" aria-hidden="true"> Medium</i>
</a>

       </div>
     </div>
     
   </div>
 </div>
</div>';
 $sub_array[] = $row["N"];
 $data[] = $sub_array;
}
$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  $filtered_rows,
 "recordsFiltered" => get_total_all_records(),
 "data"    => $data
);
echo json_encode($output);

?>
