<?php
if (isset($_POST['add'])) {
    $newShow = new ShowController();
    $show = $newShow->addController();
}

?>
<main>
    <div class="container">
        <div class="row mt-5 justify-content-center ">
            <div class="col-lg-6 col-md-9 col-sm-12">
                <div class="hero mt-5 mt-sm-3">
                    <div   data-aos="fade-down" class="mapp p-3 d-flex justify-content-between align-items-center">
                        <div class="options">
                            <a class="btn btn-light" href="<?php echo BASE_URL ?>home"><i class="fas fa-home"></i></a>
                        </div>
                        <div class="title">
                            <h4>Add Show</h4>
                        </div>
                        <div></div>
                    </div>
                    <form method="post"   data-aos="fade-up" class="mt-3">
                        <div class="form-group">
                            <label>Title <span>*</span></label>
                            <input type="text" class="form-control" placeholder="Title" name="title" maxlength="255" size="100" required>
                        </div>
                        <div class="form-group">
                            <label>Year <span>*</span></label>
                            <input type="text" class="form-control" placeholder="Year" maxlength="4" size="4" name="year" required>
                        </div>

                        <div class="form-group">
                            <label>Rating</label>
                            <input type="number" step="0.1" class="form-control" placeholder="Rating" name="rating" min="0" max="10">
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="watch">Watch it?
                            </label>
                        </div>





                        <div class="form-group mt-3">

                            <button type="submit" class="btn btn-add" name="add">Add Show</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
</main>