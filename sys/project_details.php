<?php
    require_once '../config.php';

    $id = $_GET['id'];

    $projects_det = $pdo->prepare("SELECT * FROM `projects` WHERE `id` = ?");
    $projects_det->execute(array($id));
    if($projects_det->rowCount() == 1){
        $project_detloop = $projects_det->fetchObject();

        $project_photos = $pdo->prepare("SELECT * FROM `projects_photos` WHERE `project_id` = ? ORDER BY `id` ASC");
        $project_photos->execute(array($project_detloop->id));

?>
    
    <div class="btn-close-detalhes-projeto" onclick="closeDetailProject()">x</div>
    <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="foto-projeto">
        <div id="slider">
            <a href="#" class="control_next">></a>
            <a href="#" class="control_prev"><</a>
            <ul>
                <?php
                    while($project_photo = $project_photos->fetchObject()){
                    ?>
                    <li><div class="photo-ul" style="background-image: url('<?php echo BASE_ADM; ?>/uploads/<?php echo $project_photo->photo; ?>')"></div></li>
                    <?php
                    }
                ?>
            </ul>  
        </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="descr-projeto">
        <h4><?php echo $project_detloop->name; ?></h4>
        <p><?php echo $project_detloop->descr; ?></p>
        <span><b>Technologies:</b> <?php echo $project_detloop->technologies; ?></span>
        </div>
    </div>

    <script src="js/slider-portfolio.js"></script>

    <?php
    }else{
        echo 'error';
    }
    ?>
