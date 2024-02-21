<div>
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <script src="{{ asset('js/main-page.js') }}"></script>
    <link href="https://fonts.cdnfonts.com/css/agency-fb" rel="stylesheet">
    <div class="box">
        <div class="top-box">
            <div class="violin-key-box">
                <img src="images/portfolio-violin-key.png" wire:click="goToPortfolio" alt="sfx" class="portfolio-violin-key">
                <div class="portfolio-title float-left rem28" wire:click="goToPortfolio">portfolio</div>
            </div>
            <div class="site-title mb-1p">mattmastering.pl</div>
            <div class="about-me-box">
                <img src="images/about-me-book.png" wire:click="goBack" alt="sfx" class="about-me-book">
                <div class="main-page-title-about-me float-right rem28" wire:click="goBack">strona główna</div>

            </div>
            <div class="clearfix"></div>
            <div class="separating-stripe mb-1p"></div>
            <div class="mid-box">
                <div class="centered-text rem28 mr15 mb-5p" >O MNIE</div>
                <div class="centered-text rem28 mr15 " >yo, tu Mati, w tym roku skonczyłem {{ $age }} lat, miksuje kawałki od 2019 roku, kazdego dnia coraz bardziej konsekwentnie, aby spełnic swoje cele i realizowac sie w swojej pasji jaka tez jest nawijka. Od czasu do czasu poza muza tworze grafiki, ostatnio sporo sportu wlatuje, duzo rzeczy wrzucam tez na instagrama mlodszymati_ wiec jesli chciałbys zobaczyc co robie poza tworczoscia w necie to mozesz wpasc zostawic follow. Pozdro.</div>
            </div>
            <div class="separating-stripe mt-11p mb-1p"></div>
            <div class="contact-box">
                <div class="clearfix"></div>
                <div class="centered-text rem28 contact-phone mb-5p">Skontaktuj sie ze mna</div>
                <img src="images/instagram-logo.png" class="ig-logo" alt="MissingImage">
                <img src="images/youtube-logo.png" class="yt-logo" alt="MissingImage">
                <div class="centered-text foot-name">© 2024 mattmastering.pl</div>
                <div class="designer" >Designed by @schizofreniaparanoidalna200</div>
            </div>
        </div>
    </div>


</div>

