<?php if (!defined('DA_APP')) {
    exit;
} ?>

<?php
if (!empty($err)) {
    foreach ($err as $k => $v) {
        echo '<p style="color:red">' . __('field') . ' ' . __($k) . ': ' . $v . '</p>';
    }
}
$timeOffer = date('d.m.Y', time() + 60 * 60 * 24);
$order = get_order();
?>
<!DOCTYPE html>
<html lang="fr_CH">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Zoraitil</title>
    <meta name="viewport" content="initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Open+Sans:wght@400;700&family=Roboto:wght@400;700&display=swap&family=Lobster&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_res('form_big/mobile/res/css/styles.css') ?>" />
    <script src="<?php echo get_res("form_big/mobile/res/js/jquery-1.11.1.min.js "); ?>"></script>
    <script type="text/javascript" src="<?php echo get_res("form_big/mobile/res/js/bibliography.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo get_res("form_big/mobile/res/js/scrollBox.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo get_res("form_big/mobile/res/js/image.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo get_res("form_big/mobile/res/js/slick.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo get_res("form_big/mobile/res/js/arrowTop.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo get_res("form_big/mobile/res/js/sticky-bar.js"); ?>" defer></script>

</head>

<body class="index">
    <div class="template_index ltr">
        <div class="container">

            <header class="container__header">

            </header>

            <div class="container__wrapper ">

                <div class="container__wrapper--left">

                    <div class="container__wrapper--main">
                        <div style="text-align: left;" class="x-image_and_cirkle-medical-sp
 left">


                            <noscript>
                                <img class="image-img" src="<?php echo get_res("form_big/mobile/res/img/zdjecie_zona_Sakury_before-after_SP_V3a.jpg"); ?>" />
                            </noscript>

                            <img class="image-img lazy_image" src="<?php echo get_res("form_big/mobile/res/img/zdjecie_zona_Sakury_before-after_SP_V3a.jpg"); ?>" />


                            <div class="cirkle">
                                <span>
                                    <p>Une peau douce</p>
                                </span>
                                <p>en 21 jours !</p>
                            </div>
                        </div>
                        <h1 class="x-h1-medical-sp
    left" style="color: #8B0000; font-weight: ;  ">
                            UNE PEAU DOUCE COMME LA SOIE EN 21 JOURS !
                        </h1>
                        <div class="x-small_prof-medical-sp  left">
                            <div class="box-prof">
                                <img class="article-img" src="<?php echo get_res("form_big/mobile/res/img/zdjecie_profilowe_Sakura_SP_V1.png"); ?>" alt="">
                                <div class="article-text">
                                    <div style="text-align: center;">
                                        <p>DR KENZO SAKURA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="x-h2-education-sp
    left" style="color: #000000; font-weight: ;">
                            Voici le résultat du traitement auquel est parvenue mon épouse. Son visage était déformé par des cicatrices profondes ... donc vos rides et vos imperfections disparaîtront encore plus vite !
                        </h2>
                        <div class="x-profesor_box-medical-sp left ">
                            <img style="float:right;
  margin-right" class="img right" src="<?php echo get_res("form_big/mobile/res/img/zdjecie_Sakura_SP_V1.jpg"); ?>" alt="">
                            <div class="text">
                                <p>Bonjour !</p>
                                <p>Je m'appelle Kenzo Sakura et je suis un scientifique, l'expert en chef dans le domaine de la génétique moléculaire à l'Institut de Biotechnologie de Tokyo (Japon). Il y a un an, j'ai inventé une formule de lifting tropico-dermale facile à appliquer et super-efficace. Grâce à elle <b>déjà 312 000 de participants volontaires (y compris ma femme bien-aimée) se sont une fois pour toutes libérées de toues les imperfections cutanées</b> (rides, relâchement cutané, marques de cicatrice, varicosités, taches, cernes et poches sous les yeux ainsie que de 31 autres types d'imperfection).</p>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: ;">
                            Ainsi, si vous en avez déjà assez de :
                        </h2>
                        <ul class="x-ul_list-medical-sp
left">
                            <li>
                                <p><b>observer sans pouvoir agir comment vos rides se multiplient chaque année</b>– et vous vous rappelez avec nostalgie et amertume les moments où vous voyiez un visage jeune, lisse et radieux dans le miroir ;</p>
                            </li>
                            <li>
                                <p><b>appliquer une couche épaisse de maquillage </b>– pour cacher les rides, les cernes et les poches sous les yeux ainsi qu'une teinte grise de la peau ;</p>
                            </li>
                            <li>
                                <p><b>dépenser de l'argent pour des dizaines de produits cosmétiques inefficaces</b> – parce que les publicités vous disent que vous avez besoin d'une crème différente pour le jour, une autre pour la nuit, une autre pour les rides, une autre pour les yeux et ainsi de suite à l'infini...</p>
                            </li>
                        </ul>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: ;">
                            Assurez-vous de lire le message que je veux vous transmettre...
                        </h2>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Désormais, vous pouvez éliminer toutes vos rides facilement, rapidement et avec discrétion. <b>Figurez-vous que bientôt, vous redonnerez une apparence jeune à votre peau sans même quitter votre salle de bain.</b>Sans dépenser de l'argent pour des produits de beauté inefficaces, sans gaspiller du temps pour analyser les listes d'ingrédients, sans exposer votre visage au scalpel.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>C'est possible parce que j'ai inventé la formule tropico-dermale révolutionnaire qui <b>rajeunit la peau de 15, 20 et même de 25 ans.</b>Grâce à cela, elle lisse toutes les rides et élimine les imperfections de la peau et, par conséquent, redonne une apparence belle, jeune et saine au visage pour toujours.</p>
                        </div>
                        <div class="x-sticky_bar_2-on-medical-sp  sticky_bar">
                            <div class="b2 fly-box">
                                <div class="box">
                                    <span class="ico"></span>
                                    <p>23
                                        Personnes ayant effectué un achat aujourd'hui</p>
                                </div>
                            </div>
                        </div>
                        <div class="sticky_bar2-on"></div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Tout a commencé par un événement tragique suite auquel...</p>
                        </div>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: ;">
                            Ma femme a frôlé la mort
                        </h2>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Ce jour-là, j'ai acheté à ma femme Michiko des roses rouges. – C'est pour quelle occasion ? – elle riait toute surprise – Je ne peux pas offrir des fleurs à ma femme sans occasion ? – je lui ai répondu et j'ai embrassé son front. Michiko vaut toutes les fleurs du monde. Cette femme est un trésor. Toujours souriante, chaleureuse, compréhensive. La meilleure mère pour notre fille Yumi âgée de 5 ans.</p>
                        </div>

                        <div class="x-image-medical-sp lazy position-left  left">





                            <noscript>
                                <img style="" class="image-img " src="<?php echo get_res("form_big/mobile/res/img/hhh.png"); ?>" />
                            </noscript>

                            <img style="" class="image-img lazy_image " src="<?php echo get_res("form_big/mobile/res/img/hhh.png"); ?>" />


                            <div class="text-container">
                                <div style="text-align: center;">
                                    <p>Michiko et Yumi pendant un moment d'insouciance, un jour avant l'événement qui a transformé la vie de notre famille en cauchemar</p>
                                </div>
                            </div>

                        </div>

                        <script>
                            $(document).on('ready', function() {
                                $(".x-image-medical-sp").each(function() {
                                    $(this).image();
                                });
                            })
                        </script>

                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Un instant plus tard, nous nous sommes dit au revoir car je devais aller à une réunion. J'ai regardé ma femme alors qu'elle marchait joyeusement dans la rue. Et soudain, 2 hommes cagoulés sont apparus devant elle.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Tout s'est passé si vite. L'un des hommes voulait voler le sac à main de Michiko. Mon épouse a essayé de se défendre. J'ai vu un couteau scintiller.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Quand je suis arrivé, les hommes étaient partis et ma femme était allongée sur le trottoir. Son visage était couvert de sang. Une foule de personnes s'est rassemblée autour d'elle. Des pétales de roses rouge flottaient dans l'air...</p>
                        </div>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: 700;">
                            Ce diagnostic était pour elle comme un coup de grâce
                        </h2>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>− Je vais être honnête – votre femme s'en sortira mais il y aura de profondes cicatrices sur son visage – a déclaré le médecin sans ambages lorsque nous sommes arrivés à l'hôpital. Si le couteau de l'agresseur s'était glissé un centimètre plus loin dans son visage, elle serait morte.</p>
                        </div>
                        <h5 class="x-h5-medical-sp
  left" style="font-weight: ; color: #000000;">
                            Les voyous ont défiguré le visage de mon épouse en plein jour. Et pourquoi ? Pour lui voler une somme d'argent insuffisante même pour acheter un paquet de cigarettes.
                        </h5>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>– Que valent les cicatrices ! Le plus important c'est que Michiko est sauve et saine - ai-je pensé tout naïvement en allant à sa salle.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Lorsque je suis entré à sa chambre, j'ai vu ma femme toute en larmes. Michiko pouvait à peine parler. Après chaque mot prononcé, son visage était tordu d'une douleur atroce.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>− As-tu entendu ? Je serai comme un monstre d'un cauchemar jusqu'à la fin de ma vie ! – a-t-elle murmuré toute tremblante. Je l'ai serrée alors fort dans mes bras et j'ai lui ai dit quelques mots d'encouragement pour la rassurer.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b> Cependant, quand j'ai quitté la chambre de ma femme, quelque chose a éclaté en moi.</b> Je me suis effondré involontairement sur la chaise du couloir et j'ai commencé à sangloter comme un petit enfant. Ce furent les larmes de la colère et de l'impuissance. Elle ne le méritait pas ! Alors que moi, je n'ai pu rien faire pour l'aider...</p>
                        </div>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: ;">
                            − Je suis un monstre ! – a-t-elle crié les larmes aux yeux
                        </h2>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Michiko est rentrée à la maison toute couverte de bandages. Les plaies ont guéri pendant plusieurs mois et – comme le médecin l'avait prédit – elles ont laissé des cicatrices. Mon épouse voulait être courageuse. Elle essayait de maquiller les cicatrices, elle appliquait également des crèmes et des pommades de toutes sortes que je lui proposais. Cependant, les cicatrices étaient toujours visibles.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Une nuit, j'ai été réveillé par le cri de notre fille. Je me suis vite levé et j'ai couru dans sa chambre. J'ai vu une image déchirante. Ma femme essayait de calmer notre fille en sanglots mais elle se débattait de toute ses forces. <b>– Laisse-moi, le monstre ! </b>– criait la fillette. Il s'est par la suite avéré que la fille avait fait un cauchemar mais quand elle a vu sa mère, elle s'est effrayée davantage. Le visage cicatrisé de ma femme a rendu notre petite fille hystérique.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Depuis ce temps-là, ma femme s'est complètement renfermée sur elle-même. Découragée, elle a cessé de prendre soin d'elle-même, elle a caché tous les miroirs dans la maison pour pouvoir ne pas voir son reflet. Parfois, quand je rentrais, elle restait assise sur le canapé avec un regard vide fixé sur le mur devant elle. <b> J'ai observé avec douleur ma femme bien-aimée sombrer dans un désespoir noir. </b></p>
                        </div>

                        <div class="x-image-medical-sp lazy position-left  left">





                            <noscript>
                                <img style="" class="image-img " src="<?php echo get_res("form_big/mobile/res/img/zdjecie_dzieci_Sakury2_SP_V1.jpg"); ?>" />
                            </noscript>

                            <img style="" class="image-img lazy_image " src="<?php echo get_res("form_big/mobile/res/img/zdjecie_dzieci_Sakury2_SP_V1.jpg"); ?>" />


                            <div class="text-container">
                                <div style="text-align: center;">
                                    <p>Notre fille avait peur des cicatrices sur le visage de sa maman.</p>
                                </div>
                            </div>

                        </div>

                        <script>
                            $(document).on('ready', function() {
                                $(".x-image-medical-sp").each(function() {
                                    $(this).image();
                                });
                            })
                        </script>

                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: ;">
                            Comment ai-je découvert "l'activateur de la jeunesse de peau" ?
                        </h2>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>J'en avais assez de ne pas agir. <b>J'ai dû libérer ma femme des cicatrices disgracieuses et ainsi apporter la paix à ma famille.</b> Je suis scientifique, un spécialiste de la recherche génétique. J'ai participé à l'invention des substances qui ont apporté des revenus gigantesques aux principales entreprises de cosmétiques japonaises. J'ai décidé d'utiliser tout mon savoir et mes ans d'expérience pour créer une formule qui rétablirait une peau saine et sans cicatrices à ma femme.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>J'ai aussitôt entrepris mes recherches. L'Institut de Biotechnologie où je travaille possède l'un des laboratoires les plus modernes au monde. Nous testons les produits des plus grandes marques de cosmétique mondiales avant de les lancer sur le marché.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Pendant six mois, j'ai essayé des combinaisons des substances naturelles les plus fortes. Mon objectif était de créer une formule qui <b>active la régénération automatique de la peau.</b> Autrement dit, je voulais que ma formule renouvelle la peau du visage de ma femme et lui redonne sa beauté d'antan. En même temps, elle devrait être 100 % sans danger pour la santé. La peau de Michiko était déjà dans un état déplorable et je ne pouvais l'exposer à aucune irritation.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Je travaillais principalement de nuit car je devais remplir mes obligations professionnelles pendant la journée. Après six mois comme ça, j'étais complètement épuisé. <b>J'avais peur de ne pas avoir assez de force </b>− qu'après tant de nuits blanches, de stress et d'efforts constants, mon corps ne pourrait pas le supporter.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>J'avais de plus en plus souvent des vertiges, j'étais essoufflé, je ressentais une sensation de picotement derrière mon sternum. Une nuit, six mois après le début des recherches, je me suis retrouvé à l'hôpital. Il s'est avéré que j'avais failli faire une crise cardiaque. Je n'en ai jamais dit à ma femme.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Toutefois, je sentais que j'étais de plus en plus proche du succès et que je ne pouvais pas abandonner maintenant.</p>
                        </div>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: ;">
                            Une erreur de tubes à essai s'est avérée être une aubaine
                        </h2>
                        <div class="x-sticky_bar_3-on-medical-sp  sticky_bar">
                            <div class="b3 fly-box">
                                <div class="box">
                                    <span class="ico"></span>
                                    <div>
                                        <p>DERNIERS ACHATS EFFECTUÉS</p>
                                        <span>- à l'instant, Mme Gabrielle de Vernier</span>
                                        <span>- il y a 18 min Mme Sophie de Nyon </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sticky_bar3-on"></div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>Un heureux accident m'a aidé. </b>Après de nombreuses heures de travail au laboratoire, j'étais très fatigué et... je me suis trompé de tubes à essai. Au lieu d'ajouter une substance à la formule pour faire une crème pour le visage, j'ai ajouté une solution pour les substances à prendre par voie orale.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>J'ai juré amèrement. J'ai pensé que tout était perdu. Ma formule était presque prête – et maintenant la solution allait changer son action. Et il faudrait recommencer tout le processus dès le début. Je savais que j'aurais plus assez de force pour les six mois suivants de recherches.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>Pourtant, à ce moment-là, un miracle a eu lieu !</b> L'appareillage s'est mis à fonctionner bizzarrement. J'ai regardé dans le microscope. La formule a enfin commencé à agir comme il fallait ! Les cellules de la peau visibles au microscope ont commencé à se régénérer toutes seules de façon automatique.</p>
                        </div>
                        <h5 class="x-h5-medical-sp
  left" style="font-weight: ; color: #000000;">
                            Les cellules sous le microscope "rajeunissaient littéralement devant mes yeux".
                        </h5>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>C'est alors que j'ai compris que le secret réside dans l'action de l'intérieur de l'organisme. Au lieu d'appliquer des crèmes à la surface de la peau, vous devez agir en profondeur sous la peau et y enclencher le processus d'auto-réparation naturel. Grâce à cela, j'ai reçu des résultats dont je n'avais même pas rêvé. Il s'est avéré que la formule non seulement libère la peau des cicatrices, des taches de naissance et des points de rougissement. Du fait qu'elle agit sur les couches les plus profondes de la peau, <b>elle inverse également tous les signes du vieillissement.</b> J'ai réalisé qu'en voulant aider ma femme à se débarrasser des cicatrices disgracieuses, j'ai inventé par accident un "élixir de jouvence".</p>
                        </div>

                        <h4 class="x-h4-medical-sp
  left" style="font-weight: 700; background: ; color: #FF0000;">
                            − Tu m'as donné un nouveau visage – m'a-t-elle dit les larmes aux yeux
                        </h4>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Ma femme m'a fait entièrement confiance et a accepté d'essayer la formule que j'ai conçue. Quand je lui ai remis la formule, elle m'a remerciée avec un sourire. Mais dans ses yeux, je pouvais voir la fatigue et un manque de foi. <b>Elle avait essayé tant de substances inefficaces qu'elle ne s'attendait qu'à une déception.</b> Par contre, je savais bien que ce serait différent cette fois !</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Après quelques jours, j'ai vu un sourire sur son visage – le premier depuis plusieurs mois. – Kenzo, regarde, les cicatrices diminuent – m'a-t-elle dit avec un air d'être emporté aux septièmes cieux. Après une semaine, les cicatrices effrayantes ressemblaient à de fines lignes blanches.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Le jour 14 a été une percée. Les cicatrices ont presque complètement disparu et toutes les imperfections (ridules autour des yeux, vieilles cicatrices d'acné, veines cassées) sont complètement absorbées. <b>Après 21 jours, il n'y avait plus aucune trace des cicatrices sur le visage de ma femme.</b> Son visage était parfait- tout comme le visage d'un enfant innocent. Ma femme était radieuse.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Elle a commencé à sortir et a renoué des contacts avec des amis. Elle a complètement arrêté de se maquiller. Elle n'avait plus à corriger son apparence – sa peau était idéale et n'avait plus besoin d'être améliorée.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>− Maman, tu as un visage beau comme un ange</b> – notre fille a un soir dit en caressant le visage de Michiko avec sa petite main. Mon épouse m'a alors regardé avec reconnaissance qu'aucun mot ne pourrait jamais exprimer. J'ai senti avoir accompli ma mission.</p>
                        </div>

                        <div class="x-image-medical-sp lazy position-left  left">





                            <noscript>
                                <img style="" class="image-img " src="<?php echo get_res("form_big/mobile/res/img/zdjecie_rodzina_Sakury_SP_V1.jpg"); ?>" />
                            </noscript>

                            <img style="" class="image-img lazy_image " src="<?php echo get_res("form_big/mobile/res/img/zdjecie_rodzina_Sakury_SP_V1.jpg"); ?>" />


                            <div class="text-container">
                                <div style="text-align: center;">
                                    <p>Nous étions tous trois heureux.</p>
                                </div>
                            </div>

                        </div>

                        <script>
                            $(document).on('ready', function() {
                                $(".x-image-medical-sp").each(function() {
                                    $(this).image();
                                });
                            })
                        </script>

                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Cependant, un soir, un mois après l'application de la formule, ma femme s'est approchée de moi avec une expression sérieuse sur son visage :</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>− J'ai rencontré ma mère aujourd'hui. Elle a beaucoup vieilli ces dernières années. Et l'agression contre moi lui a encore ajouté une bonne dizaine d'années ... Elle est beaucoup attristée, elle dit qu'elle ressemble à une vieille pomme ridée.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>- Je sais que tu as inventé la formule uniquement pour moi. Mais pense-y un instant - tu pourrais aider aussi ma mère et des centaines d'autres femmes. Kenzo, tu ne peux pas dissimuler cette formule au monde. Ce serait un péché de négligence !</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Michiko avait raison - je n'avais pas de droit de garder une invention si révolutionnaire seulement pour moi. J'ai décidé de faire tout pour rendre ma formule disponible au plus grand nombre de femmes que possible. J'ai transmis ma découverte pour des études à grande échelle.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Les 5 laboratoires de recherches les plus importants du monde entier (des États-Unis, du Canada, de la Chine et du Japon) ont confirmé l'efficacité la plus probante de ma formule. <b>Je l'ai breveté sous le nom de : formule tropico-dermale Zoraitil.</b></p>
                        </div>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: ;">
                            Zoraitil élimine 98,9 % des rides et réduit l'âge biologique de la peau de 15, 20 et même 25 ans
                        </h2>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Je tenais à ce que mon invention soit facile à appliquer si bien que le plus de femmes que possible peuvent en profiter. C'est pourquoi je l'ai enfermée dans des comprimés effervescents à dissoudre dans l'eau. <b>Il suffit de boire la formule une fois par jour,</b> pour observer comment les rides et les imperfections disparaissent du jour au lendemain.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Déjà 2 minutes après l'application de la formule de lifting tropico-dermale Zoraitil, la capacité naturelle de votre peau à s'auto-régénérer est débloquée. Dès la première application, vous pourrez observer que votre peau devient plus ferme et<b> les rides qui la parsemaient "sont littéralement absorbées”. </b></p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Les femmes qui utilisent ma formule tropico-dermale décrivent souvent son action avec le mot "magie". Effectivement, cela peut le sembler à première vue. Il se peut que vous buviez la formule et que vous alliez ensuite à la cuisine pour préparer le repas. Lorsque vous vous regardez à nouveau dans le miroir après quelques heures, vous pouvez avoir l'impression que quelqu'un a littéralement <b>effacé les rides de votre visage.</b></p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Plusieurs femmes éprouvent ce sentiment. Les femmes m'écrivent qu'en quelques heures, elles se sont débarrassées des rides auxquelles elles étaient habituées depuis des années. Les rides "du fumeur" autour des lèvres, "la ride du lion" entre les sourcils, les rides mimiques. Après l'application de la formule tropico-dermale toutes ces imperfections <b>disparaissent littéralement d'heure en heure.</b></p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>Après 21 jours d'utilisation de la formule Zoraitil, vous vous débarrasserez de toutes les rides, boutons, cernes et poches sous les yeux, ainsi que des taches et décolorations, ainsi que du teint terne et blême.</b>Votre visage deviendra parfaitement lisse, radicalement tonifié et éclatant comme le visage d'une jeune fille de 20 ans. Vous vous sentirez comme si vous aviez remonté le temps, vous serez satisfaite de votre apparence et vous vous regarderez dans le miroir avec fierté !</p>
                        </div>
                        <div class="x-infographics-medical-sp  left" style="">
                            <div class="infographics-mobile">

                                <div>


                                    <img class="product_visualization x1   lazy_image" src="<?php echo get_res("form_big/mobile/res/img/ZORAISJOJkxVR4.png"); ?>" alt="img_small_index">

                                </div>

                            </div>
                            <div class="infographics-column">
                                <div style="" class="infographics-box auto">
                                    <img class="infographics-icon lazy_image" src="<?php echo get_res("form_big/mobile/res/img/glebokie_zmarszczki.png"); ?>" style="" alt="">
                                    <div class="infographics-text" style="">
                                        <p>VOUS ELIMINEREZ DES RIDES PROFONDES</p>
                                    </div>
                                    <img class="infographics-img lazy_image" style="" src="<?php echo get_res("form_big/mobile/res/img/arrow_315.png"); ?>" alt="">
                                </div>


                                <div style="" class="infographics-box infographics-box-otherside auto">
                                    <img class="infographics-img lazy_image" style="" src="<?php echo get_res("form_big/mobile/res/img/arrow_225.png"); ?>" alt="">
                                    <div class="infographics-text" style="">
                                        <p>VOUS SUPPRIMEREZ LES RIDES D'EXPRESSION</p>
                                    </div>
                                    <img class="infographics-icon lazy_image" src="<?php echo get_res("form_big/mobile/res/img/zmarszczki_mimiczne.png"); ?>" style="" alt="">
                                </div>

                            </div>

                            <div class="infographics-column">
                                <div style="" class="infographics-box auto">
                                    <img class="infographics-icon lazy_image" src="<?php echo get_res("form_big/mobile/res/img/ujedrnienie_skory.png"); ?>" style="" alt="">
                                    <div class="infographics-text" style="">
                                        <p>VOUS RETENDREZ RADICALEMENT LA PEAU</p>
                                    </div>
                                    <img class="infographics-img lazy_image" style="" src="<?php echo get_res("form_big/mobile/res/img/arrow_0.png"); ?>" alt="">
                                </div>


                                <div class="infographics-img">



                                    <img class="product_visualization x1   lazy_image" src="<?php echo get_res("form_big/mobile/res/img/ZORAISJOJkxVR4.png"); ?>" alt="img_small_index">

                                </div>


                                <div style="" class="infographics-box infographics-box-otherside auto">
                                    <img class="infographics-img lazy_image" style="" src="<?php echo get_res("form_big/mobile/res/img/arrow_180.png"); ?>" alt="">
                                    <div class="infographics-text" style="">
                                        <p>VOUS RETROUVEREZ UNE PEAU ECLAIREE</p>
                                    </div>
                                    <img class="infographics-icon lazy_image" src="<?php echo get_res("form_big/mobile/res/img/swietlista_cera.png"); ?>" style="" alt="">
                                </div>

                            </div>
                            <div class="infographics-column">

                                <div style="" class="infographics-box auto">
                                    <img class="infographics-icon lazy_image" src="<?php echo get_res("form_big/mobile/res/img/plamy_przebrawienia.png"); ?>" style="" alt="">
                                    <div class="infographics-text" style="">
                                        <p>VOUS ELIMINEREZ LES TACHES DE COLORATION</p>
                                    </div>
                                    <img class="infographics-img lazy_image" style="" src="<?php echo get_res("form_big/mobile/res/img/arrow_45.png"); ?>" alt="">
                                </div>


                                <div style="" class="infographics-box infographics-box-otherside auto">
                                    <img class="infographics-img lazy_image" style="" src="<?php echo get_res("form_big/mobile/res/img/arrow_135.png"); ?>" alt="">
                                    <div class="infographics-text" style="">
                                        <p>VOUS SUPPRIMEREZ LES POCHES ET LES CERNES SOUS LES YEUX</p>
                                    </div>
                                    <img class="infographics-icon lazy_image" src="<?php echo get_res("form_big/mobile/res/img/cienie_oczy.png"); ?>" style="" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>Tels sont les résultats obtenus par un groupe de contrôle de 312 000 femmes du monde entier et de différents âges </b>de teint et de types de peau différents. Peu importe que vous ayez 29 ou 89 ans, que votre peau soit sèche et abîmée, ou grasse et sujette aux imperfections – ma formule tropico-dermale Zoraitil restaurera sa douceur, sa fermeté et son parfait éclat.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>Même si vous n'avez jamais utilisé de crèmes et de masques auparavant, même si vous fumez </b>et aimez prendre des bains de soleil, même si vous n'espérez plus de pouvoir un jour retrouver votre beauté d'antan. Sachez qu'en 21 jours, vous éliminerez toutes les rides et vous impressionnerez tout le monde de votre peau rajeunie et idéale, sans aucune imperfection.</p>
                        </div>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: ;">
                            Pourquoi ma formule tropico-dermale est-elle si efficace ?
                        </h2>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>En conséquence à l'action de ma formule tropico-dermale Zoraitil, des processus de régénération complexes se produisent dans la peau. <b>Sans entrer dans les détails, je vais vous expliquer son action en quelques mots simples.</b></p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Vous êtes-vous déjà demandé pourquoi les jeunes n'ont pas à se soucier des rides et que leur peau est toujours ferme, lisse et éclatante ? Tout cela grâce à un processus phénoménal, qui est l'auto-régénération naturelle des cellules.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Sans ce processus, après une blessure mineure, un enfant devrait vivre avec la peau endommagée pour le reste de sa vie. La moindre petite ecchymose qui apparaîtrait sur son corps après avoir joué dans la cour resterait avec lui POUR TOUJOURS. Heureusement, la nature dote les jeunes individus de la capacité de s'auto-régénérer très rapidement : également dans le cas des cellules de la peau. Le problème est que votre corps perd ces capacités avec l'âge. Après l'âge de 60 ans, elles disparaissent presque complètement. Vous avez probablement remarqué que les coupures ordinaires prennent beaucoup plus de temps à guérir que dans votre jeunesse. Il n'est donc pas surprenant que votre peau perde sa douceur naturelle, sa fermeté et son éclat. Des rides, des joues tombantes et des taches de décoloration apparaissent.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>Sur le marché vous pouvez trouver des dizaines de produits censés stimuler l'auto-régénération des cellules de votre peau,</b> qui promettent de restaurer la jeunesse de la peau. Cependant, lorsque vous mettez de la crème sur votre visage, vous n'agissez qu'à la surface de la peau. Pendant ce temps, les processus de régénération se produisent beaucoup plus en profondeur ! Aucune crème ne peut atteindre ces parties de votre peau. <b></b></p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>C'est comme si l'on essayait d'hydrater la peau en versant de l'eau sur le visage. </b>Vous obtiendrez un effet pendant un certain temps, tant qu'il y a encore des particules d'eau sur votre visage. Mais dans un instant, vous verrez que l'état de votre peau ne s'est pas du tout amélioré : votre peau peut même être plus sèche et irritée. Toutes les crèmes et autres produits cosmétiques qui agissent à la surface de votre peau agissent exactement de la même manière.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>La vérité est que vous ne pouvez pas restaurer la jeunesse de votre peau en agissant sur elle de l'extérieur. C'est juste une perte de temps et d'argent. C'est comme si l'on versait de l'eau sur le visage. <b>Pour retrouver un teint jeune, lisse et éclatant, il est nécessaire de restaurer la capacité naturelle de la peau à s'auto-régénérer : agir de l'intérieur – dans les parties les plus profondes de la peau. </b></p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>Et voici comment fonctionne ma formule tropico-dermale Zoraitil.</b> Grâce à la combinaison unique d'ingrédients actifs, elle stimule chaque cellule de votre peau à s'auto-régénérer. Voilà pourquoi vous n'avez plus à vous soucier des rides, du relâchement cutané du visage, du cou et du décolleté, des veines éclatées ou de la décoloration.</p>
                        </div>
                        <div class="x-before_after_one_photo-medical-sp  left">
                            <div class="before_after_one_photo-row">


                                <img src="<?php echo get_res("form_big/mobile/res/img/rsz_grafika_before-after_v1.jpg"); ?>" class="before_after_one_photo-img">


                            </div>
                            <div class="before_after_one_photo-row">
                                <div class="before_after_one_photo-title before_after_one_photo-title-before">
                                    <p>AVANT</p>
                                </div>
                                <div class="before_after_one_photo-title before_after_one_photo-title-after">
                                    <p>APRÈS</p>
                                </div>
                            </div>
                            <div class="before_after_one_photo-row">
                                <div class="before_after_one_photo-text">
                                    <p>Peau incapable de s'auto-régénérer, couverte de rides, manquant de fermeté et d'éclat</p>
                                </div>
                                <div class="before_after_one_photo-text">
                                    <p>Peau constamment stimulée à s'auto-régénérer, parfaitement lisse, ferme et éclatante</p>
                                </div>
                            </div>
                        </div>

                        <h4 class="x-h4-medical-sp
  center" style="font-weight: ; background: green; color: #FFFFFF;">
                            ELLE EST 100 % SÛRE ET SON UTILISATION EST D'UNE SIMPLICITÉ ENFANTINE
                        </h4>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>La composition révolutionnaire de ma formule permet d'éliminer même les cicatrices</b> (comme dans le cas de mon épouse) ainsi que les rides profondes et les défauts cutanés pour lesquels il n'y avait aucun conseil autre qu'une chirurgie plastique. Voilà pourquoi ma formule tropico-dermale Zoraitil a été saluée comme "l'élixir de jouvence japonais" et j'ai reçu le prix Confucius (équivalent asiatique du prix Nobel) dans le domaine de la dermatologie pour ma découverte.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>Cependant, la récompense la plus précieuse pour moi sont les milliers de lettres du monde entier</b> que je reçois de femmes qui ont déjà utilisé ma formule tropico-dermale Zoraitil. Elles y racontent les histoires incroyables de leur métamorphoses et écrivent comment le traitement a changé leur vie en mieux. Je me permets de vous citer (bien sûr sous la permission de l'auteure) la lettre de madame Hélène de Suisse qui a testé ma formule comme l'une des volontaires. Madame Hélène a écrit :</p>
                        </div>
                        <div style="background: " class="x-testimonial-medical-sp border-default">



                            <noscript>
                                <img class="img" src="<?php echo get_res("form_big/mobile/res/img/zdjecie_duzy_testymonial_before-after_SP_V1.jpg"); ?>" alt="">
                            </noscript>

                            <img class="lazy_image img image-img" src="<?php echo get_res("form_big/mobile/res/img/zdjecie_duzy_testymonial_before-after_SP_V1.jpg"); ?>" alt="">



                            <div class="title" style="color:"></div>
                            <div class="text">
                                <p>− Ce traitement a changé ma vie ! Auparavant, je me sentais comme une vieillarde. Des rides profondes, les poches sous les yeux, des taches horribles parsemant toute ma peau. Je n'avais pas envie de sortir et me montrer aux gens. Les enfants dans la cour m'appelaient « vieille sorcière ». <b>Alors que 21 jours du traitement du Dr Sakura ont suffi pour que j'aie une peau si lisse qu'il y a 30 ans. </b>Soudain, les hommes me remarquent dans la rue. Jusqu'à ce que mon mari devienne jaloux et cherche à me conquérir comme dans la jeunesse. Si je n'avais pas profité de ce traitement, j'aurais commis l'erreur de la vie. Je voudrais ici vous remercier cordialement, Monsieur le Docteur et vous souhaiter plein de succès dans votre travail !</p>
                            </div>
                            <div class="stars">
                                <img src="<?php echo get_res("form_big/mobile/res/img/star-gold.png"); ?>" class="star">
                                <img src="<?php echo get_res("form_big/mobile/res/img/star-gold.png"); ?>" class="star">
                                <img src="<?php echo get_res("form_big/mobile/res/img/star-gold.png"); ?>" class="star">
                                <img src="<?php echo get_res("form_big/mobile/res/img/star-gold.png"); ?>" class="star">
                                <img src="<?php echo get_res("form_big/mobile/res/img/star-gold.png"); ?>" class="star">
                            </div>
                            <div class="signature"></div>
                        </div>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: 700;">
                            Vous ne risquez rien !
                        </h2>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>La formule tropico-dermale Zoraitil a déjà aidé des milliers de femmes à se libérer des rides disgracieuses et à restaurer une fois pour toutes la jeunesse de leur peau. Il s'agit d'une découverte à l'échelle mondiale à l'efficacité prouvée, qui a reçu la prestigieuse garantie triple satisfaction : originalité, qualité et satisfaction.</p>
                        </div>

                        <h4 class="x-h4-medical-sp
  center" style="font-weight: ; background: green; color: #FFFFFF;">
                            Garantie triple satisfaction
                        </h4>
                        <div class="x-gps-medical-sp ">
                            <div class="gps_img">



                                <noscript>
                                    <img class="gps_img-img" src="<?php echo get_res("form_big/mobile/res/img/fr_gps_quality.png"); ?>" alt="">
                                </noscript>

                                <img class="gps_img-img lazy_image" src="<?php echo get_res("form_big/mobile/res/img/fr_gps_quality.png"); ?>" alt="">





                                <noscript>
                                    <img class="gps_img-img" src="<?php echo get_res("form_big/mobile/res/img/fr_gps_original.png"); ?>" alt="">
                                </noscript>

                                <img class="gps_img-img lazy_image" src="<?php echo get_res("form_big/mobile/res/img/fr_gps_original.png"); ?>" alt="">





                                <noscript>
                                    <img class="gps_img-img" src="<?php echo get_res("form_big/mobile/res/img/fr_gps_diamond.png"); ?>" alt="">
                                </noscript>

                                <img class="gps_img-img lazy_image" src="<?php echo get_res("form_big/mobile/res/img/fr_gps_diamond.png"); ?>" alt="">



                            </div>
                            <div class="gps_text">
                                <article>
                                    <div class="gps_text-title">
                                        <p>Garantie d'originalité</p>
                                    </div>
                                    <div class="gps_text-text">
                                        <p>Vous pouvez être sûr que vous obtiendrez le produit original. Disponible uniquement via notre site.</p>
                                    </div>
                                </article>
                                <article>
                                    <div class="gps_text-title">
                                        <p>Garantie de qualité</p>
                                    </div>
                                    <div class="gps_text-text">
                                        <p>la pureté des ingrédients actifs de Zoraitil est conforme aux plus hauts standards de qualité. Tout cela afin que ses effets répondent à 100 % à vos attentes.</p>
                                    </div>
                                </article>
                                <article>
                                    <div class="gps_text-title">
                                        <p>Garantie de satisfaction</p>
                                    </div>
                                    <div class="gps_text-text">
                                        <p>de nombreux tests de consommateurs confirment la haute efficacité deZoraitil</p>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <div class="x-sticky_bar_4-on-medical-sp  sticky_bar">
                            <div class="b4 fly-box">
                                <div class="box">
                                    <span class="ico"></span>
                                    <p>
                                    <p>Excellente occasion d'aujourd'hui 254 CHF 129 CHF</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="sticky_bar4-on"></div>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: ;">
                            ATTENTION aux contrefaçons !
                        </h2>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Peu de temps après la sortie de ma formule tropico-dermale Zoraitil, le marché a été littéralement inondé de divers produits qui l'imitent. Ne soyez pas dupe ! <b>Utiliser des produits de contrefaçon non vérifiés non seulement ne vous aidera pas à vous débarrasser des imperfections cutanées, mais peut également être dangereux pour votre santé ! </b></p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>La composition de ma formule a été élaborée avec le plus grand soin. Par conséquent, si vous voulez être sûr à 100 % que vous vous débarrasserez des rides en 21 jours – <b>n'achetez pas des contrefaçons. </b></p>
                        </div>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: ;">
                            Maintenant vous aussi pouvez retrouver une peau douce comme la soie, ferme et éclatant en 21 jours
                        </h2>
                        <div class="x-sticky_bar_5-on-medical-sp  sticky_bar5-on sticky_bar">
                            <div class="b5 fly-box">
                                <div class="box">
                                    <span class="ico"></span>
                                    <p>Produit fréquemment commandé ! Dernières pièces</p>
                                </div>
                            </div>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Ne laissez personne vous convaincre que vous avez besoin de toute une étagère de crèmes différentes pour vous débarrasser des rides. Ou pire – que vous devez exposer votre visage au scalpel d'un chirurgien. <b>Sachez que vous pouvez dès maintenant vous débarrasser de 98,9 % de toutes les rides</b> imperfections et décolorations, ainsi que redonner à votre peau une douceur parfaite, fermeté et éclat.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>De grandes entreprises cosmétiques se battent littéralement pour le brevet de ma formule tropico-dermale Zoraitil. On m'a proposé des contrats valant des millions, mais ce n'est pas pour cela que j'ai créé la formule. Mon objectif est de libérer le plus de femmes possible des imperfections cutanées disgracieuses qui volent leur confiance et les isolent de leurs proches. <b>Je veux que chaque femme soit fière de sa beauté</b> – tout comme ma femme.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>J'ai mis tout en œuvre pour que ma formule tropico-dermale Zoraitil soit disponible dans le monde entier dans les plus brefs délais. Enfin, je suis fier de pouvoir vous annoncer que <b>désormais chaque femme peut en profiter et redonner à sa peau une douceur parfaite en 21 jours. </b></p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>C'est pourquoi je vous encourage à saisir cette opportunité ! Pour obtenir la formule tropico-dermale Zoraitil, vous n'avez pas besoin d'envoyer d'argent en ligne ni de payer par carte. Il vous suffit de remplir un formulaire en 2 minutes et, après quelques jours seulement, vous recevrez un colis que vous réglerez tranquillement auprès du coursier ou du facteur.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Merci d'avoir lu mon histoire. J'espère qu'un jour, vous vous remémorerez ce jour avec le sourire et que vous vous direz "c'est le jour qui a changé ma vie".</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Je vous salue chaleureusement !</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: right; ">
                            <p>dr Kenzo Sakura</p>
                        </div>
                        <div class="x-testimonial-slider_mobile-medical " style="text-align:left">
                            <div class="slider">
                                <div class="slides">
                                    <div class="slide flex flex-column">
                                        <div class="slide-image">


                                            <noscript>
                                                <img src="<?php echo get_res("form_big/mobile/res/img/testymonial_1_SP_V1.jpg"); ?>" alt="">
                                            </noscript>

                                            <img class="lazy_image" src="<?php echo get_res("form_big/mobile/res/img/testymonial_1_SP_V1.jpg"); ?>" alt="">



                                        </div>
                                        <div class="slide-text">
                                            <div class="headline">
                                                <p><b>J'ai l'air de 20 ans plus jeune!</b></p>
                                            </div>
                                            <div class="text">
                                                <p>Ce traitement fait des miracles ! Je ne pouvais plus me regarder dans le miroir. Je ne suis pas encore si vieille et j'avais l'impression que la vie m'avait littéralement maltraitée... et la peau de mon cou ?! Mieux vaut ne pas en parler. Comme chez le dindon. Une fois, je me suis confiée à ma cousine sur mon problème et elle m'a recommandé cette formule. Il n'a pas fallu longtemps pour me convaincre. J'en ai profité - et je n'arrivais pas à croire mes yeux. <b>Les rides disparaissaient comme si j'utilisais une sorte de potion magique.</b> Après presque 3 semaines, il n'y en a eu plus rien. Et mon cou est devenu ferme et lisse comme si toute cette peau superflue avait été absorbée. Récemment, quand je voulais m'acheter du vin pour le dîner, la caissière m'a demandé de lui montrer ma carte d'identité. Je dois l'avouer - c'est formidable. Je recommande à chaque femme !</p>
                                            </div>
                                            <span class="rating" title="Ocena">
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                            </span>
                                            <div class="sign">
                                                <p><b>Marie-Anne, 46 ans, Coire</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide flex flex-column">
                                        <div class="slide-image">


                                            <noscript>
                                                <img src="<?php echo get_res("form_big/mobile/res/img/testymonial_6_SP_V1.jpg"); ?>" alt="">
                                            </noscript>

                                            <img class="lazy_image" src="<?php echo get_res("form_big/mobile/res/img/testymonial_6_SP_V1.jpg"); ?>" alt="">



                                        </div>
                                        <div class="slide-text">
                                            <div class="headline">
                                                <p><b> Rapide et efficace</b></p>
                                            </div>
                                            <div class="text">
                                                <p>Je ne crois pas à n'importe quoi et je dois tout vérifier par moi-même. Toutes mes voisines ont sans cesse parlé de ce traitement, que c'était "un secret de jeunesse du Japon" – Je ne le croirai pas avant de voir de mes propres yeux ! – disais-je et je l'ai essayé. Et donc, je l'ai bien vu ! Je suis après deuxième semaine du traitement. J'ai la peau douce, comme si quelqu'un avait littéralement repassé ces rides.<b> L'horrible sillon entre les sourcils et les rides aux coins des yeux et autour de la bouche ont disparu. </b> J'ai l'impression comme si je rajeunissais chaque jour. Si ça continue comme ça, mon mari ne me connaîtra pas un jour quand il rentrera à la maison. Je recommande !</p>
                                            </div>
                                            <span class="rating" title="Ocena">
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                            </span>
                                            <div class="sign">
                                                <p><b>Dorothée, 76 ans, Bienne</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide flex flex-column">
                                        <div class="slide-image">


                                            <noscript>
                                                <img src="<?php echo get_res("form_big/mobile/res/img/testymonial_3_SP_V1.jpg"); ?>" alt="">
                                            </noscript>

                                            <img class="lazy_image" src="<?php echo get_res("form_big/mobile/res/img/testymonial_3_SP_V1.jpg"); ?>" alt="">



                                        </div>
                                        <div class="slide-text">
                                            <div class="headline">
                                                <p><b>La seule méthode qui marche</b></p>
                                            </div>
                                            <div class="text">
                                                <p>Une fois, mon petit-fils m'a dit - Mammy, tu ressembles à une vieille tortue ridée. C'est évident que c'est un enfant et il ne sait pas encore qu'on ne dit pas de telles choses. Mais à ce moment-là, je me suis dit que je devais prendre soin de moi. J'avais essayé différents produits, qui étaient censés éliminer les rides mais ils n'avaient rien fait même s'ils coûtaient une fortune. Enfin, j'ai trouvé cette formule. J'ai pensé que ça valait la peine de l'essayer comme son auteur était un docteur si reconnu. Et ça valait bien la peine ! Maintenant, je me sens comme si l'on m'avait redonné ma jeunesse. <b>Toutes les rides ont disparu et la peau est devenue agréable au toucher, lisse, en un mot, jeune.</b> Merci !</p>
                                            </div>
                                            <span class="rating" title="Ocena">
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                            </span>
                                            <div class="sign">
                                                <p><b>Françoise, 73 ans, Lancy</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide flex flex-column">
                                        <div class="slide-image">


                                            <noscript>
                                                <img src="<?php echo get_res("form_big/mobile/res/img/testymonial_4_SP_V1_1.jpg"); ?>" alt="">
                                            </noscript>

                                            <img class="lazy_image" src="<?php echo get_res("form_big/mobile/res/img/testymonial_4_SP_V1_1.jpg"); ?>" alt="">



                                        </div>
                                        <div class="slide-text">
                                            <div class="headline">
                                                <p><b>C'est la chance pour une nouvelle vie pour moi !</b></p>
                                            </div>
                                            <div class="text">
                                                <p>Après le divorce, je me suis négligée et j'ai arrêté de prendre soin de moi. Mais après quelque temps, j'ai voulu rencontrer un homme et me donner une chance d'être heureuse. J'ai rencontré un homme sur un site de rencontre. Nous nous écrivions beaucoup et je pensais que nous nous comprenions bien. Cependant, lorsque nous nous sommes rencontrés "en direct" dans un restaurant, il s'est échappé alors que j'étais aux toilettes. J'ai pleuré dans mon oreiller, mais j'ai ensuite décidé d'agir. Une amie du travail recommandait fortement cette formule, alors j'ai risqué le coup. Et après 21 jours, je peux à peine me reconnaître dans le miroir ! <b>Ma peau est devenue comme la soie - lisse, douce, tout simplement belle. </b>À présent, je sors avec un homme exceptionnel et je me sens heureuse.</p>
                                            </div>
                                            <span class="rating" title="Ocena">
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                            </span>
                                            <div class="sign">
                                                <p><b>Christelle, 56 ans, Yverdon-les-Bains</b></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide flex flex-column">
                                        <div class="slide-image">


                                            <noscript>
                                                <img src="<?php echo get_res("form_big/mobile/res/img/testymonial_5_SP_V1.jpg"); ?>" alt="">
                                            </noscript>

                                            <img class="lazy_image" src="<?php echo get_res("form_big/mobile/res/img/testymonial_5_SP_V1.jpg"); ?>" alt="">



                                        </div>
                                        <div class="slide-text">
                                            <div class="headline">
                                                <p><b>Un moyen naturel contre les imperfections</b></p>
                                            </div>
                                            <div class="text">
                                                <p>Ma peau pourrait servir pour un détecteur de la chimie dans les produits de beauté. Car si une crème ou un gel a de mauvais ingrédients dans sa composition, elle devient tout de suite rougie, rugueuse et sèche. J'ai opté pour ce traitement pour me débarrasser des cicatrices d'acné, qui me défiguraient terriblement le visage. Toutefois, j'avais peur qu'étant donné que c'était une formule si forte qu'elle enlève les cicatrices, cela puisse irriter mon organisme. Mais c'en était pas le cas ! <b>A</b>près moins d'un mois, toutes les cicatrices ont disparu !</p>
                                            </div>
                                            <span class="rating" title="Ocena">
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                                <span class="yellowstar">★</span>
                                            </span>
                                            <div class="sign">
                                                <p><b>Delphine, 35 ans, Meyrin</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-buttons">
                                </div>
                            </div>
                        </div>
                        <script>
                            $(document).on('ready', function() {
                                $(".x-testimonial-slider_mobile-medical").each(function() {
                                    $(this).find('.slides').slick({
                                        dots: false,
                                        appendArrows: '.slide-buttons',
                                        nextArrow: '<a class="slide-next"><i></i></a>',
                                        prevArrow: '<a class="slide-back"><i></i></a>'
                                    });
                                });
                            })
                        </script>
                        <div class="x-sticky_bar_6-on-medical-sp  sticky_bar_6">
                            <div class="b6 fly-box">
                                <div class="box">
                                    <span class="ico"></span>
                                    <div class="text">LA PROMOTION S’ACHÈVE DANS :
                                        <span class="b6_counter">03:00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="b7 fly-box">
                                <div class="box">
                                    <span class="ico"></span>
                                    <div>
                                        <div class="text blink">DERNIÈRE CHANCE POUR LE FINANCEMENT !!!</div>
                                    </div>
                                </div>
                                <div class="cta_fly">Cliquez ici pour obtenir</div>
                            </div>
                        </div>

                        <div class="sticky_bar6-on"></div>

                    </div>

                    <div class="container__offer">
                        <div class="x-offer_mobile-medical-sp left ">

                            <div class="offer_mobile-counter">
                                <div class="offer_mobile-counterText">
                                    Nombre de pièces disponibles dans le lot actuel (500) :
                                </div>
                                <span class="offer_mobile-number">
                                    0 </span>
                                <span class="offer_mobile-number">
                                    1 </span>
                                <span class="offer_mobile-number">
                                    3 </span>
                            </div>

                            <div class="offer_mobile-title">
                                <p>OBTENEZ <span style="color: green;">Zoraitil</span> EN 2 ÉTAPES SIMPLES</p>
                            </div>




                            <div class="text top_text"><strong>OUI !</strong> Je souhaite recevoir Zoraitil pour la participation au Club Réductions. Cela signifie que mon choix est totalement sécurisé, car le produit est couvert par la garantie triple satisfaction. Le colis me sera livré par la poste ou par coursier dans les prochains jours sans frais supplémentaires.</div>




                            <article style="">



                                <img class="product_visualization x1   lazy_image" src="<?php echo get_res("form_big/mobile/res/img/ZORAISJOJkxVR4.png"); ?>" alt="img_small_index">

                                <div class="offer_mobile-price">
                                    <div class="offer_mobile-price1">
                                        <p>254</p>
                                    </div>
                                    <div class="offer_mobile-price2">
                                        <p>129CHF</p>
                                    </div>
                                </div>
                            </article>

                        </div>


                    </div>

                    <div class="container__form" id="form_anh">
                        <div class="x-form_d1m2-medical-sp">



                            <div class="form" id="form">

                                <h2>FORMULAIRE DE COMMANDE</h2>
                                <link rel="stylesheet" href="<?php echo get_res("form_big/mobile/res/css/mobileForm.css"); ?>" media="none" onload="if(media!='all')media='all'" />

                                <div class="safety-icons">
                                    <img class="lazy_image" src="<?php echo get_res("form_big/mobile/res/img/ico1.png"); ?>" />
                                    <img class="lazy_image" src="<?php echo get_res("form_big/mobile/res/img/ico2.png"); ?>" />
                                    <img class="lazy_image" src="<?php echo get_res("form_big/mobile/res/img/ico3.png"); ?>" />
                                </div>
                                <div class="steps flex flex-row space-beetween">
                                    <div class="one active flex flex-column">
                                        <div class="text"><span>Étape 1</span>Vos données</div>
                                        <div class="pointer"></div>
                                    </div>
                                    <div class="line line1 dotted"></div>
                                    <div class="two flex flex-column">
                                        <div class="text"><span>Étape 2</span>Dernière étape</div>
                                        <div class="pointer"></div>
                                    </div>
                                </div>
                                <form action="" class="form_mobile_wrapper_19990516" method="POST" data-ajax="false" id="form-mobile" onsubmit="return checkLastStep();" novalidate><input type="hidden" name="action" value="<?php echo htmlspecialchars($current_site) ?>">
                                    <div class="step1">
                                        <div class="input-box">
                                            <div class="floatingSpan"><input id="name" type="text" name="name" data-role="none" placeholder=" " value="<?php echo htmlspecialchars((isset($_POST[" name"]) ? $_POST["name"] : $order["name"])); ?>">
                                                <span class="floating-label">Prénom</span> <span class="error-text">Le champ ne peut pas être vide</span>
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <div class="floatingSpan"><input data-role="none" placeholder=" " id="surname" type="text" name="surname" value="<?php echo htmlspecialchars((isset($_POST[" surname"]) ? $_POST["surname"] : $order["surname"]));
                                                                                                                                                                ?>">
                                                <span class="floating-label">Nom</span> <span class="error-text">Le champ ne peut pas être vide</span>
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <div class="floatingSpan"><input data-role="none" placeholder=" " id="phone" type="tel" name="phone" value="<?php echo htmlspecialchars((isset($_POST[" phone"]) ? $_POST["phone"] : $order["phone"])); ?>">
                                                <span class="floating-label">Téléphone</span> <span class="error-text">Le champ ne peut pas être vide</span>
                                            </div>
                                        </div>
                                        <button type="button" id="hideTextOnB7" class="toStep2">Étape suivante
                                        </button>

                                        <span class="info">Étape suivante <strong>DONNÉES D'ADRESSE</strong></span>
                                    </div>
                                    <div class="step2">
                                        <div class="input-box">
                                            <div class="floatingSpan"><input data-role="none" placeholder=" " type="email" id="email" name="email" value="<?php echo htmlspecialchars((isset($_POST[" email"]) ? $_POST["email"] : $order["email"])); ?>">
                                                <span class="floating-label">Entrez votre adresse e-mail</span> <span class="error-text">Le champ ne peut pas être vide</span>
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <div class="floatingSpan"><input data-role="none" placeholder=" " id="street" type="text" name="street"> <span class="floating-label">Rue</span>
                                                <span class="error-text">Le champ ne peut pas être vide</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-row">
                                            <div class="input-box floatingSpan"><input data-role="none" placeholder=" " id="street_nr" type="text" name="street_nr"> <span class="floating-label">N° d'immeuble</span> <span class="error-text">Le champ ne peut pas être vide</span>
                                            </div>
                                            <div class="input-box floatingSpan"><input data-role="none" placeholder=" " id="home_nr" type="text" name="home_nr"> <span class="floating-label nr_home">N° d'appartement</span>
                                            </div>
                                        </div>
                                        <div class="input-box floatingSpan"><input data-role="none" placeholder=" " name="pcode" id="pcode" type="text">
                                            <span class="floating-label">Code postal</span> <span class="error-text">Le champ ne peut pas être vide</span>
                                        </div>
                                        <div class="input-box floatingSpan"><input data-role="none" placeholder=" " id="city" type="text" name="city" value="<?php echo htmlspecialchars((isset($_POST[" city"]) ? $_POST["city"] : $order["city"])); ?>">
                                            <span class="floating-label">Ville</span> <span class="error-text">Le champ ne peut pas être vide</span>
                                        </div>
                                        <div class="input-box">
                                            <p>Pays</p> <select data-role="none" name="country" id="country">
                                                <option value="DE">Allemagne</option>
                                                <option value="AT">Autriche</option>
                                                <option value="FR">France</option>
                                                <option value="RO">Roumanie</option>
                                                <option value="CH" selected="selected">Suisse</option>
                                            </select>
                                        </div>

                                        <div class="input-box">
                                            <p>Informations pour la livraison</p>
                                            <input type="text" name="note2">
                                        </div>
                                        <input type="hidden" name="address" id="address" value="<?php echo htmlspecialchars((isset($_POST[" address"]) ?
                                                                                                    $_POST["address"] : $order["address"])); ?>">
                                        <input type="hidden" name="note" id="note" value="">
                                        <div class="input-box checkbox" id="coddiv">
                                            <p>Mode de paiement: </p>
                                            <div>
                                                <input type="checkbox" value="1" name="pay_on_delivery" id="codinp">
                                                <label for="codinp">Cochez cette case si vous souhaitez payer à la livraison Si vous ne cochez pas cette case, il vous sera demandé d'effectuer le paiement à la prochaine étape.</label>

                                            </div>
                                        </div>
                                        <button id="last_button" type="submit">Cliquez ici, pour recevoir Zoraitil</button>
                                    </div>
                                </form>
                                <script src="<?php echo get_res("form_big/mobile/res/js/validation.js"); ?>" async></script>
                                <script src="<?php echo get_res("form_big/mobile/res/js/form_doubleStep.js"); ?>" async></script>
                            </div>





                        </div>


                    </div>

                </div>
                <div class="container__wrapper--right">

                    <div class="container__wrapper--sidebar desktop">

                    </div>

                </div>
            </div>

            <div class="container__footer">
                <div class="copyright">
                    <p>Copyright © 2005-2021.</p>
                    <p>All rights Reserved.</p>
                </div>


                <style>
                    .copyright {
                        font-family: 'Roboto';
                        direction: ltr;
                        width: 100%;
                        color: #aaa;
                        font-size: 12px;
                        font-weight: 400;
                        line-height: 15px;
                        text-align: center;
                        margin: 0 auto;
                        padding: 20px;
                    }
                </style>


                <div class="x-footer_links-medical-sp ">



                    <div class="footer__links">

                        <a class="footer__links--link" target="_blank" href="?site=privacy" rel="noopener noreferrer" title="Politique de Confidentialité">Politique de Confidentialité</a>



                        <a class="footer__links--link" target="_blank" href="?site=voucher" rel="noopener noreferrer" title="Règlement - Club Réductions">Règlement - Club Réductions</a>
                        <a class="footer__links--link" target="_blank" href="?site=gift" rel="noopener noreferrer" title="Règlement - Cadeau pour le Bon">Règlement - Cadeau pour le Bon</a>



                        <a class="footer__links--link" target="_blank" href="?site=contact" rel="noopener noreferrer" title="Nous écrire">Nous écrire</a>




                        <a class="footer__links--link" target="_blank" href="?site=information_affiliates_en" rel="noopener noreferrer" title="Information for affiliates">Information for affiliates</a>

                    </div>


                </div>

                <div class="x-footer_text-medical-sp footer_text ">


                    <div class="FooterDisclaimer">
                        <p>
                            Le produit décrit est un supplément alimentaire et il ne doit pas être utilisé pour poser un diagnostic médical, restaurer, corriger ou modifier des fonctions organiques par une action pharmacologique, immunologique ou métabolique.
                            <a target="_blank" href="?site=disclaimer">Informations</a>
                        </p>
                    </div>

                </div>
                <div class="x-bibliography-medical-sp ">



                </div>

                <script>
                    $(document).on('ready', function() {
                        $(".x-bibliography-medical-sp").each(function() {
                            $(this).bibliography();
                        });
                    })
                </script>
            </div>

        </div>

    </div>

    <script src="<?php echo get_res("form_big/mobile/res/js/form_big_1.js"); ?>"></script>
    <script src="<?php echo get_res("form_big/mobile/res/js/form_big_2.js"); ?>"></script>
    <script src="<?php echo get_res("form_big/mobile/res/js/form_big_3.js"); ?>"></script>

</body>

</html>