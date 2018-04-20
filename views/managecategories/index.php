<?php if ($u->isAdmin()){?>

    <?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Manage Categories</h1>
  </div>
  
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

    <?php foreach($categories as $key=>$value) {?>
        <h3><a href="<?php echo BASE_URL ?>managecategories/getCategory/<?php echo $key; ?>"
               title="<?php echo $value; ?>"><?php echo $value; ?></a></h3>
        <div style="margin-top:15px;"><a
                    href="<?php echo BASE_URL ?>managecategories/edit/<?php echo $key; ?>"
                    class="btn">Edit Category</a></div>
        <div style="margin-top:15px;"><a
                    href="<?php echo BASE_URL ?>managecategories/delete/?categoryID=<?php echo $key; ?>"
                    class="btn">Delete Category</a></div>
    <?php }?>
    <h3>Add Category</h3>
    <form action="<?php echo BASE_URL?>managecategories/add/" method="post" onsubmit="editor.post()">
        <label>Name</label>
        <input type="text" class="span6" name="name" required="name" value="<?php echo $name?>">
        <br/>
        <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
    </form>
</div>
<?php include('views/elements/footer.php');?>
<?php }?>
