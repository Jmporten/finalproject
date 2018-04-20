<?php if ($u->isAdmin()) { ?>
    <?php include('views/elements/header.php'); ?>

    <div class="container">
        <div class="page-header">
            <h1>Edit Category</h1>
        </div>

        <?php if ($message) { ?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo $message ?>
            </div>
        <?php } ?>

        <div class="row">
            <div class="span8">
                <form action="<?php echo BASE_URL ?>managecategories/update/?categoryID=<?php echo $categoryID ?>"
                      method="post" onsubmit="editor.post()">
                    <label>Name</label>
                    <input type="text" class="span6" name="name" value="<?php echo $name ?>" required="name">
                    <br/>
                    <input type="hidden" name="categoryID" value="<?php echo $categoryID ?>"/>

                    <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>
    </div>
    <?php include('views/elements/footer.php');
}?>

