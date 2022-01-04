<?php
if (isset($_POST['id'])) {
    $oneShow = new ShowController();
    $s = $oneShow->getShowController();
}
if (isset($_POST['update'])) {
    $updateShow = new ShowController();
    $show = $updateShow->updateController();
}

?>
<main>
    <div class="container">
        <div class="row mt-5 justify-content-center ">
            <div class="col-lg-6 col-md-9 col-sm-12">
                <div class="hero mt-5">
                    <div   data-aos="fade-up" class="mapp p-3 d-flex justify-content-between align-items-center">
                        <div class="options">
                            <a class="btn btn-light" href="<?php echo BASE_URL ?>home"><i class="fas fa-home"></i></a>
                        </div>
                        <div class="title">
                            <h4>Update Show</h4>
                        </div>
                        <div></div>
                    </div>
                    <form method="post"   data-aos="fade-down" class="mt-3">
                        <div class="form-group">
                            <label>Title <span>*</span></label>
                            <input type="text" class="form-control" placeholder="Title" name="title" maxlength="255" value="<?php echo $s->TITLE ?>" size="100" required>
                        </div>
                        <div class="form-group">
                            <label>Year <span>*</span></label>
                            <input type="text" class="form-control" placeholder="Year" value="<?php echo $s->YEAR ?>" maxlength="4" size="4" name="year" required>
                        </div>
                        <div class="form-group">
                            <label>Rating</label>
                            <input type="number" step="0.1" value="<?php echo $s->RATING ?>" class="form-control" placeholder="Rating" name="rating" min="0" max="10">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" <?= $s->WATCH == 1 ? 'checked' : '' ?> name="watch">Watch it?
                            </label>
                        </div>
                        <div class="form-group mt-3">
                            <input type="hidden" name="id" value="<?php echo $s->ID ?>">
                            <button type="submit" name="update" class="btn btn-add" name="add">Update Show</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
</main>