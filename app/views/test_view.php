<div class="content">
    <div class="t-test">
        <div class="container">
            <h1 class="main-title">Тест по дискретной математике</h1>
        </div>
    </div>

    <section class="test">
        <!-- <div class="container"> -->

        <form class="form test-form" name="form" action="mailto:maria.h4rlamova@gmail.com" method="post">
            <div class="form-group test-form__name">
                <label for="test-form__fio">ФИО</label>
                <input class="form-control" id="test-form__fio" type="text" placeholder="Иванов Иван Иванович">
            </div>
            <div class="form-group test-form__group">
                <label for="test-form__gr">Группа</label>
                <select class="form-control" name="studyGroup" id="test-form__gr">
                    <option>-</option>
                    <optgroup label="1 курс">
                        <option value="ИС/б-21-1-о">ИС/б-21-1-о</option>
                        <option value="ИС/б-21-2-о">ИС/б-21-2-о</option>
                        <option value="ИС/б-21-3-о">ИС/б-21-3-о</option>
                        <option value="ПИ/б-21-1-о">ПИ/б-21-1-о</option>
                    </optgroup>
                    <optgroup label="2 курс">
                        <option value="ИС/б-20-1-о">ИС/б-20-1-о</option>
                        <option value="ИС/б-20-2-о">ИС/б-20-2-о</option>
                        <option value="ИС/б-20-3-о">ИС/б-20-3-о</option>
                        <option value="ПИ/б-20-1-о">ПИ/б-20-1-о</option>
                    </optgroup>
                    <optgroup label="3 курс">
                        <option value="ИС/б-19-1-о">ИС/б-19-1-о</option>
                        <option value="ИС/б-19-2-о">ИС/б-19-2-о</option>
                        <option value="ПИ/б-19-1-о">ПИ/б-19-1-о</option>
                    </optgroup>
                    <optgroup label="4 курс">
                        <option value="ИС/б-18-1-о">ИС/б-18-1-о</option>
                        <option value="ИС/б-18-2-о">ИС/б-18-2-о</option>
                        <option value="ПИ/б-18-1-о">ПИ/б-18-1-о</option>
                    </optgroup>
                </select>
            </div>
            <div class="form-group test-form__block">
                <p class="test-form__question ">1) Из двух пар чисел (8, 14) и (14, 14) бинарное
                    отношение R(a,b) = b > a выполняется</p>
                <input type="checkbox" name="firstAnswer1" id="test-form__ans1">
                <label for="test-form__ans1">для первой</label>
                <input type="checkbox" name="firstAnswer2" id="test-form__ans2">
                <label for="test-form__ans2">для второй</label>
            </div>
            <div class="form-group test-form__block">
                <p class="test-form__question ">2) Связный граф, который становится несвязным при удалении
                    любого ребра, является</p>
                <select class="form-control" name="secondQuestion" id="test-form__q2ans">
                    <option>-</option>
                    <option>четным</option>
                    <option>циклическим</option>
                    <option>полным</option>
                    <option>деревом</option>
                </select>
            </div>
            <div class="form-group test-form__block">
                <p>
                    3) A и B – множества действительных чисел: А = [0, 7], B = [0, 2]. Множество B\A равно
                </p>
                <textarea class="test-form__textarea" name="thirdTextarea" id="test-form__ans"></textarea>
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