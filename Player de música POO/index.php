<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        require_once 'Musica.php';
        require_once 'mp3.php';
        require_once 'player.php';
        require_once 'Album.php';
        $mp3 = new mp3;
        $Musica[0] = new Musica('Friends',3.50,'pop','Nostalgia','Chase Atlantic',2015);
        $Musica[1] = new Musica('Vibes',3.38,'pop','Nostalgia','Chase Atlantic',2015);
        $Musica[2] = new Musica('Swim',3.48,'pop','Chase Atlantic','Chase Atlantic',2017);
        $Musica[3] = new Musica('4',3.50,'pop','Nostalgia','Chase Atlantic',2015);
        $Musica[4] = new Musica('5',3.38,'pop','Nostalgia','Chase Atlantic',2015);
        $Musica[5] = new Musica('6',3.48,'pop','Chase Atlantic','Chase Atlantic',2017);
        $mp3->adicionarMusica($Musica[0],0);
        $mp3->adicionarMusica($Musica[1],1);
        $mp3->adicionarMusica($Musica[2],2);
        $mp3->adicionarMusica($Musica[3],3);
        $mp3->adicionarMusica($Musica[4],4);
        $mp3->adicionarMusica($Musica[5],5);
        $album[1] = new Album('Nostalgia',56.56,'pop','Chase Atlantic',2015,$Musica[1]);
        $mp3->like(1);
        $mp3->like(3);
        $mp3->like(5);
        $mp3->play();
        $mp3->status();
        print_r($album[1]);
        print_r($mp3);
        ?>
    </pre>
</body>
</html>