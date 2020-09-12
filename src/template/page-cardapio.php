<?php include 'header.php' ?>

<?php include('template-parts/_banner-cardapio.php'); ?>

<div class="page-wrapper content-wrapper">

<div class="container padding-vertical">
    <div class="cardapio">
            <?php for($i=0;$i < 4;$i++){ ?>
                <div class="cardapio__item">
                <img class="cardapio__image" src="./assets/images/1669.jpg" alt="">
                <div class="cardapio__text">
                    <h2>Titulo</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, in atque voluptates voluptatibus.</p>
                    <span class="cardapio__text--preco">R$<b> 200,00</b></span> 
                </div>
            </div>
            <?php }?>
        </div>
    </div>

   

</div>

<?php include 'footer.php' ?>
