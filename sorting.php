<?php 
//I removed this sorting. remember to delete
session_start();
include('C:\wamp64\www\EZ-deb\comment\database\database_connection.php');
include('C:\wamp64\www\EZ-deb\comment\database\db1.php');

function count_comment($connect, $comment_id)
{
 $query = "
 SELECT * FROM tbl_reply 
 WHERE comment_id = '".$comment_id."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}   

if(isset($_POST['action'])){
if($_POST['action'] == 'fetch_oldest' && $_POST['page_post'])
 {
    $output = '';
  $page_post = $_POST['page_post'];  
  $query = "
  SELECT * FROM tbl_comment_post 
  LEFT JOIN users ON users.email = tbl_comment_post.email
  WHERE tbl_comment_post.page_post = '$page_post'
  GROUP BY tbl_comment_post.comment_id, users.id 
  ORDER BY comment_id ASC
 
  ";  
  
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  $total_row = $statement->rowCount();
  if($total_row > 0)
  {
 
   foreach($result as $row)
   {
    $profile_image = '';
    if($row['profile_image'] != '')
    {
     $profile_image = '<img src="images_user/'.$row["profile_image"].'" class="circle-img"/>';
    }
    else
    {
     $profile_image = '<img src="images_user/user.jpg" class="circle-img"/>';
    }

   
  
    $output .= '
    <ul>
   <div class="target_border first-five" id="'.$row["comment_id"].'">
      <li class="single_comment_area">
                      

<div class="btn-group pointer hideComment'.$row["comment_id"].' showIcon'.$row["comment_id"].'" id="'.$row["comment_id"].'" style="float:right; display:none;">  
   <i class="fa fa-ellipsis-v fa-2x" class="dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-hidden="true"></i>
  <div class="dropdown-menu dropdown-menu-right">';
 

 if (!empty($_SESSION['id']) && $row["email"] == $_SESSION['id']) {
  # code...
  $output.=' 
   <a href="#" class="dropdown-item delete" id="'.$row["comment_id"].'"><i class="fa fa-trash"></i> Delete</a>
    <a class="dropdown-item edit hide_edit'.$row["comment_id"].'" href="#" id="'.$row["comment_id"].'"><i class="fa fa-pencil"></i> Edit</a>
  ';
}
else {
   $output.=' 
      <a href="#" class="dropdown-item reportPostID" type="button" id="'.$row["comment_id"].'" data-toggle="modal" data-target=".bd-example-modal-sm" data-reportEmail= "'.$row["email"].'" data-content="'.$row["post_content"].'" data-user="'.$row["username"].'"><i class="fa fa-flag"></i> Report</a>
  ';
}
include_once('timeago.php'); //must include_once to avoid redclare of function twice
 $comment_id = $row['comment_id'];
 $type = -1;
if (!empty($_SESSION['id'])) {
    $member_email = '';
    $member_email = $_SESSION['id'];
   
    // Checking user status
$status_query = "SELECT COUNT(*) AS cntStatus,type FROM like_unlike WHERE member_email='$member_email' AND comment_id = '$comment_id'";
$status_result = mysqli_query($con,$status_query);
$status_row = mysqli_fetch_array($status_result);
$count_status = $status_row['cntStatus'];
if($count_status > 0){
  $type = $status_row['type'];
 }
  }
//Count comment total likes 
    $like_query = "SELECT COUNT(*) AS cntLikes FROM like_unlike WHERE type=1 AND comment_id='$comment_id'";
    $like_result = mysqli_query($con,$like_query);
    $like_row = mysqli_fetch_array($like_result);
    $total_likes = $like_row['cntLikes'];
//Count comment total unlikes
   $unlike_query = "SELECT COUNT(*) AS cntUnlikes FROM like_unlike WHERE type=0 AND comment_id='$comment_id'";
   $unlike_result = mysqli_query($con,$unlike_query);
   $unlike_row = mysqli_fetch_array($unlike_result);
   $total_unlikes = $unlike_row['cntUnlikes'];
 $output .= '
  </div>
</div>
      <div class="comment-content d-flex">
        <div class="comment-author hideComment'.$row["comment_id"].'">
       '.$profile_image.'
      </div>
       <div class="comment-meta">
     <div class="hideComment'.$row["comment_id"].'">
      <h6>@'.$row["username"].' <span class="comment-dates">'.timeago(date($row["post_datetime"])).'</span></h6>   
 

      <div class = "hide_edit'.$row["comment_id"].'">
       <p class="">'.$row["post_content"].'</p>
      </div>

       <div id= "message_'.$row["comment_id"].'" style="display:none;">
      <div class="message-content">'.$row["post_content"].'</div>

      </div>

      <div class="hide_edit'.$row["comment_id"].'">
        <div class="d-flex align-items-center mt-4">
      <div style="margin-top:-15px;">';
if($type == 1){ 
  $output .= '<i class="fa fa-thumbs-up pointer liked" id="liked_'.$row["comment_id"].'" title="Like" style="margin-right:10px; font-size: 23px; color:#db4437;" aria-hidden="true"></i><span id="likes_'.$row["comment_id"].'">'.$total_likes.'</span>';
 }
 else{
   $output .= '<i class="fa fa-thumbs-up pointer liked" id="liked_'.$row["comment_id"].'" title="Like" style="margin-right:10px; font-size: 23px;" aria-hidden="true"></i><span id="likes_'.$row["comment_id"].'">'.$total_likes.'</span>';
 }
   $output .= '<i style="margin-right:25px; margin-left:25px;"></i>';

 if ($type == 0) {
   $output .= '<i class="fa fa-thumbs-down pointer unliked" id="unliked_'.$row["comment_id"].'" title="Dislike" style=" margin-right:10px; font-size: 23px; color:#db4437;" aria-hidden="true"></i><span id="unlikes_'.$row["comment_id"].'">'.$total_unlikes.'</span>';
 }
 else {
  $output .= '<i class="fa fa-thumbs-down pointer unliked" id="unliked_'.$row["comment_id"].'" title="Dislike" style=" margin-right:10px; font-size: 23px;" aria-hidden="true"></i><span id="unlikes_'.$row["comment_id"].'">'.$total_unlikes.'</span>';
 }    

$output .= '<button type="button" style="margin-left:30px;" class="reply post_reply" <a href="#" id="'.$row["comment_id"].'" data-email="'.$row["email"].'" >'.count_comment($connect, $row["comment_id"]).' <i class="fa fa-reply" aria-hidden="true"></a></i>
</button>
      </div>
           </div>
       </div>

       </div>
     
       </div>
      </div>
      </div>
         
       <div id="comment_form'.$row["comment_id"].'" style="display:none;">
        <span id="old_comment'.$row["comment_id"].'"></span>
        <br>
        <div class="form-group" align="right">
         <textarea class="comment focusReply" placeholder="Reply here 👻.." id="comment'.$row["comment_id"].'"></textarea>
        </div>
        <div class="form-group" align="right">
      <button type="button" name="submit_comment" class="btn btn-danger btn-sm submit_reply" style="margin-top:-20px">Reply</button>
         <span style="float:left; margin-top:-20px">
         <button type="button" class="reply post_reply btn btn-secondary btn-sm" <a href="#" id="'.$row["comment_id"].'"  data-email="'.$row["email"].'" >        
      '.' Close</a>
         
         </button>
           
           </span>
           
        </div>
        
            
       </div>
          </ul>

    ';
   }
  }
  else
  {
   $output = '<h4 align="center">No Comment Yet!</h4>';
  }
  echo $output;
 }
}

?>
<script>
  $('.first-five').slice(0, 5).show();
  $('.view_more').on('click', function(){
         $('.view_more').text("Loading...");
      setTimeout(function() {
      $('.view_more').text("View More");
    $('.first-five:hidden').slice(0, 5).show();
      if ($('.first-five:hidden').length ==0) {
      $('.view_more').fadeOut();
    }
  }, 2000);

  })

//Auto resize Reply textarea to fit post content
$(".comment").keyup(function (e) {
    autoheight(this);
});

function autoheight(a) {
    if (!$(a).prop('scrollTop')) {
        do {
            var b = $(a).prop('scrollHeight');
            var h = $(a).height();
            $(a).height(h - 5);
        }
        while (b && (b != $(a).prop('scrollHeight')));
    };
    $(a).height($(a).prop('scrollHeight') + 20);
}

autoheight($(".comment"));

</script>  
