<?php if ($u->isAdmin()){?>
<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Manage Posts</h1>
  </div>
  
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  
  <div class="row">
      <div class="span8">

        <a href="<?php echo BASE_URL;?>manageposts/add/" class="btn btn-primary">Add Post</a>
          <a href="<?php echo BASE_URL;?>managecategories/index/" class="btn btn-primary">Manage Categories</a>
        
      </div>
    </div>
    <?php foreach($posts as $p) { ?>
        <h3><a href="<?php echo BASE_URL ?>blog/post/<?php echo $p['pID']; ?>"
               title="<?php echo $p['title']; ?>"><?php echo $p['title']; ?></a></h3>
        <sub><?php echo 'Posted on ' . $p[date] . ' by <a href="' . BASE_URL . 'members/view/' . $p[uid] . '">' . $p[first_name] . ' ' . $p[last_name] . '</a> in <a href="' . BASE_URL . 'category/view/' . $p[categoryid] . '">' . $p[name] . '</a>' ?></sub>
        <div style="margin-top:15px;"><a
                    href="<?php echo BASE_URL ?>ajax/get_post_content/?pID=<?php echo $p['pID']; ?>"
                    class="btn post-loader">View entire post</a></div>
        <div style="margin-top:15px;"><a
                    href="<?php echo BASE_URL ?>manageposts/edit/?pID=<?php echo $p['pID']; ?>"
                    class="btn">Edit post</a></div>
        <div style="margin-top:15px;"><a
                    href="<?php echo BASE_URL ?>manageposts/delete/?pID=<?php echo $p['pID']; ?>"
                    class="btn">Delete post</a></div>
    <?php }?>
</div>
<?php include('views/elements/footer.php');?>
<?php }?>
