<div>
    <div class="t-contact">

        <h1 class="main-title">Оставь свой отзыв </h1>

    </div>

    <div class="container">
        <section class="comment-form">
            <form class="form needs-validation" name="form" id="form" method="post">
                <div class="form-group contact__name">
                    <h2>ФИО</h2>
                    <input class="form-control" name="name" id="fio" type="text" value="<?php echo $data->fields['name'] ?>" placeholder="Иванов Иван Иванович">
                    <?php echo $data->validator->messages['name'] ?>
                </div>
                <div class="form-group contact__email">
                    <h2 for="form-email">Электронная почта</h2>
                    <input type="email" class="form-control" name="email" id="form-email" value="<?php echo $data->fields['email'] ?>" placeholder="name@example.com">
                    <?php echo $data->validator->messages['email'] ?>
                </div>
                <div class="form-group contact__telephone">
                    <h2 for="form-telephone">Отзыв</h2>
                    <input type="text" class="form-control" name="comment" value="<?php echo $data->fields['comment'] ?>" id="form-comment" placeholder="оставьте ваш отзыв">
                    <?php echo $data->validator->messages['comment'] ?>
                </div>
                <div class="error"></div>
                <input class="btn btn-primary" type="submit" value="Submit" id="submit">
                <input class="btn btn-primary" type="reset" value="Reset">
                <a href="/guestbookload" onclick="" style="margin-left: 20px; text-decoration:underline">Загрузить свой отзыв</a>
            </form>
        </section>
        <section class="comment">
            <h3 class="text-center h3 mb-3">Отзывы</h3>
            <? foreach ($records = $data->getFileText() as $record) : ?>
                <div class="card" style="margin:20px 0;">
                    <div class="comment__item card-body">
                        <p class="card-text"><?= $record['date'] ?></p>
                        <h5 class="card-title h5">Имя: <?= $record['name'] ?></h5>
                        <h6 class="card-subtitle h6 mb-2 text-muted">Email: <?= $record['email'] ?></h6>
                        <p class="card-text">Сообщение: <?= $record['comment'] ?></p>
                    </div>
                </div>
            <? endforeach ?>
        </section>
        <div class="simple"></div>
    </div>
</div>
<!-- <script src="js/contacts.js"></script> -->
<script src="js/calendar.js"></script>