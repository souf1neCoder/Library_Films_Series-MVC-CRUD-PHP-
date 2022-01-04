<?php
if(isset($_POST['find'])){
    $data = new ShowController();
    $shows = $data->findShow();
} else{

    $data = new ShowController();
    $shows = $data->getAllShows();
}

?>
<main>
    <div class="container">
        <div class="alert_space">

            <?php include('./views/includes/Alert.php') ?>
        </div>
        <div class="hero mt-2">
            <div  data-aos="fade-down" class="mapp p-3  d-flex justify-content-between align-items-center">
                <div class="options">
                    <a class="btn btn-light" title="Add Show" href="<?php echo BASE_URL ?>add"><i class="fas fa-plus"></i></a>
                    <a class="btn  ml-2 btn-dark" title="Home"  href="<?php echo BASE_URL ?>home"><i class="fas fa-home"></i></a>
                    <a class="btn  ml-2 btn-main" title="Logout"  href="<?php echo BASE_URL ?>logout"><i class="fas fa-user"></i> 
                    <?php
                    echo $_SESSION['user']->username;
                    ?></a>
                </div>
                <div class="search ">
                    <form  method="post" class="d-flex">
                    <input type="search" class="form-control" name="search">
                    <button name="find" title="Search"  type="submit" class="btn btn-main"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
            <?php if(empty($shows)): ?>
                    <h4 class="no-yet text-center mt-5">No Shows Yet</h4>
                    <?php else: ?>
            <div class="table-responsive table-responsive-sm table-responsive-md">

                <table  data-aos="fade-up" class="table table-dark table-striped table-bordered table-hover text-center ">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Year</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Watch-it?</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    

                        <tbody>
                            <?php foreach ($shows as $s) : ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $s['TITLE'] ?>
                                    </th>
                                    <td>
                                        <?php echo $s['YEAR'] ?>
                                    </td>
                                    <td>
                                        <?php echo $s['RATING'] ?>
                                    </td>
                                    <td>
                                        <?php echo $s['WATCH'] ? '<span class="badge badge-pill badge-light">Yes</span>' : '<span class="badge badge-pill badge-light">No</span>' ?>
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <form class="mx-1" action="update" method="post">
                                            <input type="hidden" name="id" value="<?php echo $s['ID'] ?>">
                                            <button class="btn-sm btn-g btn-primary"><i class="fa fa-edit"></i></button>
                                        </form>
                                        <form class="mx-1" action="delete" method="post">
                                            <input type="hidden" name="id" value="<?php echo $s['ID'] ?>">
                                            <button class="btn-sm btn-g btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                        
            
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>
        </div>
    </div>
</main>