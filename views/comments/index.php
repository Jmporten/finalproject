
<?php include('views/elements/header.php');?>
<div><h3>Comments</h3></div>
<?php foreach($comments as $c) { ?>
    <div style="margin-top:15px;" class="container"><p><?php echo $c['commentText'];?></p></div><hr/>
<?php }?>
    <div class="container">

        <form action="<?php echo BASE_URL?>comments/addComment" method="post" onsubmit="editor.post()">
            <label for="date">Date</label>
            <label>Comment</label>
            <textarea id="tinyeditor" name="commentText" style="width:556px;height: 200px"></textarea>
            <input type="hidden" name="pID" value="<?php echo $pID;?>"/>
            <input type="hidden" name="uID" value="<?php echo $_SESSION['uID'];?>"/>
            <br/>
            <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
        </form>
        <?php if($message){?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo $message?>
            </div>
        <?php }?>
    </div>


<?php include('views/elements/footer.php');?>