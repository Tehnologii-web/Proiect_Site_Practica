<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incarca oferta ta!</title>
    <link rel="stylesheet" href="Form_firme.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="mesaj">
        <h1>Adauga o noua oferta de munca!</h1>
        <h2>Completeaza formularul.</h2>
    </div>
    

    <form id="formfirma" action="process_offer.php" method="post">

        <input type="text" name="company_name" placeholder="Numele firmei">
        <select class="options" name="offer_type">
          <option value="training">Training</option>
          <option value="internship">Internship</option>
        </select>
        <input type="text" name="offer_title" placeholder="Titlul ofertei">
        <textarea name="offer_description" placeholder="Descrierea ofertei"></textarea>
        <input type="number" name="number_of_places" placeholder="Numărul de locuri disponibile">
        <textarea name="candidate_requirements" placeholder="Cerințe pentru candidați"></textarea>
        <input type="url" name="company_website" placeholder="Link către site-ul sau pagina web a firmei">
        <input id="buttonIncarcare" type="submit" value="Încarcă oferta">
      </form>
      <button id="butonIntoarcere" onclick="location.href='Home_Firme.html'">Inapoi la pagina de oferte. </button>
</body>
</html>