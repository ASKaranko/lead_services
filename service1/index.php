<?php   

if (!empty($_POST['phone'])) {
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
            'country_code' => $post['country'],
            'address' => $post['address'],
            'email' => $post['email'],
            'lastname' => $post['lastname'],
            'comment' => $post['comment'],
            'layer' => $post['layer'],
            'ip' => $post['ip'],
            'sub1' => $_GET['sub1'] ? $_GET['sub1'] : '',
            'sub2' => $_GET['sub2'] ? $_GET['sub2'] : '',
            'sub3' => $_GET['sub3'] ? $_GET['sub3'] : '',
            'sub4' => $_GET['sub4'] ? $_GET['sub4'] : '',
            'sub5' => $_GET['sub5'] ? $_GET['sub5'] : '',
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
        echo '<pre>';
        var_dump($post);
        echo '</pre>';
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
<html lang="ru"><head>
    <meta charset="utf-8">
    <title>PARAZITOL</title>
    <meta name="description" content="INSUMED">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="img/favicon.png">
    <meta property="og:image" content="img/preview.jpg">
    <link rel="stylesheet" href="css/styles.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.js"></script>


</head>

<body><div class="parallax-mirror" style="visibility: visible; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 7020.81px, 0px); height: 750px; width: 1359px;"><img class="parallax-slider" src="img/5.jpg" style="transform: translate3d(-267px, -0.65px, 0px); position: absolute; height: 750px; width: 1894px; max-width: none;"></div><div class="parallax-mirror" style="visibility: visible; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 5046.81px, 0px); height: 896px; width: 1359px;"><img class="parallax-slider" src="img/4.jpg" style="transform: translate3d(-214px, -0.45px, 0px); position: absolute; height: 896px; width: 1787px; max-width: none;"></div><div class="parallax-mirror" style="visibility: visible; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 3178px, 0px); height: 802px; width: 1359px;"><img class="parallax-slider" src="img/3.jpg" style="transform: translate3d(-280px, -0.4px, 0px); position: absolute; height: 802px; width: 1919px; max-width: none;"></div>
    <!--<div class="parallax-mirror" style="visibility: hidden; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; height: 750px; width: 1417px; transform: translate3d(0px, -632.188px, 0px);"><img class="parallax-slider" src="img/5.jpg" style="position: absolute; height: 938px; width: 2369px; max-width: none; transform: translate3d(-476px, 505.75px, 0px);"></div><div class="parallax-mirror" style="visibility: hidden; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; height: 870px; width: 1417px; transform: translate3d(0px, -820.188px, 0px);"><img class="parallax-slider" src="img/4.jpg" style="position: absolute; height: 962px; width: 1919px; max-width: none; transform: translate3d(-251px, 656.15px, 0px);"></div><div class="parallax-mirror" style="visibility: hidden; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; height: 802px; width: 1417px; transform: translate3d(0px, -694px, 0px);"><img class="parallax-slider" src="img/3.jpg" style="position: absolute; height: 949px; width: 2270px; max-width: none; transform: translate3d(-426px, 555.2px, 0px);"></div>-->


    <div class="main-banner">
        <div class="container">
            <div class="row align-items-end main-banner-row">
                <div class="col-lg-4"><img alt="wow" class="banner-product-img fadeInLeft wow" src="img/product.png" style="visibility: visible; animation-name: fadeInLeft;"></div>
                <div class="col-lg-8">
                    <div class="logo-area">
                        <img alt="logo" class="wow flipInY" src="img/logo.png" style="visibility: visible; animation-name: flipInY;"><span class="fadeInLeft wow lt0" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">PARAZITOL</span>
                    </div>
                    <div class="main-banner-title wow fadeIn lt1" style="visibility: visible; animation-name: fadeIn;">EIN HARTER SCHLAG GEGEN DIE PARASITEN</div>
                    <div class="row option-row">
                        <div class="col-lg-6">
                            <div class="options-line lt2"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5; animation-name: pulse;"></i> Normalisiert die Funktion des Magendarmtraktes</div>
                            <div class="options-line lt3"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5; animation-name: pulse;"></i> Vernichtet s??mtliche Arten von Helminthen</div>
                        </div>
                        <div class="col-lg-6">
                            <div class="options-line lt4"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5; animation-name: pulse;"></i> Leitet aus dem K??rper die Abfallprodukte der Parasiten heraus. </div>
                            <div class="options-line lt5"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5; animation-name: pulse;"></i> Beugt einen Wiederbefall vor</div>
                        </div>
                    </div>
                    <div class="form-main wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="special-order">
                            <div class="special-order-title lt6">EIN SONDERANGEBOT<br></div>
                            <div class="timer">
                                <div class="timer-title lt7">bis zum Ende der Aktion verbleiben</div>
                                <script src="//megatimer.ru/get/50f1409bfe30b4a320191df7c0bfb651.js">
                                </script>
                            </div>
                            <div class="price-wrapper">
                                <div class="lt8"><div class="price_old">78 EUR</div>  Normalpreis</div>
                                <div class="lt9"><div class="price_main wow pulse" data-wow-delay="2s" data-wow-iteration="3" style="visibility: visible; animation-delay: 2s; animation-iteration-count: 3; animation-name: pulse;">39 EUR</div>  Aktionspreis</div>
                            </div>
                        </div>
                        <div class="order-form-wrapper">
                            <form action="" class="order_form" id="" method="post">
                                <label><input name="name" placeholder="Vorname" required="" type="text"></label><label><input name="phone" placeholder="Telefonnummer" required="" type="text"></label><label><select class="country_select" id="country" name="country">
                                    <option value="de">Deutschland</option>
                      </select>

                      <input type="hidden" name="landing" value="de.parazr.com"><!-----><input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>"><input type="hidden" name="createdAt" value="<?=date("Y-m-d H:i:s")?>"><input type="hidden" name="userAgent" value="<?=$_SERVER['HTTP_USER_AGENT']?>"><input type="hidden" name="flow_hash" value="Eask"><input type="hidden" name="referrer" value="<?=$_SERVER['HTTP_REFERER']?>"></label><button class="order-button wow tada lt10" data-wow-delay="3s" style="visibility: visible; animation-delay: 3s; animation-name: tada;" type="submit">Bestellen</button>
                                    <input type="hidden" name="landing" value="de.parazr.com">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accent-line"></div>
    <div class="warning-block">
        <div class="container">
            <div class="warning-title mobile-hide lt11">GEM??SS DEN LETZTEN WHO-DATEN, <br>SIND ??BER 1 MILLIARDE MENSCHEN VON PARASITEN BEFALLEN</div>
            <div class="warning-badge wow fadeInUp mobile-hide lt12" style="visibility: visible; animation-name: fadeInUp;">90% von diesen ahnen nicht einmal, dass sie zu einem N??hrstoffmileau f??r Helminthen wurden</div>
            <div class="warning-title red mobile-hide lt13">SIND SIE SICHER, DASS SIE NICHT UNTER DIESEN SIND? ??BERPR??FEN SIE SICH AUF INFEKTIONSZEICHEN!</div>
            <div class="simptoms">
                <div class="simptoms-title lt14">ANZEICHEN EINER HELMINTHOSE</div>
                <div class="simptoms-wrapper">
                    <ul class="fadeIn wow" style="visibility: visible; animation-name: fadeIn;">
                        <li class="lt15"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> M??digkeitsgef??hl</li>
                        <li class="lt16"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> Kopfschmerzen, Unwohlsein</li>
                        <li class="lt17"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> Entz??ndungen der oberen Atemwege</li>
                        <li class="lt18"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> Reizbarkeit, Aggression</li>
                        <li class="lt19"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> Alle Arten von Hautausschl??gen</li>
                        <li class="lt20"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> Gewichtsverlust, auch bei gutem Appetit </li>
                    </ul>
                    <ul class="fadeIn wow mobile-hide" style="visibility: visible; animation-name: fadeIn;">
                        <li class="mobile-hide lt21"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> Probleme mit dem Schlaf</li>
                        <li class="mobile-hide lt22"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> Allergie (tr??nende Augen, Hautausschlag, Schnupfen, </li>
                        <li class="mobile-hide lt23"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> H??ufige Erk??ltungen, Angina, Nasenverstopfung</li>
                        <li class="mobile-hide lt24"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> Schmerzen in Gelenken und Muskeln</li>
                        <li class="mobile-hide lt25"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> Vergr????erung der Lymphknoten</li>
                        <li class="mobile-hide lt26"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> Verdauungsst??rungen: Bl??hungen, Verstopfung oder Durchfall </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="accent-line wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="ways mobile-hide">
        <div class="container">
            <div class="h1 lt27">WEGE DER ANSTECKUNG MIT HELMINTHEN</div>
            <div class="row ways-row justify-content-center">
                <div class="col-md-3">
                    <div class="ways-card wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                        <div class="ways-card-title top-text wow fadeInUp lt28" style="visibility: visible; animation-name: fadeInUp;">Schlecht gewaschenes Obst, Gem??se und Beeren</div><img alt="icon" src="img/z1.png">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ways-card wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                        <div class="ways-card-title top-text wow fadeInUp lt29" style="visibility: visible; animation-name: fadeInUp;"> Schlecht gebratenes Fleisch und Fisch</div><img alt="icon" src="img/z2.png">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ways-card wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                        <div class="ways-card-title top-text wow fadeInUp lt30" style="visibility: visible; animation-name: fadeInUp;">Kontaminiertes Wasser oder Boden</div><img alt="icon" src="img/z3.png">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ways-card wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                        <div class="ways-card-title top-text wow fadeInUp lt31" style="visibility: visible; animation-name: fadeInUp;">Kontakte mit den Haustieren</div><img alt="icon" src="img/z4.png">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ways-card wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                        <img alt="icon" src="img/z5.png">
                        <div class="ways-card-title bottom-text wow lt32 animated animated" style="visibility: visible;">??ffentliche Pl??tze und Verkehrsmittel</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ways-card wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                        <img alt="icon" src="img/z6.png">
                        <div class="ways-card-title bottom-text wow lt33 animated animated" style="visibility: visible;">Insektenstiche</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ways-card wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                        <img alt="icon" src="img/z7.png">
                        <div class="ways-card-title bottom-text wow lt34 animated animated" style="visibility: visible;">Restaurants und Fastfood</div>
                    </div>
                </div>
            </div>
            <div class="ways-subtitle wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></div>
            <div class="ways-subtitle-big wow fadeInUp lt35" style="visibility: visible; animation-name: fadeInUp;">FANGEN SIE MIT DER BEHANDLUNG BEREITS JETZT AN!</div><a class="scroll-button navigate-btn wow tada lt36" data-wow-delay="3s" href="#bottomForm" style="visibility: visible; animation-delay: 3s; animation-name: tada;">BEGINNEN</a>
        </div>
    </div>
    <div class="accent-line wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="complications parallax-window" data-image-src="img/3.jpg" data-parallax="scroll">
        <div class="container">
            <div class="h2 lt37">Parasiten, <br>die schreckliche Komplikationen ausl??sen:</div>
            <div class="row complications-row">
                <div class="col-lg-3">
                    <div class="complications-card wow fadeInLeft" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                        <img alt="comp" src="img/x1.png">
                        <div class="complications-title lt38">ZYSTIZERKUS</div>
                        <div class="complication-description lt39">Am h??ufigsten (??ber 60%) gelangt der Zystizerkus in das Gehirn, seltener in Skelettmuskulatur und die Augen. Er lebt zwischen 5 und 30 Jahren, l??st <span>Tumore aus</span> </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="complications-card wow fadeInLeft" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <img alt="comp" src="img/x2.png">
                        <div class="complications-title lt40">SPRINGW??RMER</div>
                        <div class="complication-description lt41">Hausen und vermehren sich in den Verdauungsorganen und f??hren zur Bildung von <span>??????</span> ?? <span> umfangreicher Blutung </span> </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="complications-card wow fadeInLeft" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                        <img alt="comp" src="img/x3.png">
                        <div class="complications-title lt42">ANKYLOSTOMA</div>
                        <div class="complication-description lt43">Besch??digen die Schleimhaut und ern??hren sich von dem dabei freigesetzt werdenden Blut. Sie hinterlassen blutende Wunden, was zur Entwicklung einer<span> schweren An??mie</span> und <span>Sepsis f??hrt</span> </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="complications-card wow fadeInLeft" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInLeft;">
                        <img alt="comp" src="img/x4.png">
                        <div class="complications-title lt44">ALVEOKOKKEN</div>
                        <div class="complication-description lt45">Es geschieht ein Absterben des Gewebes des betroffenen Organs. Au??erdem werden die Blutgef????e zerst??rt und <span>h??ren auf, zu funktionieren</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accent-line wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="act">
        <div class="container">
            <div class="h3 lt46">MULTIAKTIVE WIRKUNG <span class="fadeIn wow" style="visibility: visible;">Parazitol</span> </div><img alt="product" class="wow fadeInLeft product-img" src="img/product.png" style="visibility: visible; animation-name: fadeInLeft;">
            <div class="act-row row">
                <div class="col-lg-6">
                    <div class="act-card">
                        <img alt="icon" class="wow pulse" data-wow-iteration="5" src="img/w1.png" style="visibility: visible; animation-iteration-count: 5; animation-name: pulse;">
                        <div>
                            <div class="act-card-title lt47">VERNICHTET</div>
                            <div class="act-card-description lt48">alle m??glichen Arten von Invasionen in k??rzester Zeit</div>
                        </div>
                    </div>
                    <div class="act-card">
                        <img alt="icon" class="wow pulse" data-wow-iteration="5" src="img/w2.png" style="visibility: visible; animation-iteration-count: 5; animation-name: pulse;">
                        <div>
                            <div class="act-card-title lt49"> LEITET HERAUS</div>
                            <div class="act-card-description lt50">Leitet aus dem K??rper die Abfallprodukte der Parasiten heraus</div>
                        </div>
                    </div>
                    <div class="act-card">
                        <img alt="icon" class="wow pulse" data-wow-iteration="5" src="img/w3.png" style="visibility: visible; animation-iteration-count: 5; animation-name: pulse;">
                        <div>
                            <div class="act-card-title lt51">TR??GT BEI ZUR</div>
                            <div class="act-card-description lt52">Reinigung des Organismus von Toxinen</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="act-card">
                        <img alt="icon" class="wow pulse" data-wow-iteration="5" src="img/w4.png" style="visibility: visible; animation-iteration-count: 5; animation-name: pulse;">
                        <div>
                            <div class="act-card-title lt53">STELLT WIEDER HER</div>
                            <div class="act-card-description lt54">Funktion des Immunsystems, endokrinen Systems, Verdauungs-, Nerven- und Herzkreislaufsystems</div>
                        </div>
                    </div>
                    <div class="act-card">
                        <img alt="icon" class="wow pulse" data-wow-iteration="5" src="img/w5.png" style="visibility: visible; animation-iteration-count: 5; animation-name: pulse;">
                        <div>
                            <div class="act-card-title lt55">SCH??TZT</div>
                            <div class="act-card-description lt56">vor erneuter Ansteckung, bildet ein pathogenes Mileau im Organismus des Menschen und verst??rkt die Abwehrkraft</div>
                        </div>
                    </div>
                </div>
            </div><a class="scroll-button navigate-btn wow tada lt57" data-wow-delay="3s" href="#bottomForm" style="visibility: visible; animation-delay: 3s; animation-name: tada;">BESTELLEN</a>
        </div>
    </div>
    <div class="accent-line wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="include parallax-window" data-image-src="img/4.jpg" data-parallax="scroll">
        <div class="container">
            <div class="h3 lt58">STARKE NAT??RLICHE REZEPTUR <span class="fadeIn wow" style="visibility: visible;">Parazitol</span> </div>
            <div class="include-row">
                <div class="include-card card-1 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <img alt="" src="img/m1.png">
                    <div>
                        <div class="include-card-title lt59">MEERRETTICHBAUM</div>
                        <div class="include-card-description lt60">Aufgrund seiner einzigartigen Rezeptur bereinigt er den Organismus von Schadstoffen und schweren Metallen. Bek??mpft effizient Parasiten des Magen-Darm-Traktes, indem er fremde DNS angreift. Bereinigt den Darm und die Gallenabflusswege.</div>
                    </div>
                </div>
                <div class="include-card card-2 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <img alt="" src="img/m2.png">
                    <div>
                        <div class="include-card-title lt61">HANDROANTHUS</div>
                        <div class="include-card-description lt62">Lapachol ist eine besondere Verbindung, die in der Rinde enthalten ist, beugt die Vermehrung der pathogenen Keime vor, hemmt die Vermehrung und Entwicklung der zellinneren Parasiten.</div>
                    </div>
                </div>
                <div class="include-card card-3 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <img alt="" src="img/m3.png">
                    <div>
                        <div class="include-card-title lt63">SCHWARZNUSS</div>
                        <div class="include-card-description lt64">Elemente der Schwarznuss st??ren den Stoffwechsel der W??rmer, l??sen eine L??hmung der Muskelgewebe der Parasiten aus, sowie st??rken die Abwehrkraft und die Schutzfunktionen des Organismus, reinigen das Blut von den Toxinen.</div>
                    </div>
                </div>
                <div class="include-card card-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <img alt="" src="img/m4.png">
                    <div>
                        <div class="include-card-title lt65">OLIVENBAUMBL??TTER</div>
                        <div class="include-card-description lt66">Enth??lt Oleuropein, welches ??ber eine parasitent??tende und pilzt??tende Wirkung verf??gt, vermindert die oxidative Sch??digung im Blut, der Leber, den Nieren und den Hirngeweben.</div>
                    </div>
                </div>
                <div class="include-card card-5 wow fadeInUp mobile-hide" style="visibility: visible; animation-name: fadeInUp;">
                    <img alt="" src="img/m6.png">
                    <div>
                        <div class="include-card-title lt67">KURKUMAWURZEL</div>
                        <div class="include-card-description lt68">In der Wurzel der Kurkuma ist Cineol, Kurkumin und Vitamin P enthalten. Cineol normalisiert die Funktion der Verdauungsorgane und d??mmt die Lebenst??tigkeit der W??rmer ein, Kurkumin verf??gt ??ber eine parasitent??tende Wirkung gegen Nematoden, Vitamin P stellt die Funktion der Organe der H??mopoese wieder her und bereinigt das Blut.</div>
                    </div>
                </div>
                <div class="include-card card-6 wow fadeInUp mobile-hide" style="visibility: visible; animation-name: fadeInUp;">
                    <img alt="" src="img/m5.png">
                    <div>
                        <div class="include-card-title lt69">ASA FOETIDE</div>
                        <div class="include-card-description lt70">Ist bekannt dank ihren st??rksten bakterient??tenden und keimt??tenden Eigenschaften. Insbesondere wird sie gesch??tzt dank ihrer F??higkeit, die Parasiten Bandw??rmer aus dem Magendarmtrakt herauszuf??hren.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accent-line wow fadeInDown mobile-hide" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="benefit mobile-hide">
        <div class="container">
            <div class="h3 lt71">WAS <span class="fadeIn wow" style="visibility: visible;">Parazitol</span>MACHT ES BESSER ALS ANDERE MITTEL?</div>
            <div class="benefit-row-title">
                <div class="chemestry-card wow fadeInUp lt72" style="visibility: visible; animation-name: fadeInUp;">CHEMISCHE MITTEL</div>
                <div class="natural-card wow fadeInUp lt73" style="visibility: visible; animation-name: fadeInUp;">
                    PARAZITOL
                </div>
            </div>
            <div class="benefit-row wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                <div class="chemestry-area">
                    <div class="chemestry-card wow fadeInUp desctop-hide animated lt74 animated" style="visibility: visible;">CHEMISCHE MITTEL</div>
                    <div class="benefit-card card-1 lt75">Gef??hrliche chemische <br>Stoffe in der Rezeptur <i class="wow pulse minus" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> </div>
                    <div class="benefit-card card-2 lt76">Ein Schlag auf die inneren<br> Organe und Systeme <i class="wow pulse minus" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> </div>
                    <div class="benefit-card card-3 lt77">Tr??gt<br>zur Abschw??chung der Abwehrkraft bei <i class="wow pulse minus" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> </div>
                    <div class="benefit-card card-4">
                        <div class="lt78">F??gt Schaden den Organen des Magendarmtrakts:<br> <span>der Leber, des Magens, der Pankreas, dem Darm, provoziert<br> Gastritis und Geschw??re.</span> </div><i class="wow pulse minus" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5; animation-name: pulse;"></i>
                    </div>
                </div>
                <div class="natural-area">
                    <div class="natural-card wow fadeInUp desctop-hide animated lt79 animated" style="visibility: visible;">
                        PARAZITOL
                    </div>
                    <div class="benefit-card card-5 lt80">Eine vollkommen<br>nat??rliche Zusammensetzung <i class="wow pulse plus" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> </div>
                    <div class="benefit-card card-6 lt81">Verf??gt ??ber keine<br>Nebenwirkungen, sch??tzt<br>innere Organe <i class="wow pulse plus" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> </div>
                    <div class="benefit-card card-7 lt82">St??rkt die Abwehrkraft <br>und Widerstandsf??higkeit<br> des Organismus gegen Infekte <i class="wow pulse plus" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> </div>
                    <div class="benefit-card card-8">
                        <div class="lt83">Wirkt sich wohltuend auf den Magendarmtrakt aus:<br> <span>, verbessert den Gallenabfluss, stimuliert die Arbeit des Darms</span> </div><i class="wow pulse plus" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5; animation-name: pulse;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="green-title">
        <div class="container lt84"> <span>Parazitol</span> SANFT F??R DEN MENSCHEN ??? HART F??R DIE HELMINTHEN</div>
    </div>
    <div class="doctor parallax-window" data-image-src="img/5.jpg" data-parallax="scroll">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5"><img alt="doctor" class="doc-img wow fadeInLeft" src="img/doc.png" style="visibility: visible; animation-name: fadeInLeft;"></div>
                <div class="col-lg-7">
                    <div class="doctor-description">
                        <p class="lt85">???Die meisten Menschen ahnen es nicht einmal, dass der Organismus eines jeden zweiten mit PARASITEN BEFALLEN ist.</p>
                        <p class="lt86">In 95% der F??lle l??st die Pr??senz der Helminthen keinerlei Symptome aus, bis zu dem Zeitpunkt, an dem sie irreparable Schaden den inneren Organen zugef??gt haben und die Funktion aller Systeme des Organismus gest??rt haben.</p>
                        <p class="lt87">Gegenw??rtig ist nur das Mittel Parazitol in der Lage, den Organismus VOLLKOMEN von beliebigen Parasiten zu befreien, von denen es ??ber 250 Arten gibt. Es erzeugt im menschlichen Organismus ein Mileau, das den Vorgang des Parasitierens an sich zerst??rt.</p>
                        <p class="lt88">Die Erfahrung meiner Patienten best??tigt, dass Parazitol das wirksamste und sicherste Mittel f??r die Vernichtung und Ausleitung ALLER arten der Invasionen ist, einschlie??lich von Eiern, das keine Wiederansteckung zul??sst.</p>
                        <p class="lt89">Die positive Wirkung wird in 100% der F??lle erreicht???.</p><span class="lt90">PD Dr. med. Wolfgang Schmidt, Infektologe</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accent-line wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="add-benefit">
        <div class="container">
            <div class="h3 lt91">ZUS??TZLICHE WIRKUNG <span class="fadeIn wow" style="visibility: visible;">Parazitol</span> </div>
            <div class="add-benefit-row">
                <div class="left-add-benefit">
                    <div class="add-benefit-card card-1 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="add-benefit-number" style="color: #67dae9;">
                            1
                        </div>
                        <div class="add-benefit-description lt92">Hilft bei der Reinigung der Organe und Gewebe, neutralisiert die Vergiftung infolge der parasit??ren Infektion</div><img alt="icon" src="img/b1.png">
                    </div>
                    <div class="add-benefit-card card-2 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="add-benefit-number" style="color: #02c2da;">
                            2
                        </div>
                        <div class="add-benefit-description lt93">Regeneriert Schleimh??ute, bereinigt das Blut, die Lymphe, die interzellul??ren Fl??ssigkeiten</div><img alt="icon" src="img/b2.png">
                    </div>
                    <div class="add-benefit-card card-3 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="add-benefit-number" style="color: #008cac;">
                            3
                        </div>
                        <div class="add-benefit-description lt94">Normalisiert den oxidativ-redoxidative Gleichgewicht, das mit der Bildung der Krebszellen droht</div><img alt="icon" src="img/b3.png">
                    </div>
                    <div class="add-benefit-card card-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="add-benefit-number" style="color: #016294;">
                            4
                        </div>
                        <div class="add-benefit-description lt95">Normalisiert den oxidativ-redoxidative Gleichgewicht, das mit der Bildung der Krebszellen droht</div><img alt="icon" src="img/b4.png">
                    </div>
                </div>
                <div class="right-add-benefit mobile-hide">
                    <div class="add-benefit-card card-5 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <img alt="icon" src="img/b5.png">
                        <div class="add-benefit-description lt96">Tr??gt zur Befreiung vom Geschw??r und von Gastritis, indem es Bakterien t??tet, die sie provozieren</div>
                        <div class="add-benefit-number" style="color: #01558f;">
                            5
                        </div>
                    </div>
                    <div class="add-benefit-card card-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <img alt="icon" src="img/b6.png">
                        <div class="add-benefit-description lt97">Stellt die Funktionen der unterdr??ckten Organe wieder her und normalisiert sie</div>
                        <div class="add-benefit-number" style="color: #023d75;">
                            6
                        </div>
                    </div>
                    <div class="add-benefit-card card-7 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <img alt="icon" src="img/b7.png">
                        <div class="add-benefit-description lt98">Wirkt wohltuend auf Organe des Magendarmtraktes</div>
                        <div class="add-benefit-number" style="color: #023d75;">
                            7
                        </div>
                    </div>
                    <div class="add-benefit-card card-8 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <img alt="icon" src="img/b8.png">
                        <div class="add-benefit-description lt99">Verbessert den Zustand der Haut, der Haare und der Fingern??gel</div>
                        <div class="add-benefit-number" style="color: #21314a;">
                            8
                        </div>
                    </div>
                </div>
            </div><a class="scroll-button navigate-btn wow tada lt100" data-wow-delay="3s" href="#bottomForm" style="visibility: visible; animation-delay: 3s; animation-name: tada;">BESTELLEN</a>
        </div>
    </div>




    <div class="accent-line wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;"></div>



    <div class="feedback">

        <div class="container">
            <div class="h3 lt101">
                OHLASY KLIENT??
            </div>
    
    
            <div class="feedback-slider">
    
                <div>
                    <div class="feedback-slide">
                        <img src="img/ava1.png" alt="ava">
                        <div class="slide-description lt106">
                            <div class="slide-description-title">
                                Dana, Ruhrgebiet
                            </div>
    
                            ???Ich habe mich einige Wochen lang schlecht gef??hlt, habe Tests gemacht und es stellte sich heraus, dass es Parasiten waren. Ich habe nach ??rztlicher Verschreibung Tabletten eingenommen, es wurde aber jeden Tag nur noch schlimmer. Ich wei?? nicht, was mit mir geworden w??re, wenn ich nicht von dem neuen Mittel Parazitol erfahren h??tte. Eben das ist es, was mich gerettet hat. Einen Monat sp??ter habe ich wieder Tests gemacht, alles sauber. Nun werde ich Parazitol zweimal j??hrlich zur Prophylaxe trinken???.
    
                        </div>
                    </div>
                </div>
    
                <div>
                    <div class="feedback-slide">
                        <img src="img/ava2.png" alt="ava">
                        <div class="slide-description lt107">
                            <div class="slide-description-title">
                                Martin, Bremen
                            </div>
                            ???Unser Kater kann nicht zu Hause sitzen, er wandert gern durch den Garten. So hat er uns dann auch W??rmer gebracht. Mit mir war alles normal, die Frau hatte aber sehr gelitten. Erst hat sie nachts mit den Z??hnen geknirscht, dann kamen auch Fieber und Erbrechen. Wir haben uns zusammen behandeln lassen, weil sie sehr wahrscheinlich auch mich anstecken konnte. Wir haben eine Kur von Parazitol durchlaufen und alles ist endlich vorbei???.
    
                        </div>
                    </div>
                </div>
    
                <div>
                    <div class="feedback-slide">
                        <img src="img/ava3.png" alt="ava">
                        <div class="slide-description lt108">
                            <div class="slide-description-title">
                                Uta Krueger, Stuttgart
                            </div>
    
                            ???Mir hat dieses Mittel sehr gefallen. Ich und mein Ehemann haben es zu zweit eingenommen. Und beide hatten wir verschiedene Erscheinungen: wir bekamen kalten Schwei??, Durchfall, es entstanden einige Pickel und wir hatten ??ble Kopfschmerzen. Nach bereits 1,5 Wochen ist die akute Phase vergangen, und nun f??hlen wir uns beide ausgezeichnet! Parazitol wirkt sehr sanft, jedoch stark und sicher???.
    
                        </div>
                    </div>
                </div>
    
            </div>
    
    
        </div>
    
    
    </div>

    <div class="main-banner">
        <div class="container">
            <div class="row align-items-end main-banner-row">
                <div class="col-lg-4"><img alt="wow" class="banner-product-img fadeInLeft wow" src="img/product.png" style="visibility: visible; animation-name: fadeInLeft;"></div>
                <div class="col-lg-8">
                    <div class="logo-area">
                        <img alt="logo" class="wow flipInY" src="img/logo.png" style="visibility: visible;"><span class="fadeInLeft wow lt109" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s;">PARAZITOL</span>
                    </div>
                    <div class="main-banner-title wow fadeIn lt110" style="visibility: visible; animation-name: fadeIn;">EIN HARTER SCHLAG GEGEN DIE PARASITEN</div>
                    <div class="row option-row">
                        <div class="col-lg-6">
                            <div class="options-line lt111"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> Normalisiert die Funktion des Magendarmtraktes</div>
                            <div class="options-line lt112"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> Vernichtet s??mtliche Arten von Helminthen</div>
                        </div>
                        <div class="col-lg-6">
                            <div class="options-line lt113"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> Leitet die Produkte der Lebenst??tigkeit der Parasiten heraus</div>
                            <div class="options-line lt114"> <i class="wow pulse" data-wow-iteration="5" style="visibility: visible; animation-iteration-count: 5;"></i> Beugt einen Wiederbefall vor</div>
                        </div>
                    </div>
                    <div class="form-main wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="special-order">
                            <div class="special-order-title lt115">EIN SONDERANGEBOT<br></div>
                            <div class="timer">
                                <div class="timer-title lt116">bis zum Ende der Aktion verbleiben</div>
                                <script src="//megatimer.ru/get/50f1409bfe30b4a320191df7c0bfb651.js">
                                </script>
                            </div>
                            <div class="price-wrapper">
                                <div class="lt117"><div class="price_old">78 EUR</div>  Normalpreis</div>
                                <div class="lt118"><div class="price_main wow pulse" data-wow-delay="2s" data-wow-iteration="3" style="visibility: visible; animation-delay: 2s; animation-iteration-count: 3;">39 EUR</div>  Aktionspreis</div>
                            </div>
                        </div>
                        <div class="order-form-wrapper" id="bottomForm">
                            <form action="" class="order_form" method="post">
                                <label><input name="name" placeholder="Vorname" required="" type="text"></label><label><input name="phone" placeholder="Telefonnummer" required="" type="text"></label><label><select class="country_select" id="country" name="country">
                                    <option value="de">Deutschland</option>
                      </select>

                      <input type="hidden" name="landing" value="de.parazr.com"><!-----><input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>"><input type="hidden" name="createdAt" value="<?=date("Y-m-d H:i:s")?>"><input type="hidden" name="userAgent" value="<?=$_SERVER['HTTP_USER_AGENT']?>"><input type="hidden" name="flow_hash" value="Eask"><input type="hidden" name="referrer" value="<?=$_SERVER['HTTP_REFERER']?>"></label><button class="order-button wow tada lt119" data-wow-delay="3s" style="visibility: visible; animation-delay: 3s; animation-name: tada;" type="submit">Bestellen</button>
                                    <input type="hidden" name="landing" value="de.parazr.com">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accent-line"></div>
    <div class="how-we-work">
        <div class="container">
            <div class="h3 lt120">Wie wir arbeiten</div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="how-we-work-card wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                        <img alt="icon" src="img/e1.png">
                        <div class="work-description lt121">Hinterlassen Sie eine Anfrage auf unserer Webseite</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="how-we-work-card wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                        <img alt="icon" src="img/e2.png">
                        <div class="work-description lt122">Die Fachkraft wird Kontakt mit Ihnen zur Best??tigung der Bestellung aufnehmen</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="how-we-work-card wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                        <img alt="icon" src="img/e3.png">
                        <div class="work-description lt123">Bezahlung bei dem Empfang der Bestellung</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accent-line wow fadeIn" style="visibility: visible; animation-name: fadeIn;"></div>

    <script src="js/scripts.min.js"></script>
    <script>
        new WOW().init();
    </script>




</body></html>

