<?php
  include('./inc/walidacje.php');
  if (isset($_POST['submit']) && isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['email']) && isset($_POST['telefon']) && isset($_POST['wiadomosc'])) {
    ?>
  <div class="container-fluid modal-container">
    <div class="row">
      <div class="col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6 paddingrestart">
        <div class="mymodal" id="mymodal">
          <div class="modal-content">
            <h2 class="funky-font-black text-center">SPRAWDŹ WPROWADZONE DANE</h2>

            <div class="dane">
              <p class="funky-font-black restart-float">
                Imie: <span>
                  <?php
                if (isset($_POST['imie']) && text_validation($_POST['imie'])) {
                  echo strip_tags($_POST['imie']);
                } else {
                  echo '<span class="hint">Pole imię powinno zaczynać się od <u>dużej litery</u> i zawierać jedynie ciag znaków składający się z liter</span>';
                }
                ?></span></br>
                Nazwisko:  <span>
                <?php
                if (isset($_POST['nazwisko']) && text_validation($_POST['nazwisko'])) {
                  echo strip_tags($_POST['nazwisko']);
                } else {
                  echo '<span class="hint">Pole nazwisko powinno zaczynać się od <u>dużej litery</u> i zawierać jedynie ciag znaków składający się z liter</span>';
                }
                ?></span></br>
                Płeć:<span>
                  <?php
                if (isset($_POST['plec'])) {
                  echo strip_tags($_POST['plec']);
                } else {
                  echo '<span class="hint">Proszę zaznaczyć jedno z pól</span>';
                }
                ?></span></br>
                E-mail <span>
                <?php
                  if(isset($_POST['email']) && mail_validation($_POST['email'])) {
                    echo strip_tags($_POST['email']);
                  } else {
                    echo '<span class="hint"> wprowadzono niepoprawny adres email</span>';
                  }
                ?></span></br>
                Telefon <span>
                  <?php
                  if (isset($_POST['telefon']) && number_validation($_POST['telefon'])) {
                    echo strip_tags($_POST['telefon']);
                  } else {
                    echo '<span class="hint">telefon powinien zaczynać się od prefiksu i zawierać tylko cyfry - 11</span>';
                  }
                  ?>
                </span></br>
                Wiadomość:
                <span>
                  <?php
                if (isset($_POST['temat']) && $_POST['temat'] == '1') {
                  echo 'Prywatna';
                }else if (isset($_POST['temat']) && $_POST['temat'] == '2') {
                echo 'Współpraca';
                }else if (isset($_POST['temat']) && $_POST['temat'] == '3') {
                 echo 'Inne';
               }
               ?> </span>
               <br>
               <textarea  name="wiadomosc"><?php if(isset($_POST['wiadomosc'])){echo strip_tags($_POST['wiadomosc']); } else {echo 'Twoja wiadomość jest pusta bądź zawiera złośliwe znaki';}?></textarea>
             </p>


            </div>
             <div class="row">
               <div class="col-xs-6">
                 <button type="button" class="btn btn-success" id="btn"name="button">POPRAWNE</button>
               </div>
               <div class="col-xs-6">
                 <button type="button" class="btn btn-danger" name="button">BŁĘDNE</button>
               </div>
             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php

} else if(isset($_POST['submit']) && ( !isset($_POST['imie']) || (!text_validation($_POST['imie'])) || !isset($_POST['nazwisko']) || !isset($_POST['plec']) || !isset($_POST['email']) || !isset($_POST['telefon']) || !isset($_POST['wiadomosc']))){
    ?>
    <div class="container-fluid modal-container">
      <div class="row">
        <div class="col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6 paddingrestart">
          <div class="mymodal" id="mymodal">
            <div class="modal-content">


              <div class="dane">
                <h3 class="funky-font-black text-center">Uzupełnij wskazane pola, wprowadzając poprawne dane.</h2>
                  <p class="funky-font-black restart-float">
                    <?php
                      if (!text_validation($_POST['imie'])){
                        echo '<p> Popraw pole <span>"imie"</span></p>';
                      }

                     ?>
                 </p>
              </div>
               <div class="row">
                 <div class="col-xs-12">
                   <div class="text-center">
                     <button type="button" class="btn btn-success"name="button">WRÓĆ</button>
                   </div>
                 </div>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
      unset($_POST['submit']);
  }

  ?>
