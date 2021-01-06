<div class="container-fluid text-center p-0">
    <section class="perfil">
        <img src="<?php echo BASE_URL;?>assets/images/capa_gold-banks-clara.jpg" alt="">
    </section>
    <section class="container text-center">
    <img src="<?php echo BASE_URL;?>works/public/assets/images/media/covers/<?php echo $info['cover'];?>" class=" rounded-circle control-img-card p-top"/>
    </section>
    <h1 class="mt-5 pt-5"><b><?php echo $info['name'];?></b></h1>
    <article class="container">
        <p class="h3"><?php echo $info['office'];?></p>
        <div class="text-left mt-5">
            <p><b>email : </b>
                <?php echo $info['email'];?>
            </p>
            <p><b>Data de Nascimento : </b>
                <?php echo date('d/m/Y', strtotime($info['birthdate']));?>
            </p>
            <p><b> Telefone: </b>(21)
                <?php echo $info['phone'];?>
            </p>
            <p><b>RG : </b>
                <?php echo $info['rg_beginning'];?>
                .***.**<?php echo $info['rg_end'];?>
            </p>
            <p><b>CPF : </b>
                <?php echo $info['cpf_beginning'];?>
                *.***-***-<?php echo $info['cpf_end'];?>
            </p>
            <p><b>Matricula : </b>
                36.120.<?php echo $info['id'];?>
            </p>
            <p class="status" data-cor="contrato">
                <b>status : </b>
                <?php echo $info['status'];?>
            </p>
        </div>
    </article>
</div>




<!-- INSERT INTO funcionario(avatar, cover, name, email, birthdate, phone, office, admission_date, rg_beginning, rg_end, cpf_beginning, cpf_end, status) VALUES ('', 'fernanda.jpeg', 'Fernanda Medeiros Teodoro', 'fernanda.medeiros@goldbanksbr.com.br', '1996-11-11', '9999-9999', 'consultora', '2020-08-03', '01', '81', '16', '41', 'ativo') -->