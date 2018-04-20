
    <?php include('views/elements/header.php'); ?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title; ?></h1>
        </div>
        <?php if ($message) { ?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo $message ?>
            </div>
        <?php } ?>

        <?php foreach ($posts as $p) { ?>
            <h3><a href="<?php echo BASE_URL ?>blog/post/<?php echo $p['pID']; ?>"
                   title="<?php echo $p['title']; ?>"><?php echo $p['title']; ?></a></h3>
            <sub><?php echo 'Posted on ' . $p[date] . ' by <a href="' . BASE_URL . 'members/view/' . $p[uid] . '">' . $p[first_name] . ' ' . $p[last_name] . '</a> in <a href="' . BASE_URL . 'category/view/' . $p[categoryid] . '">' . $p[name] . '</a>' ?></sub>
            <div style="margin-top:15px;"><a
                        href="<?php echo BASE_URL ?>ajax/get_post_content/?pID=<?php echo $p['pID']; ?>"
                        class="btn post-loader">View entire post</a></div>
            <?php if ($u->isRegistered()) { ?>
                <sub><a href="<?php echo BASE_URL ?>ajax/get_all_comments/?pID=<?php echo $p['pID']; ?>"
                        class="post-loader">Comments</a></sub>
                <form action="<?php echo BASE_URL ?>comments/addComment" method="post" onsubmit="editor.post()">
                    <label>Comment: </label>
                    <textarea id="tinyeditor" name="commentText" style="width:556px;height: 200px"></textarea><br/>
                    <input type="hidden" name="pID" value="<?php echo $p['pID']; ?>"/>
                    <br/>
                    <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                    <hr/>
                </form>

            <?php } else { ?>
                <div style="margin-top:15px;"><a
                            href="<?php echo BASE_URL ?>login/"
                            class="btn">Login</a></div>
            <?php }
        } ?>
    </div>


    <?php include('views/elements/footer.php'); ?>

