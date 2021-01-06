<main class="container-fluid equipe text-center mt-5">
    <div class="mt-5 pt-5">
        <div class="p-5 d-none d-md-block">
            <h1 class="h1 fort text-warning">Nossa Equipe</h1>
        </div>
        <div class="pt-5 d-md-none d-block">
            <h1 class="h1 fort-sm text-warning">Nossa Equipe</h1>
        </div>
    </div>
    <div class="row justify-content-center ">
        <?php foreach($lista as $item):?>
                <div class="card-deck col-lg-4 col-sm-6 my-5 align-self-center" id="team">
                    <div class="front card">
                        <a href="<?php echo BASE_URL;?>equipe/perfil/<?php echo $item['id']?>" rel="noopener noreferrer">
                            <img src="<?php echo BASE_URL;?>works/public/assets/images/media/covers/<?php echo $item['cover'];?>" class="card-img-top rounded-circle control-img-card p-3" alt="...">
                        </a>
                            <div class="card-body">
                                <h5 class="card-title h4"><b><?php echo $item['name'];?></b></h5>
                                
                                <h5 class="card-title"><?php echo $item['office'];?></h5>
                                <p class="card-text">
                                    <small class="text-muted">36.120.<?php echo $item['id'];?></small>
                                </p>
                            </div>
                        <!-- <p class="card-text">ID: <b>00.00.01</b></p> -->
                    </div>
                </div>
        <?php endforeach;?>
    </div>
</main>