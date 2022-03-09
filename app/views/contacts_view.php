<div class="content">
    <div class="t-contact">
        <div class="container">
            <h1 class="main-title">Напиши мне!</h1>
        </div>
    </div>
    <section class="contact">
        <form class="form" name="form" id="form" action="mailto:maria.h4rlamova@gmail.com" method="post">
            <div class="form-group contact__name">
                <h2>ФИО</h2>
                <input class="form-control" name="fio" id="fio" type="text" placeholder="Иванов Иван Иванович">
            </div>
            <div class="form-group contact__gender">
                <h2>Пол</h2>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender-male" value="option1" checked>
                    <label class="form-check-label" for="gender-male">Мужской</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender-female" value="option1">
                    <label class="form-check-label" for="gender-female">Женский</label>
                </div>
            </div>
            <div class="form-group contact__bday">
                <h2 for="form-bday">Дата рождения</h2>
                <input class="form-control" type="text" name="form-bday" id="bday">
                <div class="form__calendar" id="calendar">
                    <!-- <label id="input-date" for="input-date">Дата рождения: <div id="date-value"></div></label> -->
                    <div>
                        <select class="calendar__month" name="" id="month-selection">
                            <script src="js/writeMonths.js" type="text/javascript">
                            </script>
                        </select>
                        <select class="calendar__year" id="year-select">
                            <script src="js/writeYears.js" type="text/javascript">
                            </script>
                        </select>
                        <table class="calendar__days">
                            <tbody>
                                <script src="js/writeDays.js" type="text/javascript">
                                </script>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="form-group contact__age">
                <h2 for="form-age">Возраст</h2>
                <select class="form-control" name="age" id="form-age">
                    <option>-</option>
                    <option>16-18</option>
                    <option>18-21</option>
                    <option>21-25</option>
                    <option>25-30</option>
                    <option>30-40</option>
                    <option>40-50</option>
                </select>
            </div>
            <div class="form-group contact__email">
                <h2 for="form-email">Электронная почта</h2>
                <input type="email" class="form-control" name="email" id="form-email" placeholder="name@example.com">
            </div>
            <div class="form-group contact__telephone">
                <h2 for="form-telephone">Номер телефона</h2>
                <input type="tel" class="form-control" name="telephone" id="form-telephone" placeholder="+7(999)1111111">
            </div>
            <div class="error"></div>
            <input class="btn btn-primary" type="submit" value="Submit" id="submit">
            <input class="btn btn-primary" type="reset" value="Reset">
        </form>
    </section>
</div>
<script src="js/contacts.js"></script>
<script src="js/calendar.js"></script>