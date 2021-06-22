<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Description" content="A form in hackers-poulette website">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  <link rel="stylesheet" href="styles.css">
  <title>Hackers-poulette-form</title>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar px-6 pt-1 pb-1">
    <div class="navbar-brand">
      <div class="navbar-item">
        <img src="assets/img/hackers-poulette-logo.png" alt="hackers-poulette logo">
      </div>
    </div>

    <div class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item">
          Home
        </a>

        <a class="navbar-item">
          Shop
        </a>

        <a class="navbar-item">
          Contact
        </a>
      </div>

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button">
              <strong>Sign up</strong>
            </a>
            <a class="button is-light">
              Log in
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- NAVBAR -->

  <!-- FORM -->
  <div class="hero is-fullheight">
    <div class="hero-body">

      <div class="container">


        <div class="columns is-centered">
          <div class="column is-10 has-background-white rounded">
            <div class="container">
              <div class="columns pt-3">
                <!-- LOGO -->
                <div class="column is-6 right">
                  <img src="assets/img/hackers-poulette-logo.png" alt="Logo hackers poulette" width="150">
                </div>
                <!-- TITLE -->
                <div class="column is-6 has-text-black is-size-1">
                  <p class="contact">Contact</p>
                  <p class="form">Form</p>
                </div>
              </div>
              <form action="contactForm.php" method="POST">
                <!-- FIRSTNAME -->
                <div class="field px-6">
                  <label class="label">Firstname</label>
                  <div class="control">
                    <input class="input" type="text" name="firstname" placeholder="Enter you firstname">
                  </div>
                </div>
                <!-- LASTNAME -->
                <div class="field px-6">
                  <label class="label">Lastname</label>
                  <div class="control">
                    <input class="input" type="text" name="lastname" placeholder="Enter you lastname">
                  </div>
                </div>
                <!-- GENDER -->
                <div class="field px-6">
                  <label class="label">Gender</label>
                  <div class="control">
                    <label class="radio">
                      <input type="radio" name="gender" value="M">M.
                    </label>
                    <label class="radio">
                      <input type="radio" name="gender" value="F">F.
                    </label>
                  </div>
                </div>
                <!-- E-MAIL -->
                <div class="field px-6">
                  <label class="label">E-mail</label>
                  <div class="control">
                    <input class="input" type="text" name="email" placeholder="Enter you email adresse">
                  </div>
                </div>
                <!-- COUNTRY -->
                <div class="field px-6">
                  <label class="label">Country</label>
                  <div class="control">
                    <div class="select">
                      <select name="country">
                        <option value="Belgium">Belgium</option>
                        <option value="France">France</option>
                        <option value="Italy">Italy</option>
                        <option value="Germany">Germany</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Swiss">Swiss</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- SUBJECT -->
                <div class="field px-6">
                  <label class="label">Subject</label>
                  <div class="control">
                    <div class="select">
                      <select name="subject">
                        <option value="Other">Other</option>
                        <option value="About your purchase">About your purchase</option>
                        <option value="About the shop">About the shop</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- MESSAGE -->
                <div class="field px-6">
                  <label class="label">Message</label>
                  <div class="control">
                    <textarea class="textarea" name="message" placeholder="Textarea"></textarea>
                  </div>
                </div>
                <input id="honey" type="text" name="honey" value="">
                <!-- SUBMIT BUTTON -->
                <div class="field px-6 pb-3 center">
                  <div class="control">
                    <button class="button" name="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer p-4">
    <div class="content has-text-centered">
      <p>
        Follow us on social network :
      </p>
      <i class="fab fa-facebook-square"></i>
      <i class="fab fa-twitter"></i>
      <i class="fab fa-twitch"></i>
      <i class="fab fa-youtube"></i>
    </div>
  </footer>
  <script src="https://kit.fontawesome.com/2e53bc6269.js" crossorigin="anonymous"></script>
</body>

</html>