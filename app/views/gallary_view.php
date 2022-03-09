<div class="content" id="content">
    <div class="t-gallery">
        <h1 class="main-title">Посмотри мои фото тут!</h1>
        <p>* Они тут лучше, чем в инстаграме</p>
    </div>
    <div id="bigImage">
        <span class="close" id="closeCross">&times;</span>
        <span class="left-arrow">&#60;</span>
        <div class="imgblock">
            <img alt="" class="image-content" id="img01" src="">
        </div>
        <div id="caption"></div>
        <span class="right-arrow">&#707;</span>
    </div>
    <section class="collage">
        <div class="collage__table">
           <?php
           $rowNum = 5;
           $itemNum = 3;
           $item = 0;
           //echo json_encode($photos);
           //echo json_encode($titles);
           for ($i=0; $i < $rowNum; $i++) { 
               echo '<div class="collage__row row flex-column flex-sm-row justify-content-center ">';
               for ($j=0; $j < $itemNum; $j++) { 
                   echo '<div class="collage__item">';
                   echo '<img src="'.$data[$item]['photo'].'" alt="'.$data[$item]['title'].'">';
                   echo '<span>'.$data[$item]['title'].'</span>';
                   echo '</div>';
                   $item++;
               }
               echo '</div>';
           }
           ?>
        </div>
    </section>
</div>