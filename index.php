<?php

session_start(); 

$books = array(
    1 => [
        'title' => 'Suç ve Ceza',
        'author' => 'Fyodor Dostoyevski',
        'date' => '28.10.2025',
        'summary' => 'Bir teorinin bir cinayete dönüşmesi... Bu kitap, sizi Raskolnikov\'un vicdan azabının en karanlık dehlizlerine hapsediyor. Felsefi bir sorgulama ve insan ruhunun çırpınışı.',
        'full_review' => 'Bu kitabı okurken sadece bir cinayet hikayesi okumuyorsunuz, insan olmanın sınırlarını zorlayan bir deneyime tanık oluyorsunuz. Raskolnikov\'un "seçilmiş insan" teorisiyle başlayan kibir, yerini öyle derin bir pişmanlığa bırakıyor ki, St. Petersburg\'un sisli sokaklarında o vicdan azabını siz de omzunuzda hissediyorsunuz. Sonu, ruhun enkazından nasıl bir kurtuluş inşa edilebileceğine dair muhteşem bir ders niteliğinde. Yüzyıllık bir Rus klasiği olsa da, etik ve ahlak üzerine soruları bugün bile geçerliliğini koruyor.'
    ],
    2 => [
        'title' => 'Gece Yarısı Kütüphanesi',
        'author' => 'Matt Haig',
        'date' => '27.10.2025',
        'summary' => 'Herkesin hayatında "Keşke..." dediği anlar vardır. Peki, size tüm o keşkelere geri dönme, binlerce paralel hayatı deneyimleme şansı verilseydi? Yaşamı kutlayan sihirli bir macera.',
        'full_review' => 'Nora Seed\'in ölümle yaşam arasındaki Gece Yarısı Kütüphanesi\'ne düşüşü, aslında hepimizin içindeki kayıp ihtimallerin sesi. Kitap, "en iyi hayatımız"ın ne olduğu sorusunu öyle güzel işliyor ki, her sayfa kendi kararlarımızı sorgulamamıza neden oluyor. Haig, klinik depresyonu ve umutsuzluğu, samimi ve şefkatli bir dille anlatıyor. Ağlatırken düşündüren ve sonunda "şu anki hayatınızın" değerini hatırlatan modern bir masal.'
    ],
    3 => [
        'title' => 'Yaşamak',
        'author' => 'Yu Hua',
        'date' => '25.10.2025',
        'summary' => 'Bir dönemin tüm acılarını omuzlamış, kayıplarına rağmen inatla nefes almaya devam eden Fugui\'nin destanı. İnsan ruhunun direncine adanmış, kalbinizi sızlatacak bir başyapıt.',
        'full_review' => 'Yu Hua\'nın bu eseri, Çin\'in çalkantılı tarihini (iç savaş, Kültür Devrimi) Fugui adlı sıradan bir adamın gözünden anlatıyor. Fugui, kumarla başlayan hayatında ailesini, çocuklarını, torunlarını kaybediyor. Ama mucizevi olan, tüm bu trajedilerin ortasında bile yaşam sevgisini kaybetmemesi. Kitap, bize hayatın sadece büyük olaylardan ibaret olmadığını, en büyük erdemin "sadece yaşamak" olduğunu fısıldıyor. Okurken hüzünlenmekten çok, Fugui\'nin direnci karşısında saygı duyuyorsunuz.'
    ],
    4 => [
        'title' => 'Serenad',
        'author' => 'Zülfü Livaneli',
        'date' => '24.10.2025',
        'summary' => 'Aşk, tarih ve vicdan... 60 yıldır saklı kalan bir sırrı fısıldayan İstanbul Boğazı. İkinci Dünya Savaşı dönemine uzanan unutulmaz bir dram.',
        'full_review' => 'Livaneli, Türkiye\'nin yakın tarihinde az bilinen, dramatik bir olayı (Struma faciası) merkeze alarak evrensel bir aşk hikayesi yaratmış. Maya ve yaşlı profesörün hikayesi, günümüzün politik karmaşası ile geçmişin acımasızlığını harmanlıyor. Kitabın en güçlü yanı, karakterlerin tarih karşısındaki çaresizliği ve vicdan muhasebesi. Okuduktan sonra, tarihi olayların sadece sayılardan ibaret olmadığını, her birinin arkasında böyle derin insan hikayeleri olduğunu anlıyorsunuz.'
    ],
    5 => [
        'title' => 'Dokuzuncu Hariciye Koğuşu',
        'author' => 'Peyami Safa',
        'date' => '22.10.2025',
        'summary' => 'Bedenin ve ruhun çaresizliği... Hastane koridorlarının ve karşılıksız bir aşkın gölgesinde büyüyen hasta bir gencin otobiyografik çığlığı. Yalnızlık ve kıskançlığın romanı.',
        'full_review' => 'Peyami Safa\'nın kendi yaşamından izler taşıyan bu eser, bir gencin fiziksel hastalığıyla birlikte yaşadığı duygusal karmaşayı inanılmaz bir içtenlikle anlatıyor. Yazarın hastane odalarındaki ruh halini, Nüzhet\'e duyduğu imkansız aşkla birleştirmesi, okuyucuyu hüzünlü ve derin bir dünyaya çekiyor. Hastalığı bir felsefi sorgulama aracı olarak kullanışı, bu eseri Türk edebiyatının en psikolojik romanlarından biri yapıyor.'
    ],
    6 => [
        'title' => 'Fatih Harbiye',
        'author' => 'Peyami Safa',
        'date' => '20.10.2025',
        'summary' => 'Neriman, ya Fatih\'in geleneksel değerlerini seçecek, ya da Harbiye\'nin Batı rüzgarına kapılacak. Türk toplumunun Doğu-Batı ikilemini en çarpıcı anlatan eser.',
        'full_review' => 'Bu roman, bir toplumun yaşadığı kültürel kimlik bunalımını Neriman karakteri üzerinden somutlaştırıyor. Safa, sadece iki farklı semti değil, iki farklı yaşam felsefesini karşı karşıya getiriyor. Neriman\'ın gösterişli Batı hayatına duyduğu özentiyi ve eski değerlerine olan bağlılığını okurken, aslında modern Türkiye\'nin kuruluş sancılarına tanık oluyorsunuz. Günümüzde bile tartışılan "özümüzü korumak mı, yenileşmek mi?" sorusunu başarıyla soruyor.'
    ],
    7 => [
        'title' => 'Sessiz Hasta',
        'author' => 'Alex Michaelides',
        'date' => '18.10.2025',
        'summary' => 'Alicia, eşini vurduktan sonra tek kelime etmedi. Terapist Theo, onun sessizliğini kırmak için uğraşırken, akıl oyunları sizi öyle bir tuzağa çekiyor ki, son sayfada nefesiniz kesilecek.',
        'full_review' => 'Psikolojik gerilim sevenler için tam bir ziyafet! Yazar, okuyucuyu sürekli yanlış yönlendiriyor ve gerçeği bulmak için terapist Theo ile birlikte çabalarken, herkesin bir sır sakladığını fark ediyorsunuz. Kitabın temposu mükemmel, karakterlerin derinliği tatmin edici. Ve evet, o son... Kitap bittiğinde saatlerce duvarlara bakıp "Nasıl olur?" diye düşündürten, zekice kurgulanmış bir modern gerilim klasiği.'
    ],
    8 => [
        'title' => 'Romeo ve Juliet',
        'author' => 'William Shakespeare',
        'date' => '15.10.2025',
        'summary' => 'Birbirine düşman iki ailenin çocukları... Beş günlük tutkulu ve trajik bir aşkın, tüm zamanların en büyük edebi dramasına dönüşme hikayesi. Saf aşkın ölümsüzlüğü.',
        'full_review' => 'Shakespeare\'in bu eseri, sadece bir aşk hikayesi değil, aynı zamanda toplumdaki nefretin genç hayatları nasıl yok ettiğinin acı bir kanıtıdır. Romeo ve Juliet\'in birbirlerine duyduğu o yoğun, mantık dışı gençlik aşkı, okuyucuyu büyülüyor. Diyalogların şiirselliği ve trajedinin kaçınılmazlığı, eseri yüzyıllardır en çok okunan ve sahnelenen oyun yapıyor. Kalbinizin kırılmasını göze alarak okuyun.'
    ],
    9 => [
        'title' => 'Genç Wertherin Acıları',
        'author' => 'Johann Wolfgang von Goethe',
        'date' => '14.10.2025',
        'summary' => 'Karşılıksız bir aşkın yarattığı umutsuzluk girdabı. Werther\'in Lotte\'ye duyduğu platonik aşk, Avrupa\'da intihar salgınlarına yol açan bir romantizm manifestosu.',
        'full_review' => 'Mektuplardan oluşan bu kısa roman, Werther\'in iç dünyasına bir pencere açıyor. Onun doğaya olan hayranlığını, sanata olan tutkusunu ve nihayetinde Lotte\'ye duyduğu tüketici aşkı okuyorsunuz. Kitap, rasyonellikten uzak, saf duygusallığın ve bireyciliğin yükselişini müjdeliyordu. Okurken Werther\'in dramına üzülmekle, onun abartılı duygusallığına sinirlenmek arasında kalıyorsunuz. Ama romantizm çağının ruhunu anlamak için kesinlikle okunmalı.'
    ],
    10 => [
        'title' => 'Uğultulu Tepeler',
        'author' => 'Emily Brontë',
        'date' => '12.10.2025',
        'summary' => 'Sıradan bir aşk hikayesinden çok, intikamın, tutkunun ve toplumsal sınıf farkının yarattığı yıkımın romanı. Heathcliff ve Catherine: Edebiyatın en karanlık çifti.',
        'full_review' => 'Brontë\'nin bu gotik romanı, İngiliz kırsalının vahşi ve melankolik atmosferinde geçiyor. Heathcliff\'in düşük sosyal statüsü nedeniyle Catherine ile evlenememesi, onu yıllarca sürecek bir intikam sarmalına itiyor. Aşk ve nefretin sınırlarının bulanıklaştığı bu hikaye, okuyucuyu rahatsız ederken aynı zamanda kendine hayran bırakıyor. Psikolojik yoğunluğu ve eşsiz anlatımıyla bir edebi şaheser.'
    ],
    11 => [
        'title' => 'İnsanlığımı Yitirirken',
        'author' => 'Osamu Dazai',
        'date' => '10.10.2025',
        'summary' => 'Hayatı boyunca insanlardan saklanan, gülümseyen bir maskenin ardına sığınan Yōzō\'nun içten ve acı dolu itirafı. Japon edebiyatının derin hüzünlü klasiği.',
        'full_review' => 'Dazai\'nin bu otobiyografik eseri, yazarın kendi yaşamından yoğun izler taşıyor. Başkahraman Yōzō\'nun, insanlarla kurduğu yapmacık ilişkilere ve nihayetinde yaşadığı toplumsal yabancılaşmaya tanık oluyoruz. Kitap, modern bireyin yalnızlığını, depresyonunu ve topluma uyum sağlama çabasının getirdiği yorgunluğu öyle dürüstçe anlatıyor ki, okuyucuyu derinden etkiliyor. Kısa ama etkisi büyük, yoğun bir okuma deneyimi.'
    ],
    12 => [
        'title' => 'Körlük',
        'author' => 'José Saramago',
        'date' => '08.10.2025',
        'summary' => 'Beyaz bir körlük salgını tüm ülkeyi sarar. Medeniyet çökerken, Saramago insanlığın ne kadar vahşileşebileceğini ve bir kadının gözüyle umudu keşfetmesini anlatır.',
        'full_review' => 'Saramago, distopik kurgusunda karakterlere isim vermeyerek hikayeyi evrenselleştiriyor. Bu, sadece görme duyusunu kaybetmenin değil, ahlaki pusulayı kaybetmenin hikayesi. Salgınla birlikte ortaya çıkan vahşet ve hayatta kalma mücadelesi sarsıcı. Ama tüm karanlığın ortasında, görme yeteneğini kaybetmeyen tek bir kadının liderliği, insan ruhunun dayanıklılığını ve şefkatin gücünü gösteriyor.'
    ],
    13 => [
        'title' => 'Yaz Dediler Anı',
        'author' => 'Oğuz Atay',
        'date' => '06.10.2025',
        'summary' => 'Türk edebiyatının en zeki ve en ironik kalemi. Hayatın saçmalığı, aydınların çaresizliği ve varoluş üzerine zihin açıcı öyküler ve denemeler.',
        'full_review' => 'Oğuz Atay okumak zordur ama bir o kadar da keyiflidir. Bu derleme, yazarın okuyucuyla kurduğu o mesafeli, alaycı ama samimi üslubunu en iyi yansıtan eserlerinden. Özellikle "Korkuyu Beklerken" hikayesi, insanın kendi içindeki bilinmezliklerle yüzleşmesini anlatır. Atay, zihninizde karmaşık, iç içe geçmiş kapılar açar. Türk modernizmi ve postmodernizmini anlamak isteyenler için vazgeçilmez bir eser.'
    ],
    14 => [
        'title' => 'Vadideki Zambak',
        'author' => 'Honoré de Balzac',
        'date' => '04.10.2025',
        'summary' => 'On dokuzuncu yüzyıl Fransası\'nda yasaklanmış, platonik bir aşkın mektuplarla örülmüş hüzünlü dramı. Romantizmin acıtan güzelliği.',
        'full_review' => 'Balzac\'ın bu eseri, genç Félix\'in kendisinden yaşça büyük, evli ve mutsuz Henriette de Mortsauf\'a duyduğu saf ve idealize edilmiş aşkı anlatır. Roman, aşkın imkansızlığı ve saflığı üzerine bir ağıttır. Dönemin toplumsal baskısı ve ahlaki değerleri, bu aşkın sadece mektuplarda ve hayallerde kalmasına neden olur. Duygusallığı ve karakterlerin iç dünyasının zenginliği, eseri dramatik bir klasik yapar.'
    ],
    15 => [
        'title' => 'Simyacı', 'author' => 'Paulo Coelho', 'date' => '2025-12-12',
        'summary' => 'Hazinesini arayan çoban Santiago\'nun ruhani yolculuğu. Kişisel efsanenizin peşinden gitmenin ve evrenin işaretlerini okumanın felsefesi.',
        'full_review' => 'Coelho\'nun en ünlü eseri, basit bir macera hikayesi gibi görünse de, derin bir motivasyon kaynağıdır. Okuyucuyu, hayallerinin peşinden gitmeye teşvik eder. Okunması kolay, ancak etkisi büyük bir modern klasiktir.'
    ],
    16 => [
        'title' => 'Otomatik Portakal', 'author' => 'Anthony Burgess', 'date' => '2025-12-10',
        'summary' => 'Genç Alex\'in şiddet dolu dünyası ve bu şiddeti devlet eliyle ortadan kaldırma girişimi. Özgür irade, ahlak ve toplumsal kontrol üzerine sert bir distopya.',
        'full_review' => 'Burgess\'ın yarattığı kendine özgü dil (Nadsat) başta zorlayıcı olsa da, kitabın temel felsefesi evrenseldir: Bir insana iyiliği zorla dayatmak, onun kötülük yapma özgürlüğünü elinden almak mıdır? İnsan doğasını ve devletin sınırlarını sorgulayan sarsıcı bir deneyim.'
    ],
    17 => [
        'title' => '1984', 'author' => 'George Orwell', 'date' => '2025-12-08',
        'summary' => 'Büyük Birader\'in gözetimindeki totaliter Okyanusya rejiminde yaşayan Winston Smith\'in isyan çabası. Distopik edebiyatın en önemli eseri.',
        'full_review' => 'Orwell\'ın bu eseri, iktidarın dili, tarihi ve düşünceyi nasıl manipüle edebileceğini çarpıcı biçimde gösterir. "Yenikonuş" ve "Düşünce Polisi" gibi kavramlar, özgürlüğün ne kadar değerli ve kırılgan olduğunu hatırlatan, geleceği öngören bir klasiğidir.'
    ],
    18 => [
        'title' => 'Cesur Yeni Dünya', 'author' => 'Aldous Huxley', 'date' => '2025-12-05',
        'summary' => 'Duygusal bağların, sanatın ve geçmişin yasaklandığı, genetik olarak sınıflara ayrılmış mükemmel bir gelecekteki huzursuzluk ve isyan.',
        'full_review' => 'Huxley, zevk ve haz yoluyla kontrol edilen bir distopya sunar. İnsanların mutsuzluğu unutmaları için sürekli "Soma" adlı bir uyuşturucu kullanmaları gerekir. Kitap, bireyselliğin ve gerçek acının değerini sorgulayan, felsefi açıdan derin bir eserdir.'
    ],
    19 => [
        'title' => 'Yüzyıllık Yalnızlık', 'author' => 'Gabriel Garcia Marquez', 'date' => '2025-12-02',
        'summary' => 'Buendia ailesinin yedi kuşağını kapsayan, Macondo kasabasının kuruluş ve çöküş destanı. Büyülü gerçekçilik akımının en görkemli örneği.',
        'full_review' => 'Marquez, bu eserde mitleri, tarihi ve kişisel kaderleri birleştirerek eşsiz bir dünya yaratmıştır. Kitap, yalnızlığın, aşkın ve zamanın döngüsel doğasını keşfeder. Edebiyatı seven herkesin mutlaka okuması gereken, yoğun ve büyülü bir romandır.'
    ],
    20 => [
        'title' => 'Kürk Mantolu Madonna', 'author' => 'Sabahattin Ali', 'date' => '2025-11-28',
        'summary' => 'İçine kapanık Raif Efendi\'nin gençliğinde Berlin\'de karşılaştığı, ressam Maria Puder\'e duyduğu imkansız aşkın ve hayal kırıklığının hikayesi.',
        'full_review' => 'Sabahattin Ali\'nin eseri, Türk edebiyatının en derin psikolojik romanlarından biridir. Raif Efendi karakteri, çekingenliği ve duygusal zenginliğiyle okuyucuyu derinden etkiler. Aşk, hayal kırıklığı ve insanın kendi içine çekilme arzusunu mükemmel anlatır.'
    ],
    21 => [
        'title' => 'Kayıp Tanrılar Ülkesi', 'author' => 'Ahmet Ümit', 'date' => '2025-11-25',
        'summary' => 'Berlin\'deki Bergama Müzesi\'nde işlenen gizemli bir cinayet ve Komiser Nevzat\'ın izleri Antik Yunan mitolojisine kadar süren soruşturması.',
        'full_review' => 'Ahmet Ümit, polisiye kurgusunu, tarih ve mitoloji bilgisiyle harmanlayarak okuyucuyu hem heyecanlı bir maceraya hem de Antik Yunan tanrılarının dünyasına götürüyor. Sürükleyici temposu ve kültürel derinliğiyle başarılı bir Türk polisiyesi örneğidir.'
    ],
    22 => [
        'title' => 'Körlük', 'author' => 'José Saramago', 'date' => '2025-11-22',
        'summary' => 'Tüm ülkeyi saran beyaz bir körlük salgını sonrası medeniyetin çöküşü. İnsanlığın vahşileşmesini ve bir kadının gözünden umudu anlatır.',
        'full_review' => 'Saramago, karakterlere isim vermeyerek hikayeyi evrenselleştirir. Ahlaki pusulanın kayboluşunu ve hayatta kalma mücadelesini sarsıcı bir şekilde anlatırken, karanlığın ortasında insan ruhunun dayanıklılığını gösterir.'
    ],
    23 => [
        'title' => 'Fahrenheit 451', 'author' => 'Ray Bradbury', 'date' => '2025-11-19',
        'summary' => 'Kitapların yakıldığı distopik bir gelecekte yaşayan itfaiyeci Guy Montag\'ın mesleğini sorgulamasını ve yeraltı direnişine katılmasını konu alır.',
        'full_review' => 'Bradbury\'nin bu eseri, bilginin, eleştirel düşüncenin ve okuma alışkanlığının yok edilmesinin sonuçlarını güçlü bir dille işler. Kitap, televizyonun ve yüzeysel eğlencenin toplumu nasıl uyuşturabileceği konusunda günümüzde bile geçerli olan önemli bir uyarıdır.'
    ],
    24 => [
        'title' => 'Tutunamayanlar', 'author' => 'Oğuz Atay', 'date' => '2025-11-16',
        'summary' => 'Selim Işık\'ın intiharının ardındaki gizemi çözmeye çalışan Turgut Özben\'in, modern toplumda kendine yer bulamayan aydınların iç dünyasına yaptığı yolculuk.',
        'full_review' => 'Türk edebiyatının en karmaşık ve zeki eserlerinden biridir. Postmodern teknikleri, ironiyi ve derin bir varoluşsal sorgulamayı harmanlar. Tutunamayanlar, sadece bir roman değil, okuyucuyu kendi kimliğini ve toplumdaki yerini sorgulamaya iten bir deneyimdir.'
    ],
    25 => [
        'title' => 'Gönülçelen', 'author' => 'Vladimir Nabokov', 'date' => '2025-11-13',
        'summary' => 'Belleğin güvenilmezliği, sanat ve takıntılı aşk temalarını işleyen, Humbert Humbert\'in genç bir kıza duyduğu yıkıcı tutkunun anlatıldığı tartışmalı bir başyapıt.',
        'full_review' => 'Nabokov\'un dili kullanmadaki ustalığı ve edebi oyunları inanılmazdır. Kitap, etik sınırları zorlarken, aynı zamanda anlatıcının manipülatif ve çarpıtılmış bakış açısıyla okuyucuyu rahatsız eder. Yüzeysel bir hikayeden çok, dehanın ve deliliğin karmaşık bir incelemesidir.'
    ],
    26 => [
        'title' => 'Deniz Feneri', 'author' => 'Virginia Woolf', 'date' => '2025-11-10',
        'summary' => 'Ramsay ailesinin yazlık evinde geçen, iki farklı zaman diliminde (on yıl arayla) karakterlerin iç dünyalarını, bilinç akışı tekniğiyle aktaran modernist roman.',
        'full_review' => 'Woolf\'un bu eseri, olay örgüsünden çok, karakterlerin düşünce ve duygularına odaklanır. Işık, deniz feneri ve zaman gibi imgeler, varoluşun gelip geçiciliğini ve anlık deneyimlerin derinliğini sembolize eder. Modernist edebiyatın en önemli ve lirik eserlerinden biridir.'
    ],
    27 => [
        'title' => 'Dokuzuncu Hariciye Koğuşu', 'author' => 'Peyami Safa', 'date' => '2025-11-07',
        'summary' => 'Bedenin ve ruhun çaresizliği... Hastane koridorlarının ve karşılıksız bir aşkın gölgesinde büyüyen hasta bir gencin otobiyografik çığlığı. Yalnızlık ve kıskançlığın romanı.',
        'full_review' => 'Peyami Safa\'nın kendi yaşamından izler taşıyan bu eser, bir gencin fiziksel hastalığıyla birlikte yaşadığı duygusal karmaşayı inanılmaz bir içtenlikle anlatıyor. Hastalığı bir felsefi sorgulama aracı olarak kullanışı, eseri Türk edebiyatının en psikolojik romanlarından biri yapıyor.'
    ],
    28 => [
        'title' => 'Sineklerin Tanrısı', 'author' => 'William Golding', 'date' => '2025-11-04',
        'summary' => 'Uçak kazasında ıssız bir adaya düşen bir grup okul çocuğunun, medeniyetten uzaklaştıkça nasıl vahşileşip ilkel içgüdülerine yenik düştüğünü anlatan alegorik roman.',
        'full_review' => 'Golding, bu eserde insan doğasının karanlık ve yıkıcı yüzünü sorgular. Çocukların kurmaya çalıştığı düzenin kısa sürede kaosa dönüşmesi, yazarın kötülüğün dışsal değil, insanın özünde var olduğu tezini destekler.'
    ],
    29 => [
        'title' => 'Anna Karenina', 'author' => 'Leo Tolstoy', 'date' => '2025-11-01',
        'summary' => 'Rus toplumunun ahlak kuralları ve beklentileri arasında tutkulu ve trajik bir aşk yaşayan Anna Karenina ile Levin\'in sade hayat arayışının anlatıldığı epik roman.',
        'full_review' => 'Tolstoy\'un başyapıtı, sadece bir aşk hikayesi değil, aynı zamanda 19. yüzyıl Rus toplumunun sosyal, felsefi ve ekonomik yapısının geniş bir panoramasıdır. Evlilik, ahlak, şehvet ve maneviyat gibi temaları derinlemesine inceler. Edebiyat tarihinin en büyük eserlerinden biridir.'
    ],
    30 => [
        'title' => 'Palto', 'author' => 'Nikolay Gogol', 'date' => '2025-10-29',
        'summary' => 'Petersburg\'da yaşayan ve tüm varlığını yeni bir paltoya adamış, ezik bir memur olan Akakiy Akakiyeviç\'in trajikomik hikayesi. "Küçük adam" temasının başlangıcı.',
        'full_review' => 'Gogol\'un bu novellası, hem komik hem de yürek burkucudur. Palto, Akakiy için sadece bir giysi değil, sosyal statü ve varoluşun kendisidir. Rus edebiyatının birçok büyük yazarını etkilemiş, sıradan bir insanın hayalleri ve yıkımı üzerine derin bir taşlamadır.'
    ]
);

