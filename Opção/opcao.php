<html>

    <head>
        <title>Opção <?php echo $_GET['opcao']; ?></title>
    </head>

    <body>

    <?php 
    
    
    if($_GET['opcao'] == 1){?>
        <h1>foi a 1</h1>
    <?php }
    

    elseif($_GET['opcao'] == 2){ ?>
        <h1>foi a 2</h1>
    <?php }
    

    else{ ?>
        <h1>foi a 3</h1>
    <?php } ?>

    </body>
</html>