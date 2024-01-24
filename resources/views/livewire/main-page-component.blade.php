<div>
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <script src="{{ asset('js/main-page.js') }}"></script>
    <link href="https://fonts.cdnfonts.com/css/agency-fb" rel="stylesheet">
    <div class="box">
        <div class="top-box">
            <div class="violin-key-box">
                <img src="images/portfolio-violin-key.png" wire:click="goToPortfolio" alt="MissingImage" class="portfolio-violin-key">
            </div>
            <div class="site-title mb-1p">mattmastering.pl</div>
            <div class="about-me-box">
                <img src="images/about-me-book.png" wire:click="goToAboutMe" alt="MissingImage" class="about-me-book">
            </div>
            <div class="clearfix"></div>
            <div class="separating-stripe mb-3p"></div>
        </div>
        <div class="mid-box">
            <div class="centered-text rem28 mr15" >CO OFERUJE?</div>
            <div class="mix-and-master-box">
                <div class="mixer-white-box">
                    <div class="white-box float-left">
                        <img src="images/mixer-logo.png" alt="MissingImage" class="mixer">
                        <div class="centered-text black-color mixer-title">Miks</div>
                        <div class="centered-text rem-15 black-color mix-description-text">Miks to proces łaczenia sciezek audio, dostosowywania głosnosci i dodawania efektów, aby uzyskac spójne brzmienie.</div>
                        <div class="centered-text rem-20 black-color mb-15">Czas realizacji 48h</div>
                    </div>
                </div>
                <div class="master-white-box">
                    <div class="white-box float-right">
                        <img src="images/headphones-icon.png" alt="MissingImage" class="headphones">
                        <div class="centered-text black-color mixer-title">Mastering</div>
                        <div class="centered-text rem-15 black-color mix-description-text">Mastering to ostateczna obróbka dzwieku po miksie, celem jest poprawa ogólnego brzmienia, dynamiki i dostosowanie do róznych nosników.</div>
                        <div class="centered-text rem-20 black-color mb-15">Czas realizacji 48h</div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="mix-price float-left rem35">CENA: 50zł</div>
                <div class="master-price float-right rem35">CENA: 30zł</div>
                <div class="clearfix"></div>
            </div>
            <div class="centered-text rem35">MIX&MASTER</div>
            <div class="centered-text rem35 mb-3p">70ZŁ</div>
            <div class="separating-stripe mb-3p"></div>
            <div class="centered-text rem35 mb-3p">O MNIE</div>
            <div class="centered-text rem28 introduction">Siema, jestem Mati, mixuje juz 4 rok, zajawkowo robie muze. Z moja wiedza, i Twoja włozona praca w numer dojdziemy do perfekcji i stworzymy cos mocnego!</div>
            <div class="separating-stripe mb-3p"></div>
            <div class="centered-text rem28 mb-3p">MIKS PRZED I PO</div>
            <div class="before-miks-box">
                <div class="centered-text rem28 mb-1p">PRZED</div>
                @if($mixPrevNumber === 0)
                    <audio controls src="music/ai-bambi.mp3" ></audio>
                    <div class="centered-text  mb-3p artist-name mb-3p">AI BAMBI</div>
                @endif
                @if($mixPrevNumber === 1)
                    <audio controls src="music/cheatz.mp3" ></audio>
                    <div class="centered-text  mb-3p artist-name mb-3p">CHEATZ</div>
                @endif
                @if($mixPrevNumber === 2)
                    <audio controls src="music/matt.mp3" ></audio>
                    <div class="centered-text  mb-3p artist-name mb-3p">MATT</div>
                @endif
            </div>
            @if($mixPrevNumber >= 0 && $mixPrevNumber < 2)
            <img src="images/next-artist.png" class="next-artist" wire:click="goToNextMix" alt="MissingImage">
            @endif
            @if($mixPrevNumber !== 0)
                <img src="images/next-artist.png" class="previous-artist"  wire:click="goToPreviousMix" alt="MissingImage">
            @endif
            <div class="after-miks-box">
                @if($mixPrevNumber === 0 || $mixPrevNumber === 1)
                <div class="centered-text rem28 mb-1p ml-28p">PO</div>
                @endif
                @if($mixPrevNumber >= 2)
                <div class="centered-text rem28 mb-1p mr-28p">PO</div>
                @endif
                @if($mixPrevNumber === 0)
                <audio controls src="music/ai-bambi.mp3" ></audio>
                <div class="centered-text  mb-3p artist-name mb-3p">AI BAMBI</div>
                @endif
                @if($mixPrevNumber === 1)
                    <audio controls src="music/cheatz.mp3" ></audio>
                    <div class="centered-text  mb-3p artist-name mb-3p">CHEATZ</div>
                @endif
                    @if($mixPrevNumber === 2)
                        <audio controls src="music/matt.mp3" ></audio>
                        <div class="centered-text  mb-3p artist-name mb-3p">MATT</div>
                    @endif
            </div>
            <div class="centered-text check-portfolio" wire:click="goToPortfolio">OBCZAJ PORTFOLIO</div>
            <div class="separating-stripe mb-1p"></div>
            <div class="contact-box">
                <div class="centered-text rem28 mb-5p">Skontaktuj sie ze mna</div>
                <img src="images/instagram-logo.png" class="ig-logo" alt="MissingImage">
                <img src="images/youtube-logo.png" class="yt-logo" alt="MissingImage">
                <div class="centered-text creator">
                    © 2023 mattmastering.pl | Designed by &nbsp <a href="https://www.instagram.com/schizofreniaparanoidalna200" target="_blank" class="white-color" id="creator-ig-link">@schizofreniaparanoidalna200</a>
                </div>
            </div>
        </div>
    </div>


</div>
