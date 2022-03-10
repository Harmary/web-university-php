<div class="content">
                <div class="container">
                    <section class="t-interests">
                        <h1 class="main-title">Мои интересы</h1>
                    </section>
                    <section class="interests-list">
                        <div class="list">
                            <script src="/js/interests.js"></script>
                        </div>
                    </section>
                </div>
                <section class="books" id="books">
                    <div class="container">
                        <div class="books__title int-title"><h2><?php echo $data['titles'][0] ?></h2></div>
                        <div class="books__img int-img">
                            <img src="<?php echo $data['images'][0] ?>" alt="">
                        </div>
                        <div class="books__text int-text"><?php echo $data['texts'][0] ?></div>
                    </div>
                </section>
                <section class="films" id="films">
                    <div class="container ">
                        <div class="films__title int-title"><h2><?php echo $data['titles'][1] ?></h2></div>
                        <div class="films__img int-img">
                            <img src="<?php echo $data['images'][1] ?>" alt="">
                        </div>
                        <div class="films__text int-text"><?php echo $data['texts'][1] ?></div>
                    </div>
                </section>
                <section class="hobbies" id="hobbies">
                    <div class="container">
                        <div class="hobbies__title int-title"><h2><?php echo $data['titles'][2] ?></h2></div>
                        <div class="hobbies__items row align-items-center flex-column flex-md-row">
                        <?php 
                        $itemNum = 3;
                        $arrPlace = 2;
                        for($i = 0; $i<$itemNum; $i++){
                            echo '<div class="col-auto col-md-4 h-auto">
                            <div class="hobbies__img int-img">                                    
                            <img src="'.$data['images'][$arrPlace].'" alt="">
                            </div>
                            <div class="hobbies__text int-text">'.$data['texts'][$arrPlace].'</div>
                            </div>';
                            $arrPlace++;
                        }
                        ?>
                        </div>
                    </div> 
                </section>
            </div>