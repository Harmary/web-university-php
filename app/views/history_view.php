<div class="wrapper">
        <section onmousedown="InterestFuncOut()">
            <h2 id="history-label" class="t-history main-title">История просмотра</h2><br/>
          <div class="history">
            <div class="container">
              <table class="history__table table ">
                <tbody>
                  <tr class="history__table table__label">
                      <td class="" colspan="2">История текущего сеанса</td>
                  </tr>
                  <tr class="table__row">
                      <td>Страница</td>
                      <td>Количество посещений</td>
                  </tr>
                  <script type="text/javascript">
                    setCookie(7);
                    drawSessionTable(true);
                  </script>
                </tbody>
              </table>
              <table class="history__table table">
                <tbody>
                  <tr class="history__table table__label">
                      <td colspan="2">История за все время</td>
                  </tr>
                  <tr class="table__row">
                      <td>Страница</td>
                      <td>Количество посещений</td>
                  </tr>
                  <script type="text/javascript">
                    drawSessionTable(false);
                  </script>
                </tbody>
              </table>
            </div>
          </div>
          </section>
    </div>