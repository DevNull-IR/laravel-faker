<?php

namespace DevNullIr\LaravelFaker\core\traits;

trait address
{
    protected $citys = [
        "آذربايجان شرقي",
        "آذربايجان غربي",
        "اردبيل",
        "اصفهان",
        "البرز",
        "ايلام",
        "بوشهر",
        "تهران",
        "چهارمحال بختياري",
        "خراسان جنوبي",
        "خراسان رضوي",
        "خراسان شمالي",
        "خوزستان",
        "زنجان",
        "سمنان",
        "سيستان و بلوچستان",
        "فارس",
        "قزوين",
        "قم",
        "كردستان",
        "كرمان",
        "كرمانشاه",
        "كهكيلويه و بويراحمد",
        "گلستان",
        "گيلان",
        "لرستان",
        "مازندران",
        "مركزي",
        "هرمزگان",
        "همدان",
        "يزد"
    ];

    protected $street = [
        "مطهری",
        "عبادی",
        "حسین باشی",
        "شیشه چی",
        "عباس آباد",
        "شهید رجایی",
        "پست",
        "آبکوه",
        "آبعلی",
        "شهدا",
        "پروین اعتصامی",
        "صدر",
        "شیرودی",
        "شیرازی",
        "چمن",
        "بهمن",
        "گاز",
        "سعدی"
    ];

