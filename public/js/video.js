document.addEventListener('DOMContentLoaded', () => {
    const loadButton = document.getElementById('load-video');
    const videoContainer = document.getElementById('video-container');

    if (loadButton && videoContainer) {
        loadButton.addEventListener('click', () => {
            const iframe = document.createElement('iframe');
            iframe.src = "https://player.vimeo.com/video/552888202?h=f4f85f69bb";
            iframe.width = "640";
            iframe.height = "360";
            iframe.frameBorder = "0";
            iframe.allow = "autoplay; fullscreen; picture-in-picture";
            iframe.allowFullscreen = true;
            iframe.title = "Vidéo Les Crudettes";

            videoContainer.innerHTML = "";
            videoContainer.appendChild(iframe);
        });
    }
});
