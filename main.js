(function() {

    var $overlayContainer = document.getElementById('overlay-container');
    var $overlay = document.getElementById('overlay');
    var $closeButton = document.getElementById('close-button');
    var $columns = document.getElementsByClassName('column');

    var overlayGameId = 'overlay-game';
    var hiddenClassName = 'is-hidden';

    function onGameClick(e) {
        e.preventDefault();
        createIframeInOverlay(e.currentTarget.href);
        $overlayContainer.classList.remove(hiddenClassName);
    }

    function onCloseGame(e) {
        e.preventDefault();
        removeIframeFromOverlay();
        $overlayContainer.classList.add(hiddenClassName);
    }

    for (var i = 0; i < $columns.length; i++) {
        var item = $columns.item(i);
        item.querySelector('a').addEventListener('click', onGameClick);
    }

    $closeButton.addEventListener('click', onCloseGame);

    function createIframeInOverlay(url) {
        var iframe = document.createElement('iframe');
        iframe.id = overlayGameId;
        iframe.src = url;
        $overlay.appendChild(iframe);
    }

    function removeIframeFromOverlay() {
        $overlayContainer.classList.add(hiddenClassName);
        var gameIframe = document.getElementById(overlayGameId);
        if (gameIframe) {
            $overlay.removeChild(gameIframe);
        }
    }

})();