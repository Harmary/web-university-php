<div class="content">
    <div class="t-contact">
        <div class="col-6">
            <h1 class="main-title">Оставь свой отзыв </h1>
        </div>
    </div>
    <section class="col-6 justify-content-left">
        <form class="form needs-validation" name="form" id="form" method="post">
            <div class="form-group contact__name">
                <h2>ФИО</h2>
                <input class="form-control" name="name" id="fio" type="text" value="<?php echo $data->fields['name'] ?>" placeholder="Иванов Иван Иванович" >
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
        </form>
    </section>
    <section class="comments">
        
    </section>
</div>
<!-- <script src="js/contacts.js"></script> -->
<script src="js/calendar.js"></script>