$requested_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$requested_page = isset($_GET['page']) ? $_GET['page'] : 'list';

$current_book = null;
$page_type = 'list';

if ($requested_id > 0) {
    if (isset($books[$requested_id])) { 
        $current_book = $books[$requested_id];
        $page_type = 'detail';
    }
} elseif ($requested_page == 'about' OR $requested_page == 'contact') { 
    $page_type = 'static';
} 

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Blog | <?php 
        if ($page_type == 'detail') { 
            echo $current_book['title'] . ' Yorumu';
        } elseif ($page_type == 'static' AND $requested_page == 'about') { 
            echo 'Hakkımızda';
        } elseif ($page_type == 'static' AND $requested_page == 'contact') {
            echo 'İletişim';
        } else {
            echo 'Ana Sayfa';
        }
    ?></title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

<header class="site-header">
    <h1>Nova Blog</h1>
   <header class="site-header">

    <nav>
        <a href="index.php">Ana Sayfa</a>
        <a href="index.php?page=about">Hakkımızda</a> 
        <a href="index.php?page=contact">İletişim</a>
        
        <?php
        
        if (isset($_SESSION['user_id'])) {
            
            echo '<div class="user-menu" style="display: inline-block;">';
            echo '<a href="panel.php" class="auth-button profile-button" style="background-color: #d4ac7d; color: white;">👤 ' . htmlspecialchars($_SESSION['username']) . '</a>';
            echo '<a href="logout.php" class="auth-button logout-button" style="margin-left: 10px;">Çıkış</a>';
            echo '</div>';
        } else {
            
            echo '<a href="login.php" class="auth-button login-button">Giriş Yap / Kayıt Ol</a>';
        }
        ?>
    </nav>