    protected $town = [
        "آذر شهر",
        "اسكو",
        "اهر",
        "بستان آباد",
        "بناب",
        "بندر شرفخانه",
        "تبريز",
        "تسوج",
        "جلفا",
        "سراب",
        "شبستر",
        "صوفیان",
        "عجبشير",
        "قره آغاج",
        "كليبر",
        "كندوان",
        "مراغه",
        "مرند",
        "ملكان",
        "ممقان",
        "ميانه",
        "هاديشهر",
        "هريس",
        "هشترود",
        "ورزقان",
        "اروميه",
        "اشنويه",
        "بازرگان",
        "بوكان",
        "پلدشت",
        "پيرانشهر",
        "تكاب",
        "خوي",
        "سردشت",
        "سلماس",
        "سيه چشمه- چالدران",
        "سیمینه",
        "شاهين دژ",
        "شوط",
        "ماكو",
        "مهاباد",
        "مياندوآب",
        "نقده",
        "اردبيل",
        "بيله سوار",
        "پارس آباد",
        "خلخال",
        "سرعين",
        "كيوي (كوثر)",
        "گرمي (مغان)",
        "مشگين شهر",
        "مغان (سمنان)",
        "نمين",
        "نير",
        "آران و بيدگل",
        "اردستان",
        "اصفهان",
        "باغ بهادران",
        "تيران",
        "خميني شهر",
        "خوانسار",
        "دهاقان",
        "دولت آباد-اصفهان",
        "زرين شهر",
        "زيباشهر (محمديه)",
        "سميرم",
        "شاهين شهر",
        "شهرضا",
        "فريدن",
        "فريدون شهر",
        "فلاورجان",
        "فولاد شهر",
        "قهدریجان",
        "كاشان",
        "گلپايگان",
        "گلدشت اصفهان",
        "گلدشت مركزی",
        "مباركه اصفهان",
        "مهاباد-اصفهان",
        "نايين",
        "نجف آباد",
        "نطنز",
        "هرند",
        "آسارا",
        "اشتهارد",
        "شهر جديد هشتگرد",
        "طالقان",
        "كرج",
        "گلستان تهران",
        "نظرآباد",
        "هشتگرد",
        "آبدانان",
        "ايلام",
        "ايوان",
        "دره شهر",
        "دهلران",
        "سرابله",
        "شيروان چرداول",
        "مهران",
        "آبپخش",
        "اهرم",
        "برازجان",
        "بندر دير",
        "بندر ديلم",
        "بندر كنگان",
        "بندر گناوه",
        "بوشهر",
        "تنگستان",
        "جزيره خارك",
        "جم (ولايت)",
        "خورموج",
        "دشتستان - شبانکاره",
        "دلوار",
        "عسلویه",
        "اسلامشهر",
        "بومهن",
        "پاكدشت",
        "تهران",
        "چهاردانگه",
        "دماوند",
        "رودهن",
        "ري",
        "شريف آباد",
        "شهر رباط كريم",
        "شهر شهريار",
        "فشم",
        "فيروزكوه",
        "قدس",
        "كهريزك",
        "لواسان بزرگ",
        "ملارد",
        "ورامين",
        "اردل",
        "بروجن",
        "چلگرد (كوهرنگ)",
        "سامان",
        "شهركرد",
        "فارسان",
        "لردگان",
        "بشرویه",
        "بيرجند",
        "خضری",
        "خوسف",
        "سرایان",
        "سربيشه",
        "طبس",
        "فردوس",
        "قائن",
        "نهبندان",
        "بجستان",
        "بردسكن",
        "تايباد",
        "تربت جام",
        "تربت حيدريه",
        "جغتای",
        "جوین",
        "چناران",
        "خلیل آباد",
        "خواف",
        "درگز",
        "رشتخوار",
        "سبزوار",
        "سرخس",
        "طبس",
        "طرقبه",
        "فريمان",
        "قوچان",
        "كاشمر",
        "كلات",
        "گناباد",
        "مشهد",
        "نيشابور",
        "آشخانه، مانه و سمرقان",
        "اسفراين",
        "بجنورد",
        "جاجرم",
        "شيروان",
        "فاروج",
        "آبادان",
        "اميديه",
        "انديمشك",
        "اهواز",
        "ايذه",
        "باغ ملك",
        "بستان",
        "بندر ماهشهر",
        "بندرامام خميني",
        "بهبهان",
        "خرمشهر",
        "دزفول",
        "رامشیر",
        "رامهرمز",
        "سوسنگرد",
        "شادگان",
        "شوش",
        "شوشتر",
        "لالي",
        "مسجد سليمان",
        "هنديجان",
        "هويزه",
        "آب بر (طارم)",
        "ابهر",
        "خرمدره",
        "زرین آباد (ایجرود)",
        "زنجان",
        "قیدار (خدا بنده)",
        "ماهنشان",
        "ايوانكي",
        "بسطام",
        "دامغان",
        "سرخه",
        "سمنان",
        "شاهرود",
        "شهمیرزاد",
        "گرمسار",
        "مهدیشهر",
        "ايرانشهر",
        "چابهار",
        "خاش",
        "راسك",
        "زابل",
        "زاهدان",
        "سراوان",
        "سرباز",
        "ميرجاوه",
        "نيكشهر",
        "آباده",
        "آباده طشك",
        "اردكان",
        "ارسنجان",
        "استهبان",
        "اشكنان",
        "اقليد",
        "اوز",
        "ایج",
        "ایزد خواست",
        "باب انار",
        "بالاده",
        "بنارويه",
        "بهمن",
        "بوانات",
        "بيرم",
        "بیضا",
        "جنت شهر",
        "جهرم",
        "حاجي آباد-زرین دشت",
        "خاوران",
        "خرامه",
        "خشت",
        "خفر",
        "خنج",
        "خور",
        "داراب",
        "رونيز عليا",
        "زاهدشهر",
        "زرقان",
        "سده",
        "سروستان",
        "سعادت شهر",
        "سورمق",
        "ششده",
        "شيراز",
        "صغاد",
        "صفاشهر",
        "علاء مرودشت",
        "عنبر",
        "فراشبند",
        "فسا",
        "فيروز آباد",
        "قائميه",
        "قادر آباد",
        "قطب آباد",
        "قير",
        "كازرون",
        "كنار تخته",
        "گراش",
        "لار",
        "لامرد",
        "لپوئی",
        "لطيفي",
        "مبارك آباد ديز",
        "مرودشت",
        "مشكان",
        "مصير",
        "مهر فارس(گله دار)",
        "ميمند",
        "نوبندگان",
        "نودان",
        "نورآباد",
        "ني ريز",
        "کوار",
        "آبيك",
        "البرز",
        "بوئين زهرا",
        "تاكستان",
        "قزوين",
        "محمود آباد نمونه",
        "قم",
        "بانه",
        "بيجار",
        "دهگلان",
        "ديواندره",
        "سقز",
        "سنندج",
        "قروه",
        "كامياران",
        "مريوان",
        "بابك",
        "بافت",
        "بردسير",
        "بم",
        "جيرفت",
        "راور",
        "رفسنجان",
        "زرند",
        "سيرجان",
        "كرمان",
        "كهنوج",
        "منوجان",
        "اسلام آباد غرب",
        "پاوه",
        "تازه آباد- ثلاث باباجانی",
        "جوانرود",
        "سر پل ذهاب",
        "سنقر كليائي",
        "صحنه",
        "قصر شيرين",
        "كرمانشاه",
        "كنگاور",
        "گيلان غرب",
        "هرسين",
        "دهدشت",
        "دوگنبدان",
        "سي سخت- دنا",
        "گچساران",
        "ياسوج",
        "آزاد شهر",
        "آق قلا",
        "انبارآلوم",
        "اینچه برون",
        "بندر گز",
        "تركمن",
        "جلین",
        "خان ببین",
        "راميان",
        "سرخس کلاته",
        "سیمین شهر",
        "علي آباد كتول",
        "فاضل آباد",
        "كردكوي",
        "كلاله",
        "گالیکش",
        "گرگان",
        "گمیش تپه",
        "گنبد كاووس",
        "مراوه تپه",
        "مينو دشت",
        "نگین شهر",
        "نوده خاندوز",
        "نوکنده",
        "آستارا",
        "آستانه اشرفيه",
        "املش",
        "بندرانزلي",
        "خمام",
        "رشت",
        "رضوان شهر",
        "رود سر",
        "رودبار",
        "سياهكل",
        "شفت",
        "صومعه سرا",
        "فومن",
        "كلاچاي",
        "لاهيجان",
        "لنگرود",
        "لوشان",
        "ماسال",
        "ماسوله",
        "منجيل",
        "هشتپر",
        "ازنا",
        "الشتر",
        "اليگودرز",
        "بروجرد",
        "پلدختر",
        "خرم آباد",
        "دورود",
        "سپید دشت",
        "كوهدشت",
        "نورآباد (خوزستان)",
        "آمل",
        "بابل",
        "بابلسر",
        "بلده",
        "بهشهر",
        "پل سفيد",
        "تنكابن",
        "جويبار",
        "چالوس",
        "خرم آباد",
        "رامسر",
        "رستم کلا",
        "ساري",
        "سلمانشهر",
        "سواد كوه",
        "فريدون كنار",
        "قائم شهر",
        "گلوگاه",
        "محمودآباد",
        "مرزن آباد",
        "نكا",
        "نور",
        "نوشهر",
        "آشتيان",
        "اراك",
        "تفرش",
        "خمين",
        "دليجان",
        "ساوه",
        "شازند",
        "محلات",
        "کمیجان",
        "ابوموسي",
        "انگهران",
        "بستك",
        "بندر جاسك",
        "بندر لنگه",
        "بندرعباس",
        "پارسیان",
        "حاجي آباد",
        "دشتی",
        "دهبارز (رودان)",
        "قشم",
        "كيش",
        "ميناب",
        "اسدآباد",
        "بهار",
        "تويسركان",
        "رزن",
        "كبودر اهنگ",
        "ملاير",
        "نهاوند",
        "همدان",
        "ابركوه",
        "اردكان",
        "اشكذر",
        "بافق",
        "تفت",
        "مهريز",
        "ميبد",
        "هرات",
        "يزد"
    ];
    protected function rand(array $array = null): int{
        return rand(0, count($array ?? $this->citys) - 1);
    }
    private $getAddress;
    public function getAddress(): string
    {
        $mb = $this->street[$this->rand($this->street)];
        $address = "";
        $address .= "ایران، " . $this->citys[$this->rand()];
        $address .= "، شهر " . $this->town[$this->rand($this->town)];
        $address .= "، خیابان " . $mb . "، ";
        $address .= $mb . " " . rand(1, 110);
        $address .= "، پلاک: " . rand(1, 110);
        $address .= "، طبقه:" . rand(1, 10);
        return $address;
    }
    private $getAddressArray;
    public function getAddressArray(): array
    {
        $array = [];
        $mb = $this->street[$this->rand($this->street)];
        $city = $this->citys[$this->rand()];
        $town = $this->town[$this->rand($this->town)];
        $address = "";
        $address .= "ایران، " . $city;
        $address .= "، شهر " . $town;
        $address .= "، خیابان " . $mb . "، ";
        $address .= $mb . " " . rand(1, 110);
        $address .= "، پلاک: " . rand(1, 110);
        $address .= "، طبقه:" . rand(1, 10);
        $array['country'] = "ایران، " . $city;
        $array['city'] = $town;
        $array['street'] = $mb;
        $array['street_loc'] = $mb . " " . rand(1, 110);
        $array['plock'] = rand(1, 110);
        $array['vahed'] = rand(1, 10);
        $array['address'] = $address;
        return $array;
    }
    private $getMultiAddress;
    public function getMultiAddress(int $range = 3): array
    {
        $arrayAddress = [];
        foreach (range(1, $range) as $i){
            $arrayAddress[] = $this->getAddressArray();
        }
        return $arrayAddress;
    }
    private $city;
    public function city(): string
    {
        return $this->citys[$this->rand()];
    }
}
