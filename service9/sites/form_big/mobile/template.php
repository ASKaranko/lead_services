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
                            Voici le r??sultat du traitement auquel est parvenue mon ??pouse. Son visage ??tait d??form?? par des cicatrices profondes ... donc vos rides et vos imperfections dispara??tront encore plus vite !
                        </h2>
                        <div class="x-profesor_box-medical-sp left ">
                            <img style="float:right;
  margin-right" class="img right" src="<?php echo get_res("form_big/mobile/res/img/zdjecie_Sakura_SP_V1.jpg"); ?>" alt="">
                            <div class="text">
                                <p>Bonjour !</p>
                                <p>Je m'appelle Kenzo Sakura et je suis un scientifique, l'expert en chef dans le domaine de la g??n??tique mol??culaire ?? l'Institut de Biotechnologie de Tokyo (Japon). Il y a un an, j'ai invent?? une formule de lifting tropico-dermale facile ?? appliquer et super-efficace. Gr??ce ?? elle <b>d??j?? 312 000 de participants volontaires (y compris ma femme bien-aim??e) se sont une fois pour toutes lib??r??es de toues les imperfections cutan??es</b> (rides, rel??chement cutan??, marques de cicatrice, varicosit??s, taches, cernes et poches sous les yeux ainsie que de 31 autres types d'imperfection).</p>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: ;">
                            Ainsi, si vous en avez d??j?? assez de :
                        </h2>
                        <ul class="x-ul_list-medical-sp
left">
                            <li>
                                <p><b>observer sans pouvoir agir comment vos rides se multiplient chaque ann??e</b>??? et vous vous rappelez avec nostalgie et amertume les moments o?? vous voyiez un visage jeune, lisse et radieux dans le miroir ;</p>
                            </li>
                            <li>
                                <p><b>appliquer une couche ??paisse de maquillage </b>??? pour cacher les rides, les cernes et les poches sous les yeux ainsi qu'une teinte grise de la peau ;</p>
                            </li>
                            <li>
                                <p><b>d??penser de l'argent pour des dizaines de produits cosm??tiques inefficaces</b> ??? parce que les publicit??s vous disent que vous avez besoin d'une cr??me diff??rente pour le jour, une autre pour la nuit, une autre pour les rides, une autre pour les yeux et ainsi de suite ?? l'infini...</p>
                            </li>
                        </ul>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: ;">
                            Assurez-vous de lire le message que je veux vous transmettre...
                        </h2>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>D??sormais, vous pouvez ??liminer toutes vos rides facilement, rapidement et avec discr??tion. <b>Figurez-vous que bient??t, vous redonnerez une apparence jeune ?? votre peau sans m??me quitter votre salle de bain.</b>Sans d??penser de l'argent pour des produits de beaut?? inefficaces, sans gaspiller du temps pour analyser les listes d'ingr??dients, sans exposer votre visage au scalpel.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>C'est possible parce que j'ai invent?? la formule tropico-dermale r??volutionnaire qui <b>rajeunit la peau de 15, 20 et m??me de 25 ans.</b>Gr??ce ?? cela, elle lisse toutes les rides et ??limine les imperfections de la peau et, par cons??quent, redonne une apparence belle, jeune et saine au visage pour toujours.</p>
                        </div>
                        <div class="x-sticky_bar_2-on-medical-sp  sticky_bar">
                            <div class="b2 fly-box">
                                <div class="box">
                                    <span class="ico"></span>
                                    <p>23
                                        Personnes ayant effectu?? un achat aujourd'hui</p>
                                </div>
                            </div>
                        </div>
                        <div class="sticky_bar2-on"></div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Tout a commenc?? par un ??v??nement tragique suite auquel...</p>
                        </div>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: ;">
                            Ma femme a fr??l?? la mort
                        </h2>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Ce jour-l??, j'ai achet?? ?? ma femme Michiko des roses rouges. ??? C'est pour quelle occasion ? ??? elle riait toute surprise ??? Je ne peux pas offrir des fleurs ?? ma femme sans occasion ? ??? je lui ai r??pondu et j'ai embrass?? son front. Michiko vaut toutes les fleurs du monde. Cette femme est un tr??sor. Toujours souriante, chaleureuse, compr??hensive. La meilleure m??re pour notre fille Yumi ??g??e de 5 ans.</p>
                        </div>

                        <div class="x-image-medical-sp lazy position-left  left">





                            <noscript>
                                <img style="" class="image-img " src="<?php echo get_res("form_big/mobile/res/img/hhh.png"); ?>" />
                            </noscript>

                            <img style="" class="image-img lazy_image " src="<?php echo get_res("form_big/mobile/res/img/hhh.png"); ?>" />


                            <div class="text-container">
                                <div style="text-align: center;">
                                    <p>Michiko et Yumi pendant un moment d'insouciance, un jour avant l'??v??nement qui a transform?? la vie de notre famille en cauchemar</p>
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
                            <p>Un instant plus tard, nous nous sommes dit au revoir car je devais aller ?? une r??union. J'ai regard?? ma femme alors qu'elle marchait joyeusement dans la rue. Et soudain, 2 hommes cagoul??s sont apparus devant elle.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Tout s'est pass?? si vite. L'un des hommes voulait voler le sac ?? main de Michiko. Mon ??pouse a essay?? de se d??fendre. J'ai vu un couteau scintiller.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Quand je suis arriv??, les hommes ??taient partis et ma femme ??tait allong??e sur le trottoir. Son visage ??tait couvert de sang. Une foule de personnes s'est rassembl??e autour d'elle. Des p??tales de roses rouge flottaient dans l'air...</p>
                        </div>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: 700;">
                            Ce diagnostic ??tait pour elle comme un coup de gr??ce
                        </h2>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>??? Je vais ??tre honn??te ??? votre femme s'en sortira mais il y aura de profondes cicatrices sur son visage ??? a d??clar?? le m??decin sans ambages lorsque nous sommes arriv??s ?? l'h??pital. Si le couteau de l'agresseur s'??tait gliss?? un centim??tre plus loin dans son visage, elle serait morte.</p>
                        </div>
                        <h5 class="x-h5-medical-sp
  left" style="font-weight: ; color: #000000;">
                            Les voyous ont d??figur?? le visage de mon ??pouse en plein jour. Et pourquoi ? Pour lui voler une somme d'argent insuffisante m??me pour acheter un paquet de cigarettes.
                        </h5>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>??? Que valent les cicatrices ! Le plus important c'est que Michiko est sauve et saine - ai-je pens?? tout na??vement en allant ?? sa salle.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Lorsque je suis entr?? ?? sa chambre, j'ai vu ma femme toute en larmes. Michiko pouvait ?? peine parler. Apr??s chaque mot prononc??, son visage ??tait tordu d'une douleur atroce.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>??? As-tu entendu ? Je serai comme un monstre d'un cauchemar jusqu'?? la fin de ma vie ! ??? a-t-elle murmur?? toute tremblante. Je l'ai serr??e alors fort dans mes bras et j'ai lui ai dit quelques mots d'encouragement pour la rassurer.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b> Cependant, quand j'ai quitt?? la chambre de ma femme, quelque chose a ??clat?? en moi.</b> Je me suis effondr?? involontairement sur la chaise du couloir et j'ai commenc?? ?? sangloter comme un petit enfant. Ce furent les larmes de la col??re et de l'impuissance. Elle ne le m??ritait pas ! Alors que moi, je n'ai pu rien faire pour l'aider...</p>
                        </div>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: ;">
                            ??? Je suis un monstre ! ??? a-t-elle cri?? les larmes aux yeux
                        </h2>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Michiko est rentr??e ?? la maison toute couverte de bandages. Les plaies ont gu??ri pendant plusieurs mois et ??? comme le m??decin l'avait pr??dit ??? elles ont laiss?? des cicatrices. Mon ??pouse voulait ??tre courageuse. Elle essayait de maquiller les cicatrices, elle appliquait ??galement des cr??mes et des pommades de toutes sortes que je lui proposais. Cependant, les cicatrices ??taient toujours visibles.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Une nuit, j'ai ??t?? r??veill?? par le cri de notre fille. Je me suis vite lev?? et j'ai couru dans sa chambre. J'ai vu une image d??chirante. Ma femme essayait de calmer notre fille en sanglots mais elle se d??battait de toute ses forces. <b>??? Laisse-moi, le monstre ! </b>??? criait la fillette. Il s'est par la suite av??r?? que la fille avait fait un cauchemar mais quand elle a vu sa m??re, elle s'est effray??e davantage. Le visage cicatris?? de ma femme a rendu notre petite fille hyst??rique.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Depuis ce temps-l??, ma femme s'est compl??tement renferm??e sur elle-m??me. D??courag??e, elle a cess?? de prendre soin d'elle-m??me, elle a cach?? tous les miroirs dans la maison pour pouvoir ne pas voir son reflet. Parfois, quand je rentrais, elle restait assise sur le canap?? avec un regard vide fix?? sur le mur devant elle. <b> J'ai observ?? avec douleur ma femme bien-aim??e sombrer dans un d??sespoir noir. </b></p>
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
                            Comment ai-je d??couvert "l'activateur de la jeunesse de peau" ?
                        </h2>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>J'en avais assez de ne pas agir. <b>J'ai d?? lib??rer ma femme des cicatrices disgracieuses et ainsi apporter la paix ?? ma famille.</b> Je suis scientifique, un sp??cialiste de la recherche g??n??tique. J'ai particip?? ?? l'invention des substances qui ont apport?? des revenus gigantesques aux principales entreprises de cosm??tiques japonaises. J'ai d??cid?? d'utiliser tout mon savoir et mes ans d'exp??rience pour cr??er une formule qui r??tablirait une peau saine et sans cicatrices ?? ma femme.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>J'ai aussit??t entrepris mes recherches. L'Institut de Biotechnologie o?? je travaille poss??de l'un des laboratoires les plus modernes au monde. Nous testons les produits des plus grandes marques de cosm??tique mondiales avant de les lancer sur le march??.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Pendant six mois, j'ai essay?? des combinaisons des substances naturelles les plus fortes. Mon objectif ??tait de cr??er une formule qui <b>active la r??g??n??ration automatique de la peau.</b> Autrement dit, je voulais que ma formule renouvelle la peau du visage de ma femme et lui redonne sa beaut?? d'antan. En m??me temps, elle devrait ??tre 100 % sans danger pour la sant??. La peau de Michiko ??tait d??j?? dans un ??tat d??plorable et je ne pouvais l'exposer ?? aucune irritation.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Je travaillais principalement de nuit car je devais remplir mes obligations professionnelles pendant la journ??e. Apr??s six mois comme ??a, j'??tais compl??tement ??puis??. <b>J'avais peur de ne pas avoir assez de force </b>??? qu'apr??s tant de nuits blanches, de stress et d'efforts constants, mon corps ne pourrait pas le supporter.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>J'avais de plus en plus souvent des vertiges, j'??tais essouffl??, je ressentais une sensation de picotement derri??re mon sternum. Une nuit, six mois apr??s le d??but des recherches, je me suis retrouv?? ?? l'h??pital. Il s'est av??r?? que j'avais failli faire une crise cardiaque. Je n'en ai jamais dit ?? ma femme.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Toutefois, je sentais que j'??tais de plus en plus proche du succ??s et que je ne pouvais pas abandonner maintenant.</p>
                        </div>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: ;">
                            Une erreur de tubes ?? essai s'est av??r??e ??tre une aubaine
                        </h2>
                        <div class="x-sticky_bar_3-on-medical-sp  sticky_bar">
                            <div class="b3 fly-box">
                                <div class="box">
                                    <span class="ico"></span>
                                    <div>
                                        <p>DERNIERS ACHATS EFFECTU??S</p>
                                        <span>- ?? l'instant, Mme Gabrielle de Vernier</span>
                                        <span>- il y a 18 min Mme Sophie de Nyon </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sticky_bar3-on"></div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>Un heureux accident m'a aid??. </b>Apr??s de nombreuses heures de travail au laboratoire, j'??tais tr??s fatigu?? et... je me suis tromp?? de tubes ?? essai. Au lieu d'ajouter une substance ?? la formule pour faire une cr??me pour le visage, j'ai ajout?? une solution pour les substances ?? prendre par voie orale.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>J'ai jur?? am??rement. J'ai pens?? que tout ??tait perdu. Ma formule ??tait presque pr??te ??? et maintenant la solution allait changer son action. Et il faudrait recommencer tout le processus d??s le d??but. Je savais que j'aurais plus assez de force pour les six mois suivants de recherches.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>Pourtant, ?? ce moment-l??, un miracle a eu lieu !</b> L'appareillage s'est mis ?? fonctionner bizzarrement. J'ai regard?? dans le microscope. La formule a enfin commenc?? ?? agir comme il fallait ! Les cellules de la peau visibles au microscope ont commenc?? ?? se r??g??n??rer toutes seules de fa??on automatique.</p>
                        </div>
                        <h5 class="x-h5-medical-sp
  left" style="font-weight: ; color: #000000;">
                            Les cellules sous le microscope "rajeunissaient litt??ralement devant mes yeux".
                        </h5>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>C'est alors que j'ai compris que le secret r??side dans l'action de l'int??rieur de l'organisme. Au lieu d'appliquer des cr??mes ?? la surface de la peau, vous devez agir en profondeur sous la peau et y enclencher le processus d'auto-r??paration naturel. Gr??ce ?? cela, j'ai re??u des r??sultats dont je n'avais m??me pas r??v??. Il s'est av??r?? que la formule non seulement lib??re la peau des cicatrices, des taches de naissance et des points de rougissement. Du fait qu'elle agit sur les couches les plus profondes de la peau, <b>elle inverse ??galement tous les signes du vieillissement.</b> J'ai r??alis?? qu'en voulant aider ma femme ?? se d??barrasser des cicatrices disgracieuses, j'ai invent?? par accident un "??lixir de jouvence".</p>
                        </div>

                        <h4 class="x-h4-medical-sp
  left" style="font-weight: 700; background: ; color: #FF0000;">
                            ??? Tu m'as donn?? un nouveau visage ??? m'a-t-elle dit les larmes aux yeux
                        </h4>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Ma femme m'a fait enti??rement confiance et a accept?? d'essayer la formule que j'ai con??ue. Quand je lui ai remis la formule, elle m'a remerci??e avec un sourire. Mais dans ses yeux, je pouvais voir la fatigue et un manque de foi. <b>Elle avait essay?? tant de substances inefficaces qu'elle ne s'attendait qu'?? une d??ception.</b> Par contre, je savais bien que ce serait diff??rent cette fois !</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Apr??s quelques jours, j'ai vu un sourire sur son visage ??? le premier depuis plusieurs mois. ??? Kenzo, regarde, les cicatrices diminuent ??? m'a-t-elle dit avec un air d'??tre emport?? aux septi??mes cieux. Apr??s une semaine, les cicatrices effrayantes ressemblaient ?? de fines lignes blanches.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Le jour 14 a ??t?? une perc??e. Les cicatrices ont presque compl??tement disparu et toutes les imperfections (ridules autour des yeux, vieilles cicatrices d'acn??, veines cass??es) sont compl??tement absorb??es. <b>Apr??s 21 jours, il n'y avait plus aucune trace des cicatrices sur le visage de ma femme.</b> Son visage ??tait parfait- tout comme le visage d'un enfant innocent. Ma femme ??tait radieuse.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Elle a commenc?? ?? sortir et a renou?? des contacts avec des amis. Elle a compl??tement arr??t?? de se maquiller. Elle n'avait plus ?? corriger son apparence ??? sa peau ??tait id??ale et n'avait plus besoin d'??tre am??lior??e.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>??? Maman, tu as un visage beau comme un ange</b> ??? notre fille a un soir dit en caressant le visage de Michiko avec sa petite main. Mon ??pouse m'a alors regard?? avec reconnaissance qu'aucun mot ne pourrait jamais exprimer. J'ai senti avoir accompli ma mission.</p>
                        </div>

                        <div class="x-image-medical-sp lazy position-left  left">





                            <noscript>
                                <img style="" class="image-img " src="<?php echo get_res("form_big/mobile/res/img/zdjecie_rodzina_Sakury_SP_V1.jpg"); ?>" />
                            </noscript>

                            <img style="" class="image-img lazy_image " src="<?php echo get_res("form_big/mobile/res/img/zdjecie_rodzina_Sakury_SP_V1.jpg"); ?>" />


                            <div class="text-container">
                                <div style="text-align: center;">
                                    <p>Nous ??tions tous trois heureux.</p>
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
                            <p>Cependant, un soir, un mois apr??s l'application de la formule, ma femme s'est approch??e de moi avec une expression s??rieuse sur son visage :</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>??? J'ai rencontr?? ma m??re aujourd'hui. Elle a beaucoup vieilli ces derni??res ann??es. Et l'agression contre moi lui a encore ajout?? une bonne dizaine d'ann??es ... Elle est beaucoup attrist??e, elle dit qu'elle ressemble ?? une vieille pomme rid??e.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>- Je sais que tu as invent?? la formule uniquement pour moi. Mais pense-y un instant - tu pourrais aider aussi ma m??re et des centaines d'autres femmes. Kenzo, tu ne peux pas dissimuler cette formule au monde. Ce serait un p??ch?? de n??gligence !</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Michiko avait raison - je n'avais pas de droit de garder une invention si r??volutionnaire seulement pour moi. J'ai d??cid?? de faire tout pour rendre ma formule disponible au plus grand nombre de femmes que possible. J'ai transmis ma d??couverte pour des ??tudes ?? grande ??chelle.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Les 5 laboratoires de recherches les plus importants du monde entier (des ??tats-Unis, du Canada, de la Chine et du Japon) ont confirm?? l'efficacit?? la plus probante de ma formule. <b>Je l'ai brevet?? sous le nom de : formule tropico-dermale Zoraitil.</b></p>
                        </div>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: ;">
                            Zoraitil ??limine 98,9 % des rides et r??duit l'??ge biologique de la peau de 15, 20 et m??me 25 ans
                        </h2>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Je tenais ?? ce que mon invention soit facile ?? appliquer si bien que le plus de femmes que possible peuvent en profiter. C'est pourquoi je l'ai enferm??e dans des comprim??s effervescents ?? dissoudre dans l'eau. <b>Il suffit de boire la formule une fois par jour,</b> pour observer comment les rides et les imperfections disparaissent du jour au lendemain.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>D??j?? 2 minutes apr??s l'application de la formule de lifting tropico-dermale Zoraitil, la capacit?? naturelle de votre peau ?? s'auto-r??g??n??rer est d??bloqu??e. D??s la premi??re application, vous pourrez observer que votre peau devient plus ferme et<b> les rides qui la parsemaient "sont litt??ralement absorb??es???. </b></p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Les femmes qui utilisent ma formule tropico-dermale d??crivent souvent son action avec le mot "magie". Effectivement, cela peut le sembler ?? premi??re vue. Il se peut que vous buviez la formule et que vous alliez ensuite ?? la cuisine pour pr??parer le repas. Lorsque vous vous regardez ?? nouveau dans le miroir apr??s quelques heures, vous pouvez avoir l'impression que quelqu'un a litt??ralement <b>effac?? les rides de votre visage.</b></p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Plusieurs femmes ??prouvent ce sentiment. Les femmes m'??crivent qu'en quelques heures, elles se sont d??barrass??es des rides auxquelles elles ??taient habitu??es depuis des ann??es. Les rides "du fumeur" autour des l??vres, "la ride du lion" entre les sourcils, les rides mimiques. Apr??s l'application de la formule tropico-dermale toutes ces imperfections <b>disparaissent litt??ralement d'heure en heure.</b></p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>Apr??s 21 jours d'utilisation de la formule Zoraitil, vous vous d??barrasserez de toutes les rides, boutons, cernes et poches sous les yeux, ainsi que des taches et d??colorations, ainsi que du teint terne et bl??me.</b>Votre visage deviendra parfaitement lisse, radicalement tonifi?? et ??clatant comme le visage d'une jeune fille de 20 ans. Vous vous sentirez comme si vous aviez remont?? le temps, vous serez satisfaite de votre apparence et vous vous regarderez dans le miroir avec fiert?? !</p>
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
                            <p><b>Tels sont les r??sultats obtenus par un groupe de contr??le de 312 000 femmes du monde entier et de diff??rents ??ges </b>de teint et de types de peau diff??rents. Peu importe que vous ayez 29 ou 89 ans, que votre peau soit s??che et ab??m??e, ou grasse et sujette aux imperfections ??? ma formule tropico-dermale Zoraitil restaurera sa douceur, sa fermet?? et son parfait ??clat.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>M??me si vous n'avez jamais utilis?? de cr??mes et de masques auparavant, m??me si vous fumez </b>et aimez prendre des bains de soleil, m??me si vous n'esp??rez plus de pouvoir un jour retrouver votre beaut?? d'antan. Sachez qu'en 21 jours, vous ??liminerez toutes les rides et vous impressionnerez tout le monde de votre peau rajeunie et id??ale, sans aucune imperfection.</p>
                        </div>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: ;">
                            Pourquoi ma formule tropico-dermale est-elle si efficace ?
                        </h2>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>En cons??quence ?? l'action de ma formule tropico-dermale Zoraitil, des processus de r??g??n??ration complexes se produisent dans la peau. <b>Sans entrer dans les d??tails, je vais vous expliquer son action en quelques mots simples.</b></p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Vous ??tes-vous d??j?? demand?? pourquoi les jeunes n'ont pas ?? se soucier des rides et que leur peau est toujours ferme, lisse et ??clatante ? Tout cela gr??ce ?? un processus ph??nom??nal, qui est l'auto-r??g??n??ration naturelle des cellules.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Sans ce processus, apr??s une blessure mineure, un enfant devrait vivre avec la peau endommag??e pour le reste de sa vie. La moindre petite ecchymose qui appara??trait sur son corps apr??s avoir jou?? dans la cour resterait avec lui POUR TOUJOURS. Heureusement, la nature dote les jeunes individus de la capacit?? de s'auto-r??g??n??rer tr??s rapidement : ??galement dans le cas des cellules de la peau. Le probl??me est que votre corps perd ces capacit??s avec l'??ge. Apr??s l'??ge de 60 ans, elles disparaissent presque compl??tement. Vous avez probablement remarqu?? que les coupures ordinaires prennent beaucoup plus de temps ?? gu??rir que dans votre jeunesse. Il n'est donc pas surprenant que votre peau perde sa douceur naturelle, sa fermet?? et son ??clat. Des rides, des joues tombantes et des taches de d??coloration apparaissent.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>Sur le march?? vous pouvez trouver des dizaines de produits cens??s stimuler l'auto-r??g??n??ration des cellules de votre peau,</b> qui promettent de restaurer la jeunesse de la peau. Cependant, lorsque vous mettez de la cr??me sur votre visage, vous n'agissez qu'?? la surface de la peau. Pendant ce temps, les processus de r??g??n??ration se produisent beaucoup plus en profondeur ! Aucune cr??me ne peut atteindre ces parties de votre peau. <b></b></p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>C'est comme si l'on essayait d'hydrater la peau en versant de l'eau sur le visage. </b>Vous obtiendrez un effet pendant un certain temps, tant qu'il y a encore des particules d'eau sur votre visage. Mais dans un instant, vous verrez que l'??tat de votre peau ne s'est pas du tout am??lior?? : votre peau peut m??me ??tre plus s??che et irrit??e. Toutes les cr??mes et autres produits cosm??tiques qui agissent ?? la surface de votre peau agissent exactement de la m??me mani??re.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>La v??rit?? est que vous ne pouvez pas restaurer la jeunesse de votre peau en agissant sur elle de l'ext??rieur. C'est juste une perte de temps et d'argent. C'est comme si l'on versait de l'eau sur le visage. <b>Pour retrouver un teint jeune, lisse et ??clatant, il est n??cessaire de restaurer la capacit?? naturelle de la peau ?? s'auto-r??g??n??rer : agir de l'int??rieur ??? dans les parties les plus profondes de la peau. </b></p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>Et voici comment fonctionne ma formule tropico-dermale Zoraitil.</b> Gr??ce ?? la combinaison unique d'ingr??dients actifs, elle stimule chaque cellule de votre peau ?? s'auto-r??g??n??rer. Voil?? pourquoi vous n'avez plus ?? vous soucier des rides, du rel??chement cutan?? du visage, du cou et du d??collet??, des veines ??clat??es ou de la d??coloration.</p>
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
                                    <p>APR??S</p>
                                </div>
                            </div>
                            <div class="before_after_one_photo-row">
                                <div class="before_after_one_photo-text">
                                    <p>Peau incapable de s'auto-r??g??n??rer, couverte de rides, manquant de fermet?? et d'??clat</p>
                                </div>
                                <div class="before_after_one_photo-text">
                                    <p>Peau constamment stimul??e ?? s'auto-r??g??n??rer, parfaitement lisse, ferme et ??clatante</p>
                                </div>
                            </div>
                        </div>

                        <h4 class="x-h4-medical-sp
  center" style="font-weight: ; background: green; color: #FFFFFF;">
                            ELLE EST 100 % S??RE ET SON UTILISATION EST D'UNE SIMPLICIT?? ENFANTINE
                        </h4>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>La composition r??volutionnaire de ma formule permet d'??liminer m??me les cicatrices</b> (comme dans le cas de mon ??pouse) ainsi que les rides profondes et les d??fauts cutan??s pour lesquels il n'y avait aucun conseil autre qu'une chirurgie plastique. Voil?? pourquoi ma formule tropico-dermale Zoraitil a ??t?? salu??e comme "l'??lixir de jouvence japonais" et j'ai re??u le prix Confucius (??quivalent asiatique du prix Nobel) dans le domaine de la dermatologie pour ma d??couverte.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p><b>Cependant, la r??compense la plus pr??cieuse pour moi sont les milliers de lettres du monde entier</b> que je re??ois de femmes qui ont d??j?? utilis?? ma formule tropico-dermale Zoraitil. Elles y racontent les histoires incroyables de leur m??tamorphoses et ??crivent comment le traitement a chang?? leur vie en mieux. Je me permets de vous citer (bien s??r sous la permission de l'auteure) la lettre de madame H??l??ne de Suisse qui a test?? ma formule comme l'une des volontaires. Madame H??l??ne a ??crit :</p>
                        </div>
                        <div style="background: " class="x-testimonial-medical-sp border-default">



                            <noscript>
                                <img class="img" src="<?php echo get_res("form_big/mobile/res/img/zdjecie_duzy_testymonial_before-after_SP_V1.jpg"); ?>" alt="">
                            </noscript>

                            <img class="lazy_image img image-img" src="<?php echo get_res("form_big/mobile/res/img/zdjecie_duzy_testymonial_before-after_SP_V1.jpg"); ?>" alt="">



                            <div class="title" style="color:"></div>
                            <div class="text">
                                <p>??? Ce traitement a chang?? ma vie ! Auparavant, je me sentais comme une vieillarde. Des rides profondes, les poches sous les yeux, des taches horribles parsemant toute ma peau. Je n'avais pas envie de sortir et me montrer aux gens. Les enfants dans la cour m'appelaient ?? vieille sorci??re ??. <b>Alors que 21 jours du traitement du Dr Sakura ont suffi pour que j'aie une peau si lisse qu'il y a 30 ans. </b>Soudain, les hommes me remarquent dans la rue. Jusqu'?? ce que mon mari devienne jaloux et cherche ?? me conqu??rir comme dans la jeunesse. Si je n'avais pas profit?? de ce traitement, j'aurais commis l'erreur de la vie. Je voudrais ici vous remercier cordialement, Monsieur le Docteur et vous souhaiter plein de succ??s dans votre travail !</p>
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
                            <p>La formule tropico-dermale Zoraitil a d??j?? aid?? des milliers de femmes ?? se lib??rer des rides disgracieuses et ?? restaurer une fois pour toutes la jeunesse de leur peau. Il s'agit d'une d??couverte ?? l'??chelle mondiale ?? l'efficacit?? prouv??e, qui a re??u la prestigieuse garantie triple satisfaction : originalit??, qualit?? et satisfaction.</p>
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
                                        <p>Garantie d'originalit??</p>
                                    </div>
                                    <div class="gps_text-text">
                                        <p>Vous pouvez ??tre s??r que vous obtiendrez le produit original. Disponible uniquement via notre site.</p>
                                    </div>
                                </article>
                                <article>
                                    <div class="gps_text-title">
                                        <p>Garantie de qualit??</p>
                                    </div>
                                    <div class="gps_text-text">
                                        <p>la puret?? des ingr??dients actifs de Zoraitil est conforme aux plus hauts standards de qualit??. Tout cela afin que ses effets r??pondent ?? 100 % ?? vos attentes.</p>
                                    </div>
                                </article>
                                <article>
                                    <div class="gps_text-title">
                                        <p>Garantie de satisfaction</p>
                                    </div>
                                    <div class="gps_text-text">
                                        <p>de nombreux tests de consommateurs confirment la haute efficacit?? deZoraitil</p>
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
                            ATTENTION aux contrefa??ons !
                        </h2>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Peu de temps apr??s la sortie de ma formule tropico-dermale Zoraitil, le march?? a ??t?? litt??ralement inond?? de divers produits qui l'imitent. Ne soyez pas dupe ! <b>Utiliser des produits de contrefa??on non v??rifi??s non seulement ne vous aidera pas ?? vous d??barrasser des imperfections cutan??es, mais peut ??galement ??tre dangereux pour votre sant?? ! </b></p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>La composition de ma formule a ??t?? ??labor??e avec le plus grand soin. Par cons??quent, si vous voulez ??tre s??r ?? 100 % que vous vous d??barrasserez des rides en 21 jours ??? <b>n'achetez pas des contrefa??ons. </b></p>
                        </div>
                        <h2 class="x-h2-medical-sp
    left" style="color: #FF0000; font-weight: ;">
                            Maintenant vous aussi pouvez retrouver une peau douce comme la soie, ferme et ??clatant en 21 jours
                        </h2>
                        <div class="x-sticky_bar_5-on-medical-sp  sticky_bar5-on sticky_bar">
                            <div class="b5 fly-box">
                                <div class="box">
                                    <span class="ico"></span>
                                    <p>Produit fr??quemment command?? ! Derni??res pi??ces</p>
                                </div>
                            </div>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Ne laissez personne vous convaincre que vous avez besoin de toute une ??tag??re de cr??mes diff??rentes pour vous d??barrasser des rides. Ou pire ??? que vous devez exposer votre visage au scalpel d'un chirurgien. <b>Sachez que vous pouvez d??s maintenant vous d??barrasser de 98,9 % de toutes les rides</b> imperfections et d??colorations, ainsi que redonner ?? votre peau une douceur parfaite, fermet?? et ??clat.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>De grandes entreprises cosm??tiques se battent litt??ralement pour le brevet de ma formule tropico-dermale Zoraitil. On m'a propos?? des contrats valant des millions, mais ce n'est pas pour cela que j'ai cr???? la formule. Mon objectif est de lib??rer le plus de femmes possible des imperfections cutan??es disgracieuses qui volent leur confiance et les isolent de leurs proches. <b>Je veux que chaque femme soit fi??re de sa beaut??</b> ??? tout comme ma femme.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>J'ai mis tout en ??uvre pour que ma formule tropico-dermale Zoraitil soit disponible dans le monde entier dans les plus brefs d??lais. Enfin, je suis fier de pouvoir vous annoncer que <b>d??sormais chaque femme peut en profiter et redonner ?? sa peau une douceur parfaite en 21 jours. </b></p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>C'est pourquoi je vous encourage ?? saisir cette opportunit?? ! Pour obtenir la formule tropico-dermale Zoraitil, vous n'avez pas besoin d'envoyer d'argent en ligne ni de payer par carte. Il vous suffit de remplir un formulaire en 2 minutes et, apr??s quelques jours seulement, vous recevrez un colis que vous r??glerez tranquillement aupr??s du coursier ou du facteur.</p>
                        </div>
                        <div class="x-p-medical-sp " style="text-align: left; ">
                            <p>Merci d'avoir lu mon histoire. J'esp??re qu'un jour, vous vous rem??morerez ce jour avec le sourire et que vous vous direz "c'est le jour qui a chang?? ma vie".</p>
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
                                                <p>Ce traitement fait des miracles ! Je ne pouvais plus me regarder dans le miroir. Je ne suis pas encore si vieille et j'avais l'impression que la vie m'avait litt??ralement maltrait??e... et la peau de mon cou ?! Mieux vaut ne pas en parler. Comme chez le dindon. Une fois, je me suis confi??e ?? ma cousine sur mon probl??me et elle m'a recommand?? cette formule. Il n'a pas fallu longtemps pour me convaincre. J'en ai profit?? - et je n'arrivais pas ?? croire mes yeux. <b>Les rides disparaissaient comme si j'utilisais une sorte de potion magique.</b> Apr??s presque 3 semaines, il n'y en a eu plus rien. Et mon cou est devenu ferme et lisse comme si toute cette peau superflue avait ??t?? absorb??e. R??cemment, quand je voulais m'acheter du vin pour le d??ner, la caissi??re m'a demand?? de lui montrer ma carte d'identit??. Je dois l'avouer - c'est formidable. Je recommande ?? chaque femme !</p>
                                            </div>
                                            <span class="rating" title="Ocena">
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
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
                                                <p>Je ne crois pas ?? n'importe quoi et je dois tout v??rifier par moi-m??me. Toutes mes voisines ont sans cesse parl?? de ce traitement, que c'??tait "un secret de jeunesse du Japon" ??? Je ne le croirai pas avant de voir de mes propres yeux ! ??? disais-je et je l'ai essay??. Et donc, je l'ai bien vu ! Je suis apr??s deuxi??me semaine du traitement. J'ai la peau douce, comme si quelqu'un avait litt??ralement repass?? ces rides.<b> L'horrible sillon entre les sourcils et les rides aux coins des yeux et autour de la bouche ont disparu. </b> J'ai l'impression comme si je rajeunissais chaque jour. Si ??a continue comme ??a, mon mari ne me conna??tra pas un jour quand il rentrera ?? la maison. Je recommande !</p>
                                            </div>
                                            <span class="rating" title="Ocena">
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
                                            </span>
                                            <div class="sign">
                                                <p><b>Doroth??e, 76 ans, Bienne</b></p>
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
                                                <p><b>La seule m??thode qui marche</b></p>
                                            </div>
                                            <div class="text">
                                                <p>Une fois, mon petit-fils m'a dit - Mammy, tu ressembles ?? une vieille tortue rid??e. C'est ??vident que c'est un enfant et il ne sait pas encore qu'on ne dit pas de telles choses. Mais ?? ce moment-l??, je me suis dit que je devais prendre soin de moi. J'avais essay?? diff??rents produits, qui ??taient cens??s ??liminer les rides mais ils n'avaient rien fait m??me s'ils co??taient une fortune. Enfin, j'ai trouv?? cette formule. J'ai pens?? que ??a valait la peine de l'essayer comme son auteur ??tait un docteur si reconnu. Et ??a valait bien la peine ! Maintenant, je me sens comme si l'on m'avait redonn?? ma jeunesse. <b>Toutes les rides ont disparu et la peau est devenue agr??able au toucher, lisse, en un mot, jeune.</b> Merci !</p>
                                            </div>
                                            <span class="rating" title="Ocena">
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
                                            </span>
                                            <div class="sign">
                                                <p><b>Fran??oise, 73 ans, Lancy</b></p>
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
                                                <p>Apr??s le divorce, je me suis n??glig??e et j'ai arr??t?? de prendre soin de moi. Mais apr??s quelque temps, j'ai voulu rencontrer un homme et me donner une chance d'??tre heureuse. J'ai rencontr?? un homme sur un site de rencontre. Nous nous ??crivions beaucoup et je pensais que nous nous comprenions bien. Cependant, lorsque nous nous sommes rencontr??s "en direct" dans un restaurant, il s'est ??chapp?? alors que j'??tais aux toilettes. J'ai pleur?? dans mon oreiller, mais j'ai ensuite d??cid?? d'agir. Une amie du travail recommandait fortement cette formule, alors j'ai risqu?? le coup. Et apr??s 21 jours, je peux ?? peine me reconna??tre dans le miroir ! <b>Ma peau est devenue comme la soie - lisse, douce, tout simplement belle. </b>?? pr??sent, je sors avec un homme exceptionnel et je me sens heureuse.</p>
                                            </div>
                                            <span class="rating" title="Ocena">
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
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
                                                <p>Ma peau pourrait servir pour un d??tecteur de la chimie dans les produits de beaut??. Car si une cr??me ou un gel a de mauvais ingr??dients dans sa composition, elle devient tout de suite rougie, rugueuse et s??che. J'ai opt?? pour ce traitement pour me d??barrasser des cicatrices d'acn??, qui me d??figuraient terriblement le visage. Toutefois, j'avais peur qu'??tant donn?? que c'??tait une formule si forte qu'elle enl??ve les cicatrices, cela puisse irriter mon organisme. Mais c'en ??tait pas le cas ! <b>A</b>pr??s moins d'un mois, toutes les cicatrices ont disparu !</p>
                                            </div>
                                            <span class="rating" title="Ocena">
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
                                                <span class="yellowstar">???</span>
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
                                    <div class="text">LA PROMOTION S???ACH??VE DANS :
                                        <span class="b6_counter">03:00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="b7 fly-box">
                                <div class="box">
                                    <span class="ico"></span>
                                    <div>
                                        <div class="text blink">DERNI??RE CHANCE POUR LE FINANCEMENT !!!</div>
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
                                    Nombre de pi??ces disponibles dans le lot actuel (500) :
                                </div>
                                <span class="offer_mobile-number">
                                    0 </span>
                                <span class="offer_mobile-number">
                                    1 </span>
                                <span class="offer_mobile-number">
                                    3 </span>
                            </div>

                            <div class="offer_mobile-title">
                                <p>OBTENEZ <span style="color: green;">Zoraitil</span> EN 2 ??TAPES SIMPLES</p>
                            </div>




                            <div class="text top_text"><strong>OUI !</strong> Je souhaite recevoir Zoraitil pour la participation au Club R??ductions. Cela signifie que mon choix est totalement s??curis??, car le produit est couvert par la garantie triple satisfaction. Le colis me sera livr?? par la poste ou par coursier dans les prochains jours sans frais suppl??mentaires.</div>




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
                                        <div class="text"><span>??tape 1</span>Vos donn??es</div>
                                        <div class="pointer"></div>
                                    </div>
                                    <div class="line line1 dotted"></div>
                                    <div class="two flex flex-column">
                                        <div class="text"><span>??tape 2</span>Derni??re ??tape</div>
                                        <div class="pointer"></div>
                                    </div>
                                </div>
                                <form action="" class="form_mobile_wrapper_19990516" method="POST" data-ajax="false" id="form-mobile" onsubmit="return checkLastStep();" novalidate><input type="hidden" name="action" value="<?php echo htmlspecialchars($current_site) ?>">
                                    <div class="step1">
                                        <div class="input-box">
                                            <div class="floatingSpan"><input id="name" type="text" name="name" data-role="none" placeholder=" " value="<?php echo htmlspecialchars((isset($_POST[" name"]) ? $_POST["name"] : $order["name"])); ?>">
                                                <span class="floating-label">Pr??nom</span> <span class="error-text">Le champ ne peut pas ??tre vide</span>
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <div class="floatingSpan"><input data-role="none" placeholder=" " id="surname" type="text" name="surname" value="<?php echo htmlspecialchars((isset($_POST[" surname"]) ? $_POST["surname"] : $order["surname"]));
                                                                                                                                                                ?>">
                                                <span class="floating-label">Nom</span> <span class="error-text">Le champ ne peut pas ??tre vide</span>
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <div class="floatingSpan"><input data-role="none" placeholder=" " id="phone" type="tel" name="phone" value="<?php echo htmlspecialchars((isset($_POST[" phone"]) ? $_POST["phone"] : $order["phone"])); ?>">
                                                <span class="floating-label">T??l??phone</span> <span class="error-text">Le champ ne peut pas ??tre vide</span>
                                            </div>
                                        </div>
                                        <button type="button" id="hideTextOnB7" class="toStep2">??tape suivante
                                        </button>

                                        <span class="info">??tape suivante <strong>DONN??ES D'ADRESSE</strong></span>
                                    </div>
                                    <div class="step2">
                                        <div class="input-box">
                                            <div class="floatingSpan"><input data-role="none" placeholder=" " type="email" id="email" name="email" value="<?php echo htmlspecialchars((isset($_POST[" email"]) ? $_POST["email"] : $order["email"])); ?>">
                                                <span class="floating-label">Entrez votre adresse e-mail</span> <span class="error-text">Le champ ne peut pas ??tre vide</span>
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <div class="floatingSpan"><input data-role="none" placeholder=" " id="street" type="text" name="street"> <span class="floating-label">Rue</span>
                                                <span class="error-text">Le champ ne peut pas ??tre vide</span>
                                            </div>
                                        </div>
                                        <div class="flex flex-row">
                                            <div class="input-box floatingSpan"><input data-role="none" placeholder=" " id="street_nr" type="text" name="street_nr"> <span class="floating-label">N?? d'immeuble</span> <span class="error-text">Le champ ne peut pas ??tre vide</span>
                                            </div>
                                            <div class="input-box floatingSpan"><input data-role="none" placeholder=" " id="home_nr" type="text" name="home_nr"> <span class="floating-label nr_home">N?? d'appartement</span>
                                            </div>
                                        </div>
                                        <div class="input-box floatingSpan"><input data-role="none" placeholder=" " name="pcode" id="pcode" type="text">
                                            <span class="floating-label">Code postal</span> <span class="error-text">Le champ ne peut pas ??tre vide</span>
                                        </div>
                                        <div class="input-box floatingSpan"><input data-role="none" placeholder=" " id="city" type="text" name="city" value="<?php echo htmlspecialchars((isset($_POST[" city"]) ? $_POST["city"] : $order["city"])); ?>">
                                            <span class="floating-label">Ville</span> <span class="error-text">Le champ ne peut pas ??tre vide</span>
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
                                                <label for="codinp">Cochez cette case si vous souhaitez payer ?? la livraison Si vous ne cochez pas cette case, il vous sera demand?? d'effectuer le paiement ?? la prochaine ??tape.</label>

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
                    <p>Copyright ?? 2005-2021.</p>
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

                        <a class="footer__links--link" target="_blank" href="?site=privacy" rel="noopener noreferrer" title="Politique de Confidentialit??">Politique de Confidentialit??</a>



                        <a class="footer__links--link" target="_blank" href="?site=voucher" rel="noopener noreferrer" title="R??glement - Club R??ductions">R??glement - Club R??ductions</a>
                        <a class="footer__links--link" target="_blank" href="?site=gift" rel="noopener noreferrer" title="R??glement - Cadeau pour le Bon">R??glement - Cadeau pour le Bon</a>



                        <a class="footer__links--link" target="_blank" href="?site=contact" rel="noopener noreferrer" title="Nous ??crire">Nous ??crire</a>




                        <a class="footer__links--link" target="_blank" href="?site=information_affiliates_en" rel="noopener noreferrer" title="Information for affiliates">Information for affiliates</a>

                    </div>


                </div>

                <div class="x-footer_text-medical-sp footer_text ">


                    <div class="FooterDisclaimer">
                        <p>
                            Le produit d??crit est un suppl??ment alimentaire et il ne doit pas ??tre utilis?? pour poser un diagnostic m??dical, restaurer, corriger ou modifier des fonctions organiques par une action pharmacologique, immunologique ou m??tabolique.
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