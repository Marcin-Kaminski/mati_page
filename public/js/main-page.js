document.addEventListener('DOMContentLoaded', function () {
    let instagramLogo = document.querySelector('.ig-logo');
    let youtubeLogo = document.querySelector('.yt-logo');
    let checkPlaylist = document.querySelector('.check-playlist');

    instagramLogo.addEventListener('click', function () {
        window.open('https://www.instagram.com/mlodszymati_/', '_blank');
    });
    youtubeLogo.addEventListener('click', function () {
        window.open('https://www.youtube.com/@yyngmatt/', '_blank');
    });
    checkPlaylist.addEventListener('click', function () {
        window.open('https://youtube.com/playlist?list=PLHRcQToW6QSfZghuNmKiXayKjaKUrQwlj&si=HJRlmhpyFFj4THmE', '_blank');
    });
});
