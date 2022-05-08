<div class="container mt-5">
    <div class="modal" id="openModal">
        <div class="modal__dialog">
            <div class="modal__content">
                <a href='#close' id="close" title="Close" class="close">×</a>
                <div>
                    <h2 class="h2 text-center">Что нового?</h2>
                </div>
                <form enctype="multipart/form-data" method="POST">
                    <div class="form-group ">
                        <label for="title">Заголовок</label>
                        <input type="text" value="<?php echo $data->fields['title'] ?>" class="form-control" name="title" id="title">
                        <?php echo $data->validator->messages['title'] ?>
                    </div>
                    <div class="form-group">
                        <label for="image">Изображение записи</label>
                        <input type="file" class="form-control-file" name="image" id="image">
                    </div>
                    <div class="form-group">
                        <label for="Text">Текст записи</label>
                        <textarea class="form-control" name="text" id="text"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary yes-bth">Отправить</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <a class="btn btn-primary m-2 col-3" id="btn-submit" href="#" role="button">Добавить запись</a>
        <a class="btn btn-outline-primary m-2 col-3" href="#" role="button">Добавить CSV с записями</a>
    </div>
    <div class="blog__records ">
        <?
        $result = $data->table->getRecords($data->start_pos, $data->perpage, "ORDER BY date DESC");
        foreach ($result as $key) :
        ?>
            <? $rec = (array)$key;?>
            <div class="card m-3" style="width: 500px;">
                <img src="<?echo $rec['image']?>" class="card-img-top" alt="..." >
                <div class="card-body">
                    <h5 class="card-title"><?echo $rec['title']?></h5>
                    <p class="card-text"><?echo $rec['text']?></p>
                    <p class="card-text"><small class="text-muted"><?echo $rec['date']?></small></p>
                </div>
            </div>
        <? endforeach ?>
    </div>
    <?$data->link_bar($data->page, $data->pages_count);?>
</div>
<script src="/js/modalWindow.js"></script>