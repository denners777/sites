    <?php

    foreach ($HotelDestaques as $Hotel) {
        $Imagem = img(array('src' => $Hotel['src'], 'title' => $Hotel['title']));
        echo anchor($Hotel['href'], $Imagem);
    }
    ?>