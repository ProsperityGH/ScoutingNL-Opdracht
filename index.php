<!DOCTYPE html>
<html lang="en">
<head>
  <title>ScoutingNL Opdracht</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-expand-sm navbar-light shadow p-3 mb-5 bg-white rounded">
    <a class="navbar-brand" href="#">
      <img src="assets/img/logo.png" alt="logo" style="width:120px;">
    </a>

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Lorem</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Ipsum</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Dolor</a>
      </li>
    </ul>
  </nav>

  <div id="container">
    <div class="container-fluid">
      <h3>Begin Vragenlijst</h3>

      <form method="get" action="resultaat.php">

        <h4>Vraag 1</h4>
        <p>Weet je hoe je een knoop moet maken in een touw?</p>
    </div>

    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag1" value="5" aria-label="Radio button for following text input">
        </div>
        <span>5 | Ik kan een ander uitleggen wat het is en hoe je het kan toepassen</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag1" value="4" id="vraag1" aria-label="Radio button for following text input">
        </div>
        <span>4 | Ik kan het toepassen in andere situaties / omstandigheden</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag1" value="3" aria-label="Radio button for following text input">
        </div>
        <span>3 | Ik weet het en kan het toepassen</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag1" value="2" aria-label="Radio button for following text input">
        </div>
        <span>2 | Ik weet ervan, maar heb het nooit gebruikt</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag1" value="1" aria-label="Radio button for following text input">
        </div>
        <span>1 | Is bij mij onbekend / kan ik niet</span>
      </div>
    </div>

    <div class="container-fluid">
      <h4>Vraag 2</h4>
      <p>Weet je hoe je een tent moet opzetten?</p>
    </div>

    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag2" value="5" aria-label="Radio button for following text input">
        </div>
        <span>5 | Ik kan een ander uitleggen wat het is en hoe je het kan toepassen</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag2" value="4" aria-label="Radio button for following text input">
        </div>
        <span>4 | Ik kan het toepassen in andere situaties / omstandigheden</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag2" value="3" aria-label="Radio button for following text input">
        </div>
        <span>3 | Ik weet het en kan het toepassen</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag2" value="2" a aria-label="Radio button for following text input">
        </div>
        <span>2 | Ik weet ervan, maar heb het nooit gebruikt</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag2" value="1" aaria-label="Radio button for following text input">
        </div>
        <span>1 | Is bij mij onbekend / kan ik niet</span>
      </div>
    </div>

    <div class="container-fluid">
      <h4>Vraag 3</h4>
      <p>Weet je hoe een goede plek kan kiezen om een tent neer te zetten?</p>
    </div>

    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag3" value="5" aaria-label="Radio button for following text input">
        </div>
        <span>5 | Ik kan een ander uitleggen wat het is en hoe je het kan toepassen</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag3" value="4" aaria-label="Radio button for following text input">
        </div>
        <span>4 | Ik kan het toepassen in andere situaties / omstandigheden</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag3" value="3" aaria-label="Radio button for following text input">
        </div>
        <span>3 | Ik weet het en kan het toepassen</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag3" value="2" aaria-label="Radio button for following text input">
        </div>
        <span>2 | Ik weet ervan, maar heb het nooit gebruikt</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag3" value="1" aaria-label="Radio button for following text input">
        </div>
        <span>1 | Is bij mij onbekend / kan ik niet</span>
      </div>
    </div>

    <div class="container-fluid">
      <h4>Vraag 4</h4>
      <p>Weet je hoe je het besten hout kan hakken?</p>
    </div>

    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag4" value="5" aaria-label="Radio button for following text input">
        </div>
        <span>5 | Ik kan een ander uitleggen wat het is en hoe je het kan toepassen</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag4" value="4" aaria-label="Radio button for following text input">
        </div>
        <span>4 | Ik kan het toepassen in andere situaties / omstandigheden</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag4" value="3" aaria-label="Radio button for following text input">
        </div>
        <span>3 | Ik weet het en kan het toepassen</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag4" value="2" aaria-label="Radio button for following text input">
        </div>
        <span>2 | Ik weet ervan, maar heb het nooit gebruikt</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag4" value="1" aaria-label="Radio button for following text input">
        </div>
        <span>1 | Is bij mij onbekend / kan ik niet</span>
      </div>
    </div>

    <div class="container-fluid">
      <h4>Vraag 5</h4>
      <p>Weet je hoe je het beste een kampvuur kan maken?</p>
    </div>

    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag5" value="5" aaria-label="Radio button for following text input">
        </div>
        <span>5 | Ik kan een ander uitleggen wat het is en hoe je het kan toepassen</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag5" value="4" aaria-label="Radio button for following text input">
        </div>
        <span>4 | Ik kan het toepassen in andere situaties / omstandigheden</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag5" value="3" aaria-label="Radio button for following text input">
        </div>
        <span>3 | Ik weet het en kan het toepassen</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag5" value="2" aaria-label="Radio button for following text input">
        </div>
        <span>2 | Ik weet ervan, maar heb het nooit gebruikt</span>
      </div>
    </div>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text" onClick="answer(this)">
          <input type="radio" name="vraag5" value="1" aaria-label="Radio button for following text input">
        </div>
        <span>1 | Is bij mij onbekend / kan ik niet</span>
      </div>
    </div>

    <input type="submit" value="Submit" name="submit" class="button">
    </form>
  </div>

  <footer id="footer">
    <h3> Copyright ?? 2022 Scouting Nederland
      Dit is de on-offici??le website van de vereniging Scouting Nederland.</h3>
  </footer>

  <script src="assets/js/script.js"></script>
</body>
</html>