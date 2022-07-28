<?php

namespace DevNullIr\LaravelFaker\core\traits;

use Illuminate\Support\Str;

trait Strings
{
    protected $paragraphs = [
        'داشتن یک دستیار هوشــمند براي انجام کارهاي مختلف بسیار خوب است، اما آیا میدانید دستیار گوگل ملقب به Google Assistant همه فرمانهاي صوتی شما را براي اجرا ابتدا در سرورهاي گوگل و در ادامه یک نسخه از آن را
نیز در فضاي ذخیرهسازي شخصی شما ذخیره میکند؟' ,
        'ایــن روزهــا تقریبا تمــام رایانهها قادر بــه اجراي سیستمعاملهاي 64 بیتی هستند، اما پشتیبانی رایانهها از این نسخه دلیل نمیشود تمام سیستمعاملهاي نصب شده توســط کاربران نیز نسخه 64 بیت باشد و ممکن اســت رایانه یک کاربر به نسخه 32 بیت سیستمعامل
مجهز شده باشــد.',
        'در وینــدوز 10 بــا غیرفعال کــردن ســرویس Windows Update و غیرفعال کردن
Configure Automatic Updates درGroup Policy Editor - gpedit.msc بــا وارد شــدن به Update history چــه در بخش Settings و چه در بخــش Installed Update در Programs and Features هیــچ اثــري از آپدیتهــاي قبلی که نصب شــدهاند، وجود نــدارد و عبــارت No updates are installed on this computer مشــاهده میشــود. ســوالم این اســت که با غیرفعال کردن آنچه در بالا گفته شــد، آیــا آن آپدیتهایی که نصب شــدهاند غیرفعال میشــوند و کار نمیکنند یا این غیرفعال کردن فقط باعث جلوگیري از آپدیت
خودکار است؟',
        'یکی از مشکلات اصلی ساعتهاي هوشمند، تمام شدن سریع شارژ آنهاست. در این میان، ماتریکس پاورواچ )Matrix PowerWatch( رویکردي متفاوت را در پیش گرفته و از یک فناوري قدیمیتر براي تامین انرژي موردنیاز دســتگاه استفاده میکند. در این فناوري، گرماي مچ دســت کاربر که با ســاعت در تماس است، مورد استفاده قرار میگیرد. ساعت هوشمند ماتریکس پاورواچ با استفاده از فناوري بلوتوث میتواند اعلانات مختلف )نظیر تماس یا پیامک دریافتی( را به اطلاع کاربر
برســاند. این گجت همچنین برخی کاربردهاي دستبندهاي
هوشمند ورزشــی )نظیر نمایش میزان کالري مصرف شده
طی فعالیت فیزیکی( را نیز در خود دارد. ماتریکس پاورواچ
ضدآب بوده و میتواند تا 200 متر زیر آب همچنان کار کند.
همچنین تیم طراحی این محصول کوشیده ساختاري مقاوم
در شرایط مختلف را براي آن ایجاد کند. هنوز هیچ اطلاعاتی
درباره زمان عرضه و قیمت این محصول اعلام نشده است' ,
        'شــرکت کالگیت بتازگی از محصــول جدید خود با نام E1 رونمایی کرده که یک مســواك برقی هوشمند است. این مســواك با بهرهگیري از حسگرهاي مختلف خود میتواند موقعیت و زمان صرف شده براي مسواك زدن بخشهاي مختلف دهان را تعیین کند و در صورت جاماندن هر بخشی از دندانها، آن را به کاربر اعلام کند. همچنین الگوریتم خاص این مســواك میتواند بتدریج با عادتهاي کاربر آشــنا شده و توصیههایی دقیقتر به
او ارائه دهد. نرمافزار این مســواك بر اســاس پلتفرم ResearchKit شــرکت اپل توسعهیافته است. این پلتفرم براي کمک به پژوهشگران و توسهدهندگان تجهیزات مرتبط با سلامت و پزشکی طراحی شده است. مسواك E1 ارتعاشاتی با امواج صوتی ایجاد کرده که به تمیزتر شــدن دندانها و از بین بردن بهتر مواد زاید روي آنها کمک میکند. باتري
این مسواك با هر بار شارژ میتواند تا ده روز کار کند. قیمت این محصول 96 دلار است.',
        'با افزایش تعداد دســتگاههاي مختلف الکترونیکی در خانــه، باید از دســتگاه کنترل از راه دور ویــژه هر کدام استفاده کرد. شاید در خانه شما نیز براي تلویزیون، گیرنده دیجیتال، پخش استریو و کولر یک کنترل از راه دور وجود داشــته باشد و احتمالا در چند سال آینده نیز بر تعداد آنها اضافه میشــود. یوگو )Ugo( ابزاري کاربردي است که میتواند جایگزین همه این دستگاههاي کنترل از راه دور شود. ســازندگان این گجت، آن را به یک چوب جادویی تشــبیه میکنند. براي اســتفاده از یوگو ابتدا باید سطح و فرمانهایی مشــخص را براي آن تعیین کرد. براي نمونه اگر میز عســلی اتاق پذیرایی بهعنوان یکی از این سطوح تعریف شــود، با هر بار قرارگیري یوگو روي آن میتوان دســتگاه تلویزیون را کنترل کرد. یوگو با قابلیت حســگر
اثرانگشت میتواند 16 کاربر مختلف داشته باشد.' ,
        'قرارگرفتن طولانی مدت در معرض نور خورشید میتواند
به بروز مشــکلاتی پوستی و حتی ســرطان منجر شود. به همین دلیل اطــلاع دقیق از میزان زمان کافی قرارگیري در برابر آفتاب میتواند ســودمند باشد. یک شرکت نوآور، نوعی برچســب طراحی کرده که روي پوســت قرار میگیرد و در صورت قرارگیــري در برابر نور به مــدت طولانی به کاربر هشدار میدهد. این محصول لاجیکاینک )LogicInk( نام دارد و از نوعی جوهر خاص ساخته شده است. هر برچسب داراي تصویر چند حلقه یا میله است که با قرارگیري در برابر نور رنگشــان بتدریج از بنفش به صورتی تغییر میکند. در صورت صورتی رنگ شــدن همه آنها، کاربر میتواند متوجه شــود که دیگر نباید در برابر آفتاب بماند. گفتنی است براي استفاده از این محصول نیازي به گوشی هوشمند نیست. هنوز قیمت لاجیکاینک و زمــان تقریبی عرضه آن به بازارهاي
جهانی اعلام نشده است.',
        'چند ســال بعد از عرضه دســتیار صوتی توسط شرکتهاي بزرگ نظیر آمازون و گوگل، مدتی است شرکتهاي دیگري نیز به این حوزه علاقه نشان دادهاند. شــرکت JBL اخیرا از محصول جدیدي به نام لینک ویو )Link View( رونمایی کرد که با همکاري گوگل طراحی شــده اســت. این محصول داراي یک نمایشگر هشت اینچی است و برخلاف دیگر دســتیارهاي صوتی که فاقد چنین قابلیتی هستند، به کاربر امکان مشاهده وضعیت و انتخاب گزینههاي موردنظر را از طریق لمس میدهد. این نمایشگر از وضوح 1280 در 720 پیکسلی برخوردار اســت، اما یکی از نقاط قوت این گجت، به اســپیکرهاي آن مربوط میشود. شرکت JBL به دلیل تولید اسپیکرهاي باکیفیت شهرت دارد و در این محصول نیز دو اسپیکر 10 واتی را گنجانده که امکان پخش صدا با کیفیتی عالی را در اختیار کاربر قرار میدهد. هنوز قیمت JBL
لینک ویو که تابستان 97 به بازار عرضه میشود، اعلام نشده است.',
        'بیســفون جزو اولین
تلاشهــاي ایرانیان
بـــراي ســـاخت
پیامرســانهاي تلفن
همراه بود که توانست
خدمات مناســبی را
ایجــاد کند. گرچــه در نــگارش اولیه برخی امکانــات وجــود داشــت، امــا بتازگــی با بیســفونپلاس امکاناتی ازجمله تماس با هر نقطــه از جهان با 15 درصــد تخفیف، امکان جســتوجو در بین کانالها و کاهش مصرف پهناي باند براي مشترکین داخلی وارد عرصه
رقابت شده است.',
        '»گــپ« با تمرکز بر
ایجــاد فروشــگاه بر
بســتر پیامرسانها با
رویکردي جدید وارد
بازار پیامرســانهاي
داخلی شــده است.
گرچه نگارشهاي مخصوص اکثر سیستمهاى عامل براي این نرمافزار طراحیشده، ولی هنوز امکان استفاده از آن روي سیستمعامل ویندوز وجود نــدارد. گپ امکان انجام خریدوفروش با اســتفاده از تراکنشهــا را دارد و ایــن مزیت رقابتی این پیامرســان نســبت به نمونههاي
مشابه است.',
        'نگاه بومی خود بحث مالــی را به نرمافزارش اضافه کرده اســت؛ امکانی کــه در تلگرام و دیگر پیامرسانهاي خارجی وجود ندارد. حوزه فعالیت ســروش در بخش مالی شامل خدمات پرداخت قبوض، خرید شارژ آنلاین و پرداخت درون کانالی است که میتواند بسترساز بهبود کســبوکارها روي پیامرســانها باشد. البته خدمات دیگري چون ارائــه وضعیت آبوهوا و حتی خدمات آگاهی از اوقات شــرعی، دیگر تلاشهاي سروش در جهت ایجاد تغییر نسبت
به نمونههاي خارجی آن است.',
        'سامسونگ با سری گلکسی تب اس ۸، ما را بیشتر از همیشه به دنیای تبلت‌های اندرویدی امیدوار می‌کند. با بررسی گلکسی تب اس ۸ و گلکسی تب اس ۸ پلاس همراه زومیت باشید.',
        'در سال‌های گذشته، دستگاه‌های متنوعی با نام برندهای مختلف وارد بازار تبلت‌های اندرویدی شده‌اند؛ اما به‌دلایل مختلفی همچون بهینه‌نبودن سیستم‌عامل اندروید برای تبلت‌ها و نمایشگرهای بزرگ، تبلت‌های مبتنی‌بر سیستم‌عامل گوگل انتخاب اول خیلی از کاربران نیستند و بسیاری، دستگاه‌های اپل را ترجیح می‌دهند.',
        'گلکسی تب اس ۸ و اس ۸ پلاس نه‌تنها ازنظر طراحی با نسل قبل مو نمی‌زنند؛ بلکه شباهت بسیاری به آیپد پرو اپل دارند. همان‌طور‌که از نام‌گذاری تبلت‌ها می‌توان حدس زد، مدل پایه از دو مدل دیگر کوچک‌تر و البته سبک‌تر طراحی شده است. ابعاد Tab s8، برابر با ۶٫۳ × ۱۶۵٫۳ × ۲۵۳٫۸ میلی‌متر و وزنش برابر با ۵۰۷ گرم است.',
        'در‌‌‌مقایسه‌‌با آیپد پرو اپل، بیش از هرچیز نسبت تصویر کشیده و فرم مستطیلی تبلت‌های سامسونگ به‌عنوان ضعف اصلی خود را نشان می‌دهد. درحالی‌که اپل برای آیپد پرو نسبت تصویر چهار به سه را مناسب می‌داند، سامسونگ در تبلت‌های خود از نسبت تصویر کشیده‌ی ۱۶ به ۱۰ استفاده می‌کند که باعث می‌شود فرم‌فکتور دستگاه نیز به حالت مستطیلی دربیاید. به‌عبارت‌دیگر، کاربر مجبور می‌شود تقریباً در تمام کاربردها دستگاه را به صورت افقی در دست بگیرد.',
        'در نمای پشت دستگاه، علاوه‌بر خطوط آنتن، دوربین دوگانه، فلش LED و یک نوار شیشه‌ای در امتداد ضلع بزرگ‌تر تبلت دیده می‌شوند. نوار شیشه‌ای مذکور محل اتصال S Pen روی دستگاه محسوب می‌شود. درواقع، قلم سامسونگ به‌صورت مغناطیسی روی بخش شیشه‌ای قرار می‌گیرد تا علاوه‌بر Pair‌شدن با دستگاه، شارژ هم شود. سامسونگ می‌گوید که به‌لطف بهبودهای اِعمال‌شده در S Pen، حالا تأخیر قلم به حدود ۶ میلی‌ثانیه رسیده است تا تجربه‌ی کار با آن روان‌تر و لذت‌بخش‌تر باشد.',
        'گلکسی تب اس ۸ به‌عنوان کوچک‌ترین مدل خانواده، به نمایشگر ۱۱ اینچی TFT LCD با رزولوشن ۲۵۶۰ × ۱۶۰۰ پیکسل و نسبت تصویر عریض ۱۶ به ۱۰ مجهز شده است تا محتوا را با تراکم پیکسلی ۲۷۴ پیکسل‌براینچ نمایش دهد. ازآن‌‌جاکه محتوای تصویری همچون ویدئو عموما با نسبت تصویر ۱۶ به ۹ تولید می‌شود، حین تماشای فیلم یا ویدئو یک نوار سیاه در بخش بالا و پایین صفحه به‌وجود می‌آید که خوشایند نیست و از‌بین‌رفتن حس غوطه‌وری در محتوا را به‌دنبال خواهد داشت.',
        'در سمت دیگر، مدل پلاس یک پله ارتقا را در بخش نمایشگر تجربه کرده و با حفظ همان نسبت تصویر ۱۶ به ۱۰، از پنل بزرگ‌تر ۱۲٫۴ اینچی OLED استفاده می‌کند. به‌لطف وضوح تصویر ۲۸۰۰ × ۱۷۵۲ پیکسل، تراکم پیکسلی مدل پلاس نیز در محدوده‌ای رضایت‌بخش، یعنی حدود ۲۶۶ پیکسل‌براینچ، باقی می‌ماند. نرخ نوسازی نمایشگر هر دو مدل پایه و پلاس ۱۲۰ هرتز است، با این تفاوت که برای اس ۸ نرخ نوسازی تطبیقی در نظر گرفته شده؛ اما نرخ نوسازی اس ۸ پلاس ثابت است.',
        'در بخش تنظیمات مربوط به نمایشگر، هر دو مدل خانواده‌ی تب اس ۸ دو پروفایل رنگی Vivid و Natural را دراختیار قرار می‌دهند که به‌ترتیب در فضاهای رنگی DCI P3 و sRGB تعریف شده‌اند. تبلت‌های سامسونگ فضاهای رنگی مذکور را به‌طورکامل پوشش می‌دهند و ازنظر دقت رنگی نیز عملکرد بسیار خوبی دارند.',
        'راهکار سامسونگ برای بهبود تجربه‌ی کاربری و افزودن قابلیت‌های الزامی برای تبلت‌ها، سرویس Dex یا Desktop Experience است که محیطی مشابه با ویندوز را دراختیار کاربران قرار می‌دهد. فعال‌کردن Dex به‌سادگی از منو تنظیمات یا از منو تنظیمات سریع (Quick Settings) انجام می‌شود. توجه کنید که در تبلت‌های سامسونگ، Dex فقط از حالت Landscape (جهت‌گیری افقی نمایشگر) پشتیبانی می‌کند و نمی‌توان آن را در حالت Portrait استفاده کرد.',
        'در فضای Dex، عناصر آشنایی همچون تسک‌بار را می‌بینیم که اطلاعاتی ازجمله ساعت و تاریخ، درصد شارژ باتری، منو اپ‌ها و آیکون اپلیکیشن‌های باز را نمایش می‌دهد. هر اپلیکیشن باز را می‌توان Minimize کرد و آن را ازطریق آیکونش در تسک‌بار، مجدداً به حالت Maximize در‌آورد. مهم‌ترین قابلیت‌هایی که Dex دراختیار قرار می‌دهد، امکانات مالتی‌تسکینگ از‌جمله بازکردن دو پنجره کنارهم (معادل Side By Side در ویندوز) و Drag and Drop بین پنجره‌ها است.',
        'همه ما با شنیدن نام هلن کلر یاد آن دختربچه نابینا و ناشنوایی می‌افتیم که دنیای تاریک و خاموش اطراف او کابوس‌وار به نظر می‌رسید؛ اما او با تمام محدودیت‌های جسمی خود نشان داد چیزی به اسم «چشم ذهن»‌ وجود دارد.',
        'اگرچه از سال ۱۹۹۲ تاکنون، روز جهانی کم‌توانان سوم دسامبر (۱۲ آذر) جشن گرفته می‌شود، تاریخ زندگی افراد کم‌توان هنوز آن چنان که شایسته است، در مدارس تدریس نمی‌شود.',
        'اکثر دانش آموزان می‌آموزند که هلن کلر، متولد ۲۷ ژوئن ۱۸۸۰ در شهر تاسکامبیا در ایالت آلاباما، قدرت شنوایی و بینایی خود را بعد از ابتلا به تب بالا در ۱۹ ماهگی از دست داد و معلم او، آن سالیوان، به او خط بریل، لب خوانی، هجای کلمات با انگشت و در نهایت حرف زدن آموخت.',
        'شاید کتاب داستان هلن کلر را در کودکی خوانده یا فیلم برنده اسکار «معجزه گر» (The Miracle Worker) را تماشا کرده باشید که در آن موفقیت‌های کلر واقعا به شکل معجزه به تصویر کشیده شده است. در کاخ کنگره آمریکا معروف به ساختمان کاپیتول، مجسمه برنزی هلن کلر هفت ساله کنار پمپ آب قرار دارد که الهام گرفته از صحنه‌ای تاریخی در این فیلم است که نقطه عطف زندگی هلن بود؛ یعنی زمانی که سالیوان حروف آب را کف دست هلن هجی کرد و بعد دست او را زیر جریان آب گرفت تا هلن مفهوم لمس انگشتان سالیوان را روی کف دست خود متوجه شود. بااین‌حال، هنوز چیزهای زیادی در مورد زندگی هلن کلر و دستاوردهای او وجود دارد که بسیاری از مردم نمی‌دانند.',
        'شک دارم عمر من، یا اصلا ابدیت، آنقدر طولانی باشد که بتواند آن حجم از وحشت و زشتی را که به ذهن من در آن سال‌های تلخ ۸ تا ۱۴ سالگی وارد شد، پاک کند.',
        'مدیر مؤسسه پرکینز یکی از دانش‌آموزان قدیمی به نام آن منسفیلد سالیوان را برای این کار انتخاب کرد. آن در پنج سالگی به بیماری چشمی تراخم مبتلا شده بود. سه سال بعد، مادرش بر اثر بیماری سل درگذشت و کمی بعد پدرش یکباره فرزندانش را رها کرد و رفت. سالیوان که نیمه‌نابینا بود، بدون پدر و مادر به خانه فقرا در ماساچوست فرستاده شد؛ جایی که او در بزرگسالی این طور توصیف کرده بود:',
        'زمانی که هلن کلر شش ساله را پیش بل آوردند، هلن را روی پاهایش نشاند و بلافصله او را با لرزش‌های ساعت جیبی‌اش آرام کرد. بل هلن را قابل آموزش دیدن یافت و به پدرش توصیه کرد از مایکل آناگنوس، مدیر مؤسسه پرکینز بخواهد معلمی را برای آموزش هلن به خانه آن‌ها در تاسکامبیا بفرستد.',
        'آشنایی با لورا بریجمن جرقه‌ای از امید را در دل مادر هلن روشن کرد. لورا با وجود محدودیت‌های شدید جسمی توانسته بود با آداب اجتماعی تربیت شود، درحالیکه هلن همچنان به پرخاشگری‌های خود ادامه می‌داد. این امید در نهایت به دیدار با الکساندر گراهام بل منجر شد. بل که همسر و مادرش هر دو ناشنوا بودند، آن موقع اختراع تلفن را سال‌ها پیش پشت سر گذاشته بود و حالا وقت خود را صرف آموزش ناشنوایان به صحبت کردن می‌کرد.'
    ];

