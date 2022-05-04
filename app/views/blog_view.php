<div class="container mt-5">
    <div class="modal" id="openModal">
        <div class="modal__dialog">
            <div class="modal__content">
                <a href='#close' id="close" title="Close" class="close">×</a>
                <div>
                    <h2 class="h2 text-center">Что нового?</h2>
                </div>
                <form action="">
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
        <a class="btn btn-primary m-3 col-3" id="btn-submit" role="button">Добавить запись</a>
        <a class="btn btn-outline-primary m-3 col-3">Добавить CSV с записями</a>
    </div>
</div>
<script src="/js/modalWindow.js"></script>