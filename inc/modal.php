<?php
  if (isset($_POST['submit']) && isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['plec']) && isset($_POST['email']) && isset($_POST['telefon']) && isset($_POST['wiadomosc'])) {
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
                if (isset($_POST['imie'])) {
                  echo $_POST['imie'];
                }
                ?></span></br>
                Nazwisko:  <span>
                <?php
                if (isset($_POST['nazwisko'])) {
                  echo $_POST['nazwisko'];
                }
                ?></span></br>
                Płeć:<span>
                  <?php
                if (isset($_POST['plec'])) {
                  echo $_POST['plec'];
                }
                ?></span></br>
                E-mail <span>
                  <?php
                if (isset($_POST['email'])) {
                  echo $_POST['email'];
                }
                ?></span></br>
                Telefon <span>
                  <?php
                  if (isset($_POST['telefon'])) {
                    echo $_POST['telefon'];
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
               <textarea  name="wiadomosc"><?php if(isset($_POST['wiadomosc'])) { echo $_POST['wiadomosc'];}?></textarea>
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
    unset($_POST['submit']);
  } else {
    ?>
    <div class="container-fluid modal-container">
      <div class="row">
        <div class="col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6 paddingrestart">
          <div class="mymodal" id="mymodal">
            <div class="modal-content">


              <div class="dane">
                <h3 class="funky-font-black text-center">Uzupełnij wszystkie pola, wprowadzając poprawne dane.</h2>
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
  }

  ?>
