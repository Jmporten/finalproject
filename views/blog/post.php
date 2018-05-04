
<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);

}?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title;?></h1>
        </div>
        <p><?php echo $content;?></p>
        <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>
    </div>
    <div class="container">
    <?php if ($u->isRegistered()) { ?>
                <sub><a href="<?php echo BASE_URL ?>ajax/get_all_comments/?pID=<?php echo $pID; ?>"
                        class="post-loader">Comments</a></sub>
                <form action="<?php echo BASE_URL ?>comments/addComment" method="post" onsubmit="editor.post()">
                    <label>Comment: </label>
                    <textarea id="tinyeditor" name="commentText" style="width:556px;height: 200px"></textarea><br/>
                    <input type="hidden" name="pID" value="<?php echo $pID; ?>"/>
                    <br/>
                    <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                    <hr/>
                </form>

            <?php } else { ?>
                <div style="margin-top:15px;"><a
                            href="<?php echo BASE_URL ?>login/"
                            class="btn">Login</a></div>
            <?php } ?>
    </div>

<?php include('views/elements/footer.php');?>