<div class="content">
    <div class="t-test">
        <div class="container">
            <h1 class="main-title">Тест по дискретной математике</h1>
        </div>
    </div>

    <section class="test">
        <!-- <div class="container"> -->

        <form class="form test-form" name="form"  method="post">
            <div class="form-group test-form__name">
                <label for="test-form__fio">ФИО</label>
                <input class="form-control" id="test-form__fio" type="text" value="<?php echo $data->fields['name'] ?>" placeholder="Иванов Иван Иванович" name="name">
                <?php echo $data->validator->messages['name'] ?>
            </div>
            <div class="form-group test-form__group">
                <label for="test-form__gr">Группа</label>
                <select class="form-control" name="group" id="test-form__gr">
                    <option>-</option>
                    <optgroup <?php if ($data->fields['group']=="21") echo "selected" ?> label="1 курс">
                        <option value="21">ИС/б-21-1-о</option>
                        <option value="21">ИС/б-21-2-о</option>
                        <option value="21">ИС/б-21-3-о</option>
                        <option value="21">ПИ/б-21-1-о</option>
                    </optgroup>
                    <optgroup <?php if ($data->fields['group']=="20") echo "selected" ?> label="2 курс">
                        <option value="20">ИС/б-20-1-о</option>
                        <option value="20">ИС/б-20-2-о</option>
                        <option value="20">ИС/б-20-3-о</option>
                        <option value="20">ПИ/б-20-1-о</option>
                    </optgroup>
                    <optgroup <?php if ($data->fields['group']=="19") echo "selected" ?> label="3 курс">
                        <option value="19">ИС/б-19-1-о</option>
                        <option value="19">ИС/б-19-2-о</option>
                        <option value="19">ПИ/б-19-1-о</option>
                    </optgroup>
                    <optgroup <?php if ($data->fields['group']=="18") echo "selected" ?> label="4 курс">
                        <option value="18">ИС/б-18-1-о</option>
                        <option value="18">ИС/б-18-2-о</option>
                        <option value="18">ПИ/б-18-1-о</option>
                    </optgroup>
                </select>
                <?php echo $data->validator->messages['group'] ?>
            </div>
            <div class="form-group test-form__block">
                <p class="test-form__question ">1) Из двух пар чисел (8, 14) и (14, 14) бинарное
                    отношение R(a,b) = b > a выполняется</p>
                <input type="checkbox" <?php if ($data->fields['qst1'] == "first") echo "selected" ?> name="qst1" id="test-form__ans1" value="first">
                <label for="test-form__ans1">для первой</label>
                <input type="checkbox" <?php if ($data->fields['qst1'] == "second") echo "selected" ?> name="qst1" id="test-form__ans2" value="second">
                <label for="test-form__ans2">для второй</label>
                <?php echo $data->validator->messages['qst1'] ?>
            </div>
            <div class="form-group test-form__block">
                <p class="test-form__question ">2) Связный граф, который становится несвязным при удалении
                    любого ребра, является</p>
                <select class="form-control" name="qst2" id="test-form__q2ans">
                    <option <?php if ($data->fields['qst2'] == "1answ") echo "selected" ?> value="1answ">-</option>
                    <option <?php if ($data->fields['qst2'] == "2answ") echo "selected" ?> value="2answ">четным</option>
                    <option <?php if ($data->fields['qst2'] == "3answ") echo "selected" ?> value="3answ">циклическим</option>
                    <option <?php if ($data->fields['qst2'] == "4answ") echo "selected" ?> value="4answ">полным</option>
                    <option <?php if ($data->fields['qst2'] == "5answ") echo "selected" ?> value="5answ">деревом</option>
                </select>
                <?php echo $data->validator->messages['qst2'] ?>
            </div>
            <div class="form-group test-form__block">
                <p>
                    3) A и B – множества действительных чисел: А = [0, 7], B = [0, 2]. Множество B\A равно
                </p>
                <textarea class="test-form__textarea" name="qst3" id="test-form__ans"></textarea>
                <?php echo $data->validator->messages['qst3'] ?>
            </div>
            <input id="btn-submit" class="btn btn-primary" type="submit" value="Submit">
            <input class="btn btn-primary" type="reset" value="Reset">
            <div id="openModal" class="modal">
                <div class="modal__dialog">
                    <div class="modal__content">
                        <div class="modal__header">
                            <h3 class="modal__title">Подтверждение отправки</h3>
                            <a href='#close' id="close" title="Close" class="close">×</a>
                        </div>
                        <div class="modal__body">
                            <p>Вы действительно хотите отправить форму?</p>
                            <div class="modal__buttons">

                                <input class="btn yes-btn" type="submit" value="Да">
                                <input class="btn no-btn" type="button" value="Нет">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- </div> -->
    </section>
</div>