</header>
</header>

<main class="container">
    
    <?php if ($page_type == 'list'): ?>
        
        <section class="posts-list" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
            
            <?php foreach ($books as $id => $book):  ?>
                <article class="book-card" style="width: 300px; border: 1px solid #ddd; padding: 15px; border-radius: 10px; background: #fff; transition: 0.3s; position: relative;">
                    
                    <div class="book-card-cover"></div>

                    <div class="book-content">
                        <h3 style="margin-top:0;"><?php echo $book['title']; ?></h3>
                        <p style="font-style: italic; color: #666; font-size: 0.9em;"><?php echo $book['author']; ?></p>
                        <p class="post-meta" style="font-size: 0.8em; color: #999;">Yorum Tarihi: <?php echo $book['date']; ?></p>
                        
                        <div class="book-details" style="opacity:0; transition: 0.3s; transform: translateY(10px);">
                            <p class="post-summary" style="font-size: 0.85em; color: #444;"><?php echo $book['summary']; ?></p>
                            <a href="index.php?id=<?php echo $id; ?>" class="read-more" style="color: #b8860b; font-weight: bold; text-decoration: none;">Yorumun Tamamını Oku &raquo;</a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>

        </section>
        
    <?php elseif ($page_type == 'detail'): ?>
        
        <section class="review-detail">
            <p><a href="index.php" class="back-link" style="text-decoration: none; color: #b8860b;">&laquo; Tüm Yorumlara Geri Dön</a></p>
            
            <h2><?php echo $current_book['title']; ?></h2>
            <p class="author-info">Yazar: <strong><?php echo $current_book['author']; ?></strong></p>
            <p class="post-meta">Yorum Tarihi: <span><?php echo $current_book['date']; ?></span></p>
            
            <hr style="border: 0.5px solid #eee;">
            
            <div class="full-content">
                <p><strong>Tam Yorumumuz:</strong></p>
                <p style="line-height: 1.6;"><?php echo $current_book['full_review']; ?></p>
            </div>

        </section>
        
    <?php elseif ($page_type == 'static' AND $requested_page == 'about'): ?>
        
        <section class="static-content">
            <h2>Hakkımızda</h2>
            <p>Biz, tutkulu kitap okuyucularından oluşan bir ekibiz. Amacımız, en sevdiğimiz kitaplar hakkında dürüst ve ilham verici yorumlar sunmaktır.</p>
            <p>İyi okumalar!</p>
            <p><a href="index.php" style="color: #b8860b;">Ana Sayfaya Geri Dön</a></p>
        </section>
        
    <?php elseif ($page_type == 'static' AND $requested_page == 'contact'): ?>
        
        <section class="static-content">
            <h2>İletişim</h2>
            <p>Bize yorum, öneri ve kitap tavsiyeleriniz için ulaşabilirsiniz:</p>
            <ul>
                <li>E-posta: info@NovaBlog.com</li>
                <li>Sosyal Medya: @NovaBlog</li>
            </ul>
        </section>
        
    <?php endif; ?>

</main>

<footer class="site-footer" style="text-align: center; padding: 20px; margin-top: 40px; border-top: 1px solid #ddd;">
    <p>&copy; <?php echo date('Y'); ?> Nova Blog </p>
</footer>

<script src="script.js"></script> 

</body>
</html>