    protected $productCategory = [
        'موبایل',
        'لپ تاپ',
        'پی سی',
        'لوازم جانبی',
        'تبلت',
        'باطری',
        'دوربین عکاسی',
        'کتابخوان',
        'مودم',
        'تجهیزات شبکه',
        'هارد',
        'فلش',
        'رم',
        'هدفون بیسیم',
        'هندزفری',
        'مچ بند هوشمند',
        'ساعت هوشمند',
        'کنسول بازی',
        'لباس',
        'کیف',
        'کفش',
        'کاپشن',
        'بافت',
        'شلوار',
        'کمربرد',
        //...
    ];
    /**
     * @return string
     */
    public function paragraph(int $CountChar = null): string
    {
        $paragraphs = $this->paragraphs;
        if (is_null($CountChar)){
            return $paragraphs[$this->rand($paragraphs)];
        }
        return substr($paragraphs[$this->rand($paragraphs)], 0, $CountChar);
    }
    /**
     * @return string[]
     */
    public function paragraphs(int $CountChars = 2): array
    {
        $paragraphs = $this->paragraphs;
        $paragraph = [];
        foreach (range(1, $CountChars) as $iCode){
            $paragraph[] = $this->paragraphs[rand(0, count($this->paragraphs))];
        }
        return $paragraph;
    }
    /**
     * @return bool
     */
    public function addProductCategory(string $Category): bool
    {
        if (array_search($Category, $this->productCategory, true)){
            return false;
        }

        $this->productCategory[] = $Category;

        return true;
    }
    /**
     * @return string
     */
    public function getProductCategory(): string
    {
        return $this->productCategory[$this->rand($this->productCategory)];
    }
    /**
     * @return string
     */
    public function getDomain(): string
    {
        $endDomain = [
            '.ir',
            '.co.ir',
            '.medu.ir',
            '.org.ir',
            '.net.ir',
            '.com',
            '.net',
            '.dev',
            '.tv'
        ];
        $protocol = ["http://", "https://"];
        return $protocol[rand(0, 1)] . Str::random(rand(5, 20)) . $endDomain[rand(0, 8)];
    }

    public function getSiteAddress(): string
    {
        $Directory = [
            "Article/",
            "article/",
            "post/",
            "posts/",
            "",
            "Post/",
            "",
            "Posts/",
            "",
            "view/",
            "",
            "tablet-review/"
        ];
        return $this->getDomain() . "/" . $Directory[$this->rand($Directory)] . Str::slug(substr(str_shuffle("qwer tyui opasdfgh AKHJSDU GJWE OPI sdf sdfg gfg5456c4vx 1cx2v1 xv4758-"), 0, 15), '-');
    }

    public function getEmail(): string
    {
        $emailPath = [
            "@gmail.com",
            "@yahoo.com",
        ];
        return Str::random(10) . $emailPath[rand(0, 1)];
    }
}