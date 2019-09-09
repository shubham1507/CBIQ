<?php

function make_query($connect)
{
 $query = "SELECT * FROM users order by id";
 $result = mysqli_query($connect, $query);
 return $result;
}
    
function make_slide_indicators($connect)
{
 $output = ''; 
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
    
  if($count == 0)
  {
   $output .= '
   
   <li data-target="#carousel-example-generic" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#carousel-example-generic" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($connect)
{
 $output = '';
 $count = 0;
 $result = make_query($connect);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item">';
  }

  $output .= '
  <div class="row">
  <div class="col-xs-12">
      <div class="thumbnail adjust1">
          <div class="col-md-2 col-sm-2 col-xs-12">
              <img class="media-object img-rounded img-responsive" src="admin/upload/'.$row["image"].'" alt="'.$row["image"].'"> </div>
          <div class="col-md-10 col-sm-10 col-xs-12">
              <div class="caption">
                  <p class="text-info lead adjust2">'.$row['first_name'].'</p>
                  <p>
                      <span class="glyphicon glyphicon-thumbs-up"></span>'.substr($row['last_name'],0,150).'.....</p>
                  <blockquote class="adjust2">
                      <button type="button" data-toggle="modal" data-target="#exampleModal" id="'.$row["id"].'" class="btn btn-primary btn-xs view" style="width:75px;" id="xsbt">Read More..</button>
                      <small>
                          <cite title="Source Title">
                              <i class="glyphicon glyphicon-globe"></i> www.cyberbusinessIQ.com</cite>
                      </small>
                  </blockquote>
              </div>
          </div>
      </div>
  </div>
</div>
</div>';
  $count = $count + 1;
 }
 return $output;
}



?>