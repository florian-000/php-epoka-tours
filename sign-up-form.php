<!-- A button to open the popup form -->
          <!-- <button class="open-button" onclick="openForm()">
            Hyr si përdorues
          </button> -->

          <button class="open-button" onclick="openForm()">
            Regjistrohuni
          </button>
          <!-- The form -->
          <div class="form-popup" id="myForm">
            <!-- <form action="/action_page.php" class="form-container">
              <h1></h1>

              <label for="email"><b>Email</b></label>
              <input
                type="text"
                placeholder="Shkruani Email-in"
                name="email"
                required
              />

              <label for="psw"><b>Password</b></label>
              <input
                type="password"
                placeholder="Shkruani Fjalëkalimin"
                name="psw"
                required
              />

              <button type="submit" class="btn">Hyr</button>
              <button type="button" class="btn cancel" onclick="closeForm()">
                Mbyll
              </button>
            </form> -->

            <form action="action.php" method="post" class="form-container">
              <label for="name">Emri</label>
              <input
                type="text"
                id="name"
                placeholder="Shkruani Emrin"
                name="name"
              />

              <label for="email">Email</label>
              <input
                type="text"
                id="email"
                placeholder="Shkruani Email-in"
                name="email"
              />

              <label for="password">Fjalëkalimi</label>
              <input
                type="password"
                placeholder="Shkruani Fjalëkalimin"
                name="password"
              />

              <label for="age">Mosha</label>
              <input
                type="text"
                id="age"
                placeholder="Shkruani moshen"
                name="age"
              />

              <input type="submit" value="Regjistrohuni" class="reg-btn" />
              <button type="button" class="btn cancel" onclick="closeForm()">
                Mbyll
              </button>
            </form>
          </div>
        </div>
        </div>
      </div>
    </div>