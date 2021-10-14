<?php if (!defined('DA_APP')) {
  exit;
} ?>

<?php
if (!empty($err)) {
  foreach ($err as $k => $v) {
    echo '<p style="color:red">' . __('field') . ' ' . __($k) . ': ' . $v . '</p>';
  }
}

$order = get_order();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
  <title>Zoraitil</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_res("extension/res/css/style.css"); ?>">
  <link rel="stylesheet" href="<?php echo get_res("extension/res/css/styles.css"); ?>">
  <link rel="stylesheet" href="<?php echo get_res("extension/res/css/componentsStyles.css"); ?>">

</head>

<body>
  <section class="template_order1 ltr">
    <section class="container">

      <h1 class="x-h1-medical-sp
    center" style="color: #000000; font-weight: ;  ">
        Félicitations pour votre excellente décision !
      </h1>
      <div class="x-p-medical-sp " style="text-align: center; ">
        <p>Bientôt, vous vous débarrasserez des complexes et retrouverez une peau jeune. Cependant, avant de passer à l'étape suivante – veuillez répondre à une question importante...</p>
      </div>
      <h1 class="x-h1-medical-sp
    center" style="color: #000000; font-weight: ;  ">
        Avez-vous plus de 50 ans ?
      </h1>
      <div class="x-p-medical-sp " style="text-align: center; ">
        <p>Si votre réponse est "OUI" – <b>vous devez absolument lire la suite :</b></p>
      </div>
      <div class="x-p-medical-sp " style="text-align: left; ">
        <p>Chez les femmes de plus de 50 ans, l'échange intercellulaire et les processus métaboliques diminuent, ce qui fait que le rajeunissement des cellules cutanées constitue un véritable défi. Il faut une arme vraiment puissante pour rajeunir efficacement la peau ridée.</p>
      </div>
      <div class="x-p-medical-sp " style="text-align: left; ">
        <p>Cependant, <b>ne vous inquiétez pas</b>, car quels que soient l'âge, la profondeur des rides et la flaccidité de la peau – vous obtiendrez un effet spectaculaire en éliminant 98% des rides et en rajeunissant la peau du visage et du cou de 15 ans. Plus rapidement et plus facilement que vous ne le pensez !</p>
      </div>
      <div class="x-p-medical-sp " style="text-align: left; ">
        <p>La seule chose dont vous ayez besoin maintenant, c'est d'une plus grande quantité de la formule rajeunissante,<b> et maintenant vous pouvez les obtenir moins cher.</b> Par conséquent, choisissez la version renforcée du traitement Zoraitil dédiée<b> spécialement aux femmes âgées de plus de 50 ans.</b></p>
      </div>
      <div class="x-p-medical-sp " style="text-align: left; ">
        <p>La disponibilité de la version renforcée du traitement est de <b>100 pièces pour la participation au Club Réductions à un prix incroyablement bas</b> – 219 CHF. Je ne pense pas que cette formule ait jamais été disponible dans une offre aussi avantageuse. Après l'envoi des 100 pièces, le prix de la participation au Club Réductions reviendra à 438 CHF.</p>
      </div>
      <h2 class="x-h2-medical-sp
    center" style="color: #000000; font-weight: ;">
        Pourquoi cette offre est-elle avantageuse ?
      </h2>
      <div class="x-comparison_new-medical-sp ">

        <article>
          <div></div>
          <div>
            <p>2 petites boîtes pour la participation au Club Réductions – offre régulière</p>
          </div>
          <div>
            <p>1 grande boîte pour la participation au Club Réductions – offre spéciale</p>
          </div>
        </article>

        <article>

          <div></div>

          <div>



            <img class="product_visualization x2 gray  lazy_image" src="<?php echo get_res("extension/res/img/ZORAISJOJkxVR4.png"); ?>" alt="img_small_order1">
            <img class="product_visualization x2 gray  lazy_image" src="<?php echo get_res("extension/res/img/ZORAISJOJkxVR4.png"); ?>" alt="img_small_order1">

          </div>

          <div>


            <img class="product_visualization x1   lazy_image" src="<?php echo get_res("extension/res/img/ZORAIResYbijsD.png"); ?>" alt="img_big_order1">

          </div>

        </article>

        <article>
          <div>
            <p>Nombre de comprimés :</p>
          </div>
          <div>
            <p>2 x 30 = 60</p>
          </div>
          <div>
            <p>60</p>
          </div>
        </article>
        <article>
          <div>
            <p>Expédition :</p>
          </div>
          <div>
            <p>9 CHF x 2 = 18 CHF</p>
          </div>
          <div>
            <p>0 CHF</p>
          </div>
        </article>
        <article>
          <div>
            <p>Total :</p>
          </div>
          <div>
            <p>526 CHF</p>
          </div>
          <div>
            <p>219 CHF</p>
          </div>
        </article>

      </div>
      <h2 class="x-h2-medical-sp
    center" style="color: #000000; font-weight: ;">
        Changez la petite boîte pour la grande, qui est plus rentable !
      </h2>
      <div class="x-buttons_order1-medical-sp">

        <a href="<?php echo url(array("action" => 1, "ext" => 1)); ?>" class="buttonBig">
          <p>Oui, je choisis la GRANDE boîte, pour avoir la certitude totale de me débarrasser des rides.</p>
        </a>

        <a href="<?php echo url(array("action" => 1, "ext" => 0)); ?>" class="buttonSmall">
          <p>Non, merci. Je choisis la petite boîte</p>
        </a>

      </div>
    </section>
  </section>

</body>

</html>