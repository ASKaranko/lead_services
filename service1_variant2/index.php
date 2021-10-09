<?php   if (!empty($_POST['phone'])) {
        send_the_order ($_POST);
    }
    function getBrowserLocale()
    {
        $accept_language = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : '';

        return substr($accept_language, 0, 2);
    }

    function getBrowserUrl()
    {
        $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $url = explode('?', $url);
        $url = $url[0];

        return $url;
    }

    function send_the_order ($post){
        $params=array(
          'flow_hash' => $post['flow_hash'],
            'landing' => $post['landing'],
            'referrer' => $post['referrer'],
            'phone' => $post['phone'],
            'name' => $post['name'],
            'country' => $post['country'],
            'address' => $post['address'],
            'email' => $post['email'],
            'lastname' => $post['lastname'],
            'comment' => $post['comment'],
            'layer' => $post['layer'],
            'ip' => $post['ip'],
            'sub1' => $post['sub1'],
            'sub2' => $post['sub2'],
            'sub3' => $post['sub3'],
            'sub4' => $post['sub4'],
            'sub5' => $post['sub5'],
            'link_redirect' => $post['link_redirect'],
                        'link_redirect' => $post['link_redirect'],
            'browser_locale' => getBrowserLocale(),
            'service' => 'leadbit',
            'url' => getBrowserUrl() 
        );
       $url = 'http://wapi.leadbit.com/api/new-order/_5f882f3197fe2728931243';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_REFERER, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        $return= curl_exec($ch);
        curl_close($ch);
        $array=json_decode($return, true);
                    // Google api start

        $urlGS = 'https://script.google.com/macros/s/AKfycbyzbL3IC7rt9MLuhsynmMRH3GzKl08TSfOnp08l6rkcVN_YH89wqiK3wBcLtyzYF8dA/exec';
        $chGS = curl_init();
        curl_setopt($chGS, CURLOPT_URL, $urlGS);
        curl_setopt($chGS, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($chGS, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($chGS, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($chGS, CURLOPT_REFERER, $url);
        curl_setopt($chGS, CURLOPT_POST, 1);
        curl_setopt($chGS, CURLOPT_POSTFIELDS, $params);
        $return= curl_exec($chGS);
        curl_close($chGS);

        // Google api end
        header('Location: order/order.html');
} ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">

    <title>Prostaline</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Карточка для соцсетей -->
    <meta itemprop="image" content="media/share/image.jpg">
    <meta property="og:image" content="media/share/image.jpg">
    <meta property="og:image:url" content="media/share/image.jpg">
    <meta property="og:image:secure_url" content="media/share/image.jpg">
    <meta name="twitter:image" content="media/share/image.jpg">

    <!-- Краткое описание страницы  --> 
    <meta name="description" content="Prostaline">
    <meta property="og:description" content="Prostaline">
    <meta name="twitter:description" content="Prostaline">

    <!-- Заголовок страницы, который будет выводится в записи социальной сети -->
    <meta property="og:title" content="Prostaline">
    <meta name="twitter:title" content="Prostaline">

    <!-- Ключевые слова страницы  -->
    <meta name="keywords" content="Prostaline">

    <!-- Отключает формирование ссылки у номера телефона на iOS -->
    <meta name="format-detection" content="telephone=no">

    <!-- Тип карты, по умолчанию используется summary -->
    <meta name="twitter:card" content="summary">

    <!-- Название сайта -->
    <meta property="og:site_name" content="Prostaline">

    <!-- Favicon -->
    <link sizes="16x16" rel="shortcut icon" type="image/png" href="media/favicon/favicon-16x16.png">
    <link sizes="32x32" rel="icon" type="image/png" href="media/favicon/favicon-32x32.png">
    <link sizes="192x192" rel="icon" type="image/png" href="media/favicon/android-chrome-192x192.png">
    <link sizes="180x180" rel="apple-touch-icon" href="media/favicon/apple-touch-icon-180x180.png">

    <!-- Кто принимал участие над разработкой данного сайта -->
    <meta name="Author" content="Кузнецов Никита Рудалисович">

    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.js"></script>

    <script type="text/javascript" src="countrieslist_cy-gr1.js"></script>
    <script type="text/javascript" src="countries.js"></script>
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
<section class="section section_header">
  <div class="container">
    <div class="header aos-init aos-animate" data-aos="fade-right">
      <div class="header__logo header__item lt0">Prostaline</div>
      <div class="header__item">
        <div class="header__item-media"><img alt="" src="media/header/def.png"></div>
        <div class="header__item-info lt1">100% <span> φυσικό </span></div>
      </div>
      <div class="header__item">
        <div class="header__item-media"><img alt="" src="media/header/mikr.png"></div>
          <div class="header__item-info lt2"><span>Αποδεδειγμένο</span>  από  έρευνες</div>
      </div>
      <div class="header__item">
        <a class="header__btn lt3" href="#abc">Αίτηση κλήσης </a>
      </div>
    </div>
  </div>
</section>
<section class="section section_face">
  <div class="container">
    <div class="face">
      <div class="face__body">
        <div class="face__box">
          <div class="section__title face__title aos-init aos-animate lt4" data-aos="fade-right">Prostaline</div>
          <div class="face__subtitle lt5">αξιόπιστη <mark> λύση σε  ένα ευαίσθητο</mark>  πρόβλημα</div>
          <div class="face__list">
            <div class="face__list-body">
              <div class="face__list-item aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                <div class="face__list-description lt6"><mark> ανακουφίζει </mark> τη φλεγμονώδη διαδικασία</div>
              </div>
              <div class="face__list-item aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                <div class="face__list-description lt7"><mark> σήμα </mark> ανακουφίζει <!-- σήμα --> του πόνου</div>
              </div>
              <div class="face__list-item aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
                <div class="face__list-description lt8"><mark> ομαλοποιεί </mark> την ούρηση</div>
              </div>
              <div class="face__list-item aos-init aos-animate" data-aos="fade-right" data-aos-delay="400">
                <div class="face__list-description lt9"><mark> βελτιώνει </mark> τη σεξουαλική ζωή</div>
              </div>
              <div class="face__price">
                <div class="face__price-new lt10"> νέα τιμή : <span class="price_main">39 EUR </span></div>
                <div class="face__price-old lt11"> παλιά τιμή : <span class="price_old">78 EUR </span></div>
              </div>
            </div>
            <div class="face__product">
              <img alt="" src="media/face/product.png">
              <div class="face__product-popular lt12">Πρώτο <span>στις πωλήσεις </span></div>
              <div class="face__product-natural lt13">100% <span> φυσικό</span> </div>
            </div>
          </div>
        </div>
        <div class="face__box">
          <form class="form order_form" action="" method="post">
			  	  <input type="hidden" name="landing" value="gr1.prostalinend.com">
            <div class="form__time">
              <div class="form__time-title lt14">Η προσφορά λήγει σε:</div>
              <div class="form__time-box">
                <div class="form__time-count">
                  <span>00</span><span class="lt15">ώρες</span>
                </div><span class="lt16">:</span>
                <div class="form__time-count">
                  <span>21</span><span class="lt17">λεπτά</span>
                </div><span class="lt18">:</span>
                <div class="form__time-count">
                  <span>49</span><span class="lt19">δευτερόλεπτα</span>
                </div>
              </div>
            </div>
            <div class="form__body">
              <label class="form__label"><select class="form__field form__select country_select" name="country">
          
              </select>

              <input type="hidden" name="landing" value="gr1.prostalinend.com"><!-----><input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>"><input type="hidden" name="createdAt" value="<?=date("Y-m-d H:i:s")?>"><input type="hidden" name="userAgent" value="<?=$_SERVER['HTTP_USER_AGENT']?>"><input type="hidden" name="flow_hash" value="Qitk"><input type="hidden" name="sub1" value="<?php echo $_GET['sub1']; ?>"><input type="hidden" name="sub2" value=""><input type="hidden" name="sub3" value=""><input type="hidden" name="sub4" value=""><input type="hidden" name="sub5" value=""><input type="hidden" name="referrer" value="<?=$_SERVER['HTTP_REFERER']?>">


<!--                  <span class="lt21">Държава</span>-->
                </label><label class="form__label"><input class="form__field" type="text" name="name" required=""><span class="lt22">Όνομα</span></label><label class="form__label"><input class="form__field" type="text" name="phone" required=""><span class="lt23">Τηλέφωνο</span></label>
              </div><button type="submit" class="form__btn lt24">Αγοράστε <mark> με την προσφορά</mark> </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section section_man">
  <div class="container">
    <div class="man aos-init" data-aos="fade-right">
      <div class="section__title section__title_arrow section__title_red man__title lt25"> Η πιο διαδεδομένη ανδρική ασθένεια</div>
      <div class="man__info">
        <div class="man__media"><img alt="" src="media/man/img.png"></div>
        <div class="man__description">
          <p class="lt26"><span> Η προστατίτιδα </span> είναι μια φλεγμονή του προστάτη αδένα. Τις περισσότερες φορές περνά σε οξεία ή χρόνια μορφή. Ο κίνδυνος αυξάνεται με την ηλικία.</p>
            <p class="lt27">η χρόνια προστατίτιδα <mark> αποτελεί πρόβλημα για το 85% </mark> των ανδρών  διαφορετικών ηλικιών</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section section_often">
  <div class="container">
    <div class="often aos-init" data-aos="fade-right">
      <div class="section__title section__title_arrow section__title_gold often__title lt28">Οι πιο συχνές εκδηλώσεις προστατίτιδας:</div>
      <div class="often__description">
        <span class="lt29"><mark> πόνος και κάψιμο </mark> κατά την ούρηση</span><span class="lt30"><mark> προβλήματα με τη στύση, </mark> μειωμένη στύση</span>
          <p class="lt31">Εάν η προστατίτιδα <b> αφεθεί στο έλεος του Θεού,</b> τα συμπτώματα θα γίνουν πιο σοβαρά. Κάθε επίσκεψη στην τουαλέτα θα είναι βασανιστήριο και <b> το σεξ θα εξαφανιστεί από τη ζωή σας. </b></p>
      </div>
    </div>
  </div>
</section>
<section class="section section_reasons">
  <div class="container">
    <div class="reasons aos-init" data-aos="fade-right">
      <div class="section__title section__title_arrow section__title_red reasons__title lt32">Αιτίες προστατίτιδας</div>
      <div class="reasons__list">
        <div class="reasons__list-item">
          <span class="lt33"><b> σεξουαλικά μεταδιδόμενες λοιμώξεις </b></span><span class="lt34">κακή κυκλοφορία του αίματος<b> ( καθιστικός τρόπος ζωής) </b></span>
        </div>
        <div class="reasons__list-item">
          <span class="lt35"><b> ορμονική </b> ανισορροπία</span><span class="lt36"><b> ανεπάρκεια βιταμινών </b> και μετάλλων</span>
        </div>
        <div class="reasons__list-item">
          <span class="lt37"><b> χρόνια </b> στρες</span><span class="lt38"><b> διακόπηκε </b> σεξουαλική επαφή</span>
        </div>
        <div class="reasons__list-item">
          <span class="lt39"><b> μη σταθερή </b> σεξουαλική ζωή, αποχή</span><span class="lt40"><b> έλλειψη προσωπικής υγιεινής </b></span>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section section_warning">
  <div class="container">
    <div class="warning aos-init" data-aos="fade-right">
      <div class="section__title section__title_arrow section__title_gold warning__title lt41">Εάν δεν αντιμετωπιστεί εγκαίρως <mark> <span>, η χρόνια πορεία της προστατίτιδας </span> οδηγεί σε επικίνδυνες συνέπειες: </mark></div>
      <div class="warning__box">
        <div class="warning__item">
          <div class="warning__media"><img alt="" src="media/warning/img-1.png"></div>
          <p class="lt42">Σεξουαλική <span> δυσλειτουργία</span> </p>
        </div>
        <div class="warning__item">
          <div class="warning__media"><img alt="" src="media/warning/img-2.png"></div>
          <p class="lt43">Προστατικό <span> αδενώμα </span></p>
        </div>
        <div class="warning__item">
          <div class="warning__media"><img alt="" src="media/warning/img-3.png"></div>
          <p class="lt44">Υπογονιμότητα</p>
        </div>
        <div class="warning__item">
          <div class="warning__media"><img alt="" src="media/warning/img-4.png"></div>
          <p class="lt45">Καρκίνος <span> του προστάτη </span> αδένα</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section section_term">
  <div class="container">
    <div class="term aos-init" data-aos="fade-right">
      <div class="section__title term__title lt46"><span> ΟΣΟ ΠΙΟ ΜΕΓΑΛΟΣ ΣΤΗΝ ΗΛΙΚΙΑ ΕΙΝΑΙ Ο ΑΝΑΔΡΑΣ, </span> ΤΟΣΟ <mark> ΜΕΓΑΛΥΤΕΡΟΣ ΕΙΝΑΙ Ο ΚΙΝΔΥΝΟΣ! </mark></div>
    </div>
  </div>
</section>
<section class="section section_help">
  <div class="container">
    <div class="help aos-init" data-aos="fade-right">
      <div class="help__box">
        <div class="help__product">
          <img alt="" src="media/help/product.png">
          <div class="help__product-discond lt47"><mark> 50% έκπτωση </mark></div>
        </div>
        <div class="help__btn">
          <a class="lt48" href="">Αγορά <mark> με την προσφορά </mark></a>
        </div>
      </div>
      <div class="help__box">
        <div class="section__title help__title lt49">Prostaline</div>
        <div class="help__subtitile section__title_arrow section__title_red lt50"><mark> επαναφέρει </mark> την ανδρική υγεία στα φυσιολογικά επίπεδα</div>
        <div class="help__subtitile lt51">Απαλλαγείτε από την προστατίτιδα με μια φυσική θεραπεία</div>
        <div class="help__list">
          <div class="help__item lt52">ανακουφίζει τον πόνο</div>
          <div class="help__item lt53">ανακουφίζει το πρήξιμο και τη φλεγμονή του προστάτη</div>
          <div class="help__item lt54">αποκαθιστά την υγεία του ουροποιητικού συστήματος</div>
          <div class="help__item lt55">διεγείρει τη σεξουαλική λειτουργία</div>
          <div class="help__item lt56">μειώνει τον κίνδυνο ανάπτυξης όγκων</div>
          <div class="help__item lt57">αποτρέπει την υποτροπή της νόσου</div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section section_ingredients">
  <div class="container">
    <div class="ingredients aos-init" data-aos="fade-right">
      <div class="section__title section__title_arrow section__title_red ingredients__title lt58">Το ενεργό σύμπλεγμα Prostaline <mark> αποκαθιστά τη λειτουργία του προστάτη <!-- mark --></mark></div>
      <div class="ingredients__body">
        <div class="ingredients__box">
          <div class="ingredients__item">
            <div class="ingredients__media"><img alt="" src="media/ingredients/img-1.png"></div>
            <div class="ingredients__name lt59">Αφρικανικό δαμάσκηνο</div>
            <div class="ingredients__description lt60">Μειώνει το οίδημα και τη φλεγμονή του προστάτη, καθυστερεί την ανάπτυξη ασηπτικής φλεγμονής, αποτρέπει την υπερβολική ανάπτυξη ινοβλαστών στον προστάτη, αποτρέπει το σχηματισμό καρκινικών ιστών.</div>
          </div>
          <div class="ingredients__item">
            <div class="ingredients__media"><img alt="" src="media/ingredients/img-2.png"></div>
            <div class="ingredients__name lt61">Γρανάτης</div>
            <div class="ingredients__description lt62">Αποτελεσματικό για την πρόληψη των όγκων του προστάτη, επιβραδύνει την ανάπτυξη καρκινικών κυττάρων. Διαθέτει έντονη αντιφλεγμονώδη δράση .</div>
          </div>
        </div>
        <div class="ingredients__wrap">
          <div class="ingredients__item">
            <div class="ingredients__media"><img alt="" src="media/ingredients/img-3.png"></div>
            <div class="ingredients__name lt63">Sabal palm</div>
            <div class="ingredients__description lt64">Διεγείρει τη λειτουργία του ορμονικού συστήματος στην παραγωγή τεστοστερόνης. Ενισχύει την ισχύ. Αποτρέπει το σχηματισμό ινώδους ιστού.</div>
          </div>
          <div class="ingredients__item">
            <div class="ingredients__media"><img alt="" src="media/ingredients/img-4.png"></div>
            <div class="ingredients__name lt65">Λυκοπένιο</div>
            <div class="ingredients__description lt66">Καταπολεμά όλους τους παράγοντες της σεξουαλικής γήρανσης των ανδρών. Το αντιοξειδωτικό, εμποδίζει την ανάπτυξη και τη μετανάστευση του καρκινικού ιστού, μειώνει τον κίνδυνο καρκίνου του προστάτη.</div>
          </div>
          <div class="ingredients__item">
            <div class="ingredients__media"><img alt="" src="media/ingredients/img-5.png"></div>
            <div class="ingredients__name lt67">Σπόροι κολοκύθας</div>
            <div class="ingredients__description lt68">Επαναφέρουν τον μηχανισμό της στύσης και ενισχύουν το ανοσοποιητικό σύστημα. Αποτρέπει την ανάπτυξη φλεγμονής του προστάτη, εξαλείφει τη στασιμότητα στο ουροποιητικό σύστημα.</div>
          </div>
          <div class="ingredients__product">
          <div class="ingredients__product-popular lt69"><mark> 100% </mark> φυσικό </div><img alt="" src="media/ingredients/product.png"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section section_professional">
  <div class="container">
    <div class="professional aos-init" data-aos="fade-right">
      <div class="professional__list">
        <div class="section__title professional__title lt70">Γνώμη εμπειρογνωμόνων</div>
        <div class="professional__description">
          <p class="lt71"><mark> Κάθε άνδρας αργά ή γρήγορα βρίσκεται αντιμέτωπος με την προστατίτιδα. </mark> Χωρίς σωστή θεραπεία, αυτή η ασθένεια οδηγεί σε σοβαρές συνέπειες, όπως η στειρότητα και η ανικανότητα. Γι αυτό είναι πολύ σημαντικό να μην παραμελήσετε την ασθένεια και να ξεκινήσετε τη θεραπεία όσο το δυνατόν το συντομότερο. </p>
          <p><mark class="lt72">Σήμερα, όλο και περισσότεροι γιατροί προτιμούν τα φυσικά μέσα. Το αγαπημένο μου ανάμεσά τους είναι το φάρμακο Prostaline.</mark><span class="lt73">Αποτελείται από φυσικά συστατικά, τα οποία δεν προκαλούν παρενέργειες, βοηθούν στην ανακούφιση του πόνου και της φλεγμονής του προστάτη. Η χρήση του Prostaline βελτιώνει την λειτουργία ολόκληρου του γεννητικού ουροποιητικού συστήματος των ανδρών, διεγείρει την στύση, αυξάνει την ποιότητα του σπέρματος.</span></p>
          <div class="professional__id">
          <div class="professional__id-name lt74">Παναγιώτης  Παπαδόπουλος </div><img alt="" src="media/professional/id.png"></div>
        </div>
        <div class="professional__human"><img alt="" src="media/professional/human.png"></div>
      </div>
    </div>
  </div>
</section>

		
		

     
     
     
     
    
    
    
    <section class="section section_commits">
    <div class="container">
        <div class="commits">
          <div class="section__title commits__title lt75 aos-init" data-aos="fade-up"> <span> κριτικές για το Prostaline </span></div>
            <div class="commits__box owl-carousel js-commits__box">
                <div class="commits__item">
                 <div class="commits__name lt80">Ο Βασίλης είναι 42 ετών και κατάφερε να απαλλαγεί από την προστατίτιδα σε 2 εβδομάδες</div>
                    <div class="commits__info">
                        <div class="commits__face">
                            <img src="media/commits/face-1.jpg" alt="">
                        </div>
                         <div class="commits__description lt81">Όχι μόνο το πρόβλημα είναι ευαίσθητο, αλλά και η εκδήλωσή του είναι πολύ παράξενη - κατά τη διάρκεια του οργασμού άρχισα να αισθάνομαι πόνο. Ο γιατρός εξήγησε ότι έτσι εκδηλώνεται η προστατίτιδα και επιβεβαίωσε τη διάγνωση. Προετοίμασα τον εαυτό μου για το χειρότερο έως ότου βρήκα το Prostaline. Μετά από μια εβδομάδα, τα συμπτώματα της νόσου εξαφανίστηκαν. Θεραπεύτηκα τελείως όταν ολοκλήρωσα έναν κύκλο θεραπείας. Εκ μέρους μου θέλω να πω ότι η θεραπεία είναι καλή, αποτελεσματική, σίγουρα την συνιστώ. </div>
                    </div>
                </div>
                <div class="commits__item">
                    <div class="commits__name lt82">Κώστας, 29 ετών, κατάφερε να απαλλαγεί από την προστατίτιδα σε 4 εβδομάδες</div>
                    <div class="commits__info">
                        <div class="commits__face">
                            <img src="media/commits/face-2.jpg" alt="">
                        </div>
                        <div class="commits__description lt83">Πίνω πολύ νερό και, κατά συνέπεια, πηγαίνω συχνά στην τουαλέτα. Για να μειώσω κάπως τον αριθμό των επισκέψεων, κρατιόμουν μέχρι εκεί που δεν πάει. Αλλά τους τελευταίους έξι μήνες γινόταν όλο και πιο δύσκολο για μένα να κρατιέμαι και η ούρηση επίπονη. Τότε άρχισαν τα προβλήματα με τη στύση και κατάλαβα ότι πρόκειται για προστατίτιδα. Τι ήθελα και κρατιόμουν ο βλάκας. Βρήκα μέσα μου το θάρρος και πήγα στον γιατρό. Επιβεβαίωσε τη διάγνωση και συνταγογράφησε έναν κύκλο θεραπείας με το Prostaline. Όλα εξαφανίστηκαν σε λίγες εβδομάδες και μετά την θεραπεία δεν υπήρξαν υποτροπές. </div>
                    </div>
                </div>
                <div class="commits__item">
                   <div class="commits__name lt84">Μανώλης, 49 ετών, κατάφερε να απαλλαγεί από την προστατίτιδα σε 5 εβδομάδες</div>
                    <div class="commits__info">
                        <div class="commits__face">
                            <img src="media/commits/face-3.jpg" alt="">
                        </div>
                        <div class="commits__description lt85">Η προστατίτιδα μου ξεκίνησε ξαφνικά. Μετά από κάποια στιγμή κάθε βράδυ ένιωθα σφοδρή επιθυμία να πάω στην τουαλέτα, η οποία συνοδευόταν από αίσθηση καψίματος και πόνο. Όταν πήγα στο γιατρό και πέρασα τις εξετάσεις, διάγνωσαν προστατίτιδα. Ο γιατρός είπε ότι απευθύνθηκα εγκαίρως, η ασθένεια μόλις άρχισε να εξελίσσεται. Μου έγραψε έναν κύκλο με το Prostaline. Κυριολεκτικά σε μερικές μέρες όλοι οι πόνοι εξαφανίστηκαν, η επιθυμία να πάω στην τουαλέτα εμφανιζόταν όλο και λιγότερο συχνά. Μετά τον κύκλο θεραπείας δεν είχα καθόλου συμπτώματα, οι δεύτερες εξετάσεις έδειξαν ότι η προστατίτιδα άνηκε πια στο παρελθόν. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
    
    
    
    
    
    
    
    
    
    
    
    
    
     
     
     
     
     
        
     
     
     
     
     
     
     
     
     
     
     
		
		
		
		
		
<section class="section section_important">
  <div class="container">
    <div class="important aos-init" data-aos="fade-right">
      <div class="section__title section__title_red section__title_arrow important__title lt92">Παρακαλώ, δώστε προσοχή! <mark> Ο αριθμός των συσκευασιών Prostaline που απαιτούνται για το επιθυμητό αποτέλεσμα καθορίζεται για κάθε περίπτωση ξεχωριστά και μπορεί να αυξηθεί σε μεμονωμένες περιπτώσεις . </mark></div>
    </div>
  </div>
</section>
<section class="section section_face">
  <div class="container">
    <div class="face">
      <div class="face__body">
        <div class="face__box">
          <div class="section__title face__title aos-init aos-animate lt4" data-aos="fade-right">Prostaline</div>
          <div class="face__subtitle lt5">αξιόπιστη <mark> λύση σε  ένα ευαίσθητο</mark>  πρόβλημα</div>
          <div class="face__list">
            <div class="face__list-body">
              <div class="face__list-item aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
                <div class="face__list-description lt6"><mark> ανακουφίζει </mark> τη φλεγμονώδη διαδικασία</div>
              </div>
              <div class="face__list-item aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                <div class="face__list-description lt7"><mark> σήμα </mark> ανακουφίζει <!-- σήμα --> του πόνου</div>
              </div>
              <div class="face__list-item aos-init aos-animate" data-aos="fade-right" data-aos-delay="300">
                <div class="face__list-description lt8"><mark> ομαλοποιεί </mark> την ούρηση</div>
              </div>
              <div class="face__list-item aos-init aos-animate" data-aos="fade-right" data-aos-delay="400">
                <div class="face__list-description lt9"><mark> βελτιώνει </mark> τη σεξουαλική ζωή</div>
              </div>
              <div class="face__price">
                <div class="face__price-new lt10"> νέα τιμή : <span class="price_main">39 EUR </span></div>
                <div class="face__price-old lt11"> παλιά τιμή : <span class="price_old">78 EUR </span></div>
              </div>
            </div>
            <div class="face__product">
              <img alt="" src="media/face/product.png">
              <div class="face__product-popular lt12">Πρώτο <span>στις πωλήσεις </span></div>
              <div class="face__product-natural lt13">100% <span> φυσικό</span> </div>
            </div>
          </div>
        </div>
        <div class="face__box">
          <form class="form order_form" action="" method="post">
			  <input type="hidden" name="landing" value="gr1.prostalinend.com">
            <div class="form__time">
              <div class="form__time-title lt103" id="abc">Η προσφορά λήγει σε:</div>
              <div class="form__time-box">
                <div class="form__time-count">
                  <span>00</span><span class="lt104">ώρες</span>
                </div><span class="lt105">:</span>
                <div class="form__time-count">
                  <span>21</span><span class="lt106">λεπτά</span>
                </div><span class="lt107">:</span>
                <div class="form__time-count">
                  <span>49</span><span class="lt108">δευτερόλεπτα</span>
                </div>
              </div>
            </div>
            <div class="form__body">
              <label class="form__label"><select class="form__field form__select country_select" name="country">
         
              </select>

              <input type="hidden" name="landing" value="gr1.prostalinend.com"><!-----><input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>"><input type="hidden" name="createdAt" value="<?=date("Y-m-d H:i:s")?>"><input type="hidden" name="userAgent" value="<?=$_SERVER['HTTP_USER_AGENT']?>"><input type="hidden" name="flow_hash" value="Qitk"><input type="hidden" name="sub1" value="{subid}"><input type="hidden" name="sub2" value=""><input type="hidden" name="sub3" value=""><input type="hidden" name="sub4" value=""><input type="hidden" name="sub5" value=""><input type="hidden" name="referrer" value="<?=$_SERVER['HTTP_REFERER']?>">

<!--                  <span class="lt110">Държава</span>-->
                </label><label class="form__label"><input class="form__field" type="text" name="name" required=""><span class="lt111">Όνομα</span></label><label class="form__label"><input class="form__field" type="text" name="phone" required=""><span class="lt112">Τηλέφωνο</span></label>
            </div><button type="submit" class="form__btn lt113">Αγορά <mark> με προσφορά </mark></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section section_footer">
  <div class="ac_footer">Global Partners LTD,        <br>        <a href="priv.html" target="_blank">Privacy Policy</a> | <a href="http://feedback-team.com" target="_blank">Report</a></div>
</section>
<script src="js/jquery.js">
</script>
<script src="js/plugin.js">
</script>
<script src="js/index.js">
</script>

    



</body>
</html>
