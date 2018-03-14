<section class="contact">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-offset-2 col-xs-8 paddingrestart">
        <div class="field">
          <h3 class="funky-font text-center">ZOSTAŃMY  W KONTAKCIE</h3>
          <fieldset>
            <form action="index.php" method="post">
              <label for='imie'>
                <input type="text" name="imie" placeholder="imię"
                <?php
                if(isset($_POST['imie'])) echo 'value="' . $_POST['imie'] . '"';
                ?>/>
              </label>
              <label for="nazwisko">
                <input type="text" name="nazwisko" placeholder="nazwisko"
                <?php
                if(isset($_POST['nazwisko'])) echo 'value="' . $_POST['nazwisko'] . '"';
                ?>/>
              </label>

              <label for="plec">
                <label class="float"><input type="radio" name="plec" value="M"
                <?php
                  if(isset($_POST['plec']) && ($_POST['plec'] == 'M')) {
                     echo 'checked';
                   }
                   ?>
                  /> Mężczyzna</label>
                <label class="float"><input type="radio" name="plec" value="K"
                <?php
                  if(isset($_POST['plec']) && ($_POST['plec'] == 'K')) {
                     echo 'checked';
                   }
                  ?>
                  /> Kobieta</label>
              </label>
              <label for="email">
                <input type="email" placeholder="email" name="email"
                  <?php
                    if(isset($_POST['email'])) echo 'value="' . $_POST['email'] . '"';
                  ?>
                >
              </label>
              <label for="telefon">
                <input type="tel" placeholder="telefon" name="telefon"
                <?php
                  if(isset($_POST['telefon'])) echo 'value="' . $_POST['telefon'] .'"';
                ?>
                >
              </label>
            </fieldset>
            <fieldset>
              <div class="text-center">
                <label for="wiadomosc">Wybierz temat wiadomości:
                  <select name="temat">
                    <option value="1"
                      <?php
                      if (isset($_POST['temat']) && $_POST['temat'] == '1') {
                        echo 'selected';
                      }
                      ?>/>
                    Prywata
                    </option>
                    <option value="2"
                    <?php
                    if (isset($_POST['temat']) && $_POST['temat'] == '2') {
                      echo 'selected';
                    }
                    ?>/>
                    Współpraca</option>
                    <option value="3"
                    <?php
                     if (isset($_POST['temat']) && $_POST['temat'] == '3') {
                       echo 'selected';
                     }
                    ?>/>
                  Inne</option>
                  </select>
                </label>
              </div>
              <div class="text-center">
                <textarea  name="wiadomosc"><?php if(isset($_POST['wiadomosc'])) { echo $_POST['wiadomosc'];}?></textarea>
              </div>
              <div class="text-center">
                <input class="funky-font" type="submit" name="submit" value="Prześlij">
              </div>
              </fieldset>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>
