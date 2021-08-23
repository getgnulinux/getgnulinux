$(window).on('load', function() {
    initTheme();
    $('.sidenav').sidenav();
    $('.language-button-small').dropdown();
    $('.language-button-large').dropdown();
    $('.materialboxed').materialbox();
    $('.flexslider').flexslider({
        animation: 'fade'
    });
    $('.dark-mode-button').on('click', function(e) {
        e.preventDefault();
        toggleTheme(true);
    });
});

const initTheme = () => {
    const storage = storageAvailable('localStorage') ? window.localStorage : null;
    const root = document.documentElement;
    const selectedTheme = storage !== null ? storage.getItem('theme') : null;
    const currentTheme = root !== null && root.classList.contains('night') ? 'night' : 'day';
    const darkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

    if (selectedTheme !== null) {
        if (selectedTheme === 'night' && currentTheme !== 'night') {
            toggleTheme();
        }
    }
    else if (darkMode && currentTheme !== 'night') {
        toggleTheme();
    }
};

const toggleTheme = (store = false) => {
    const storage = storageAvailable('localStorage') ? window.localStorage : null;
    const button = document.querySelector('.dark-mode-button');
    const icon = button !== null ? button.querySelector('.material-icons') : null;
    const root = document.documentElement;
    let theme = null;

    if (root !== null) {
        const isNight = root.classList.toggle('night');
        theme = isNight ? 'night' : 'day';
    }

    if (icon !== null) {
        icon.textContent = theme === 'night' ? 'light_mode' : 'dark_mode';
    }

    if (store && storage !== null) {
        storage.setItem('theme', theme);
    }
};

const storageAvailable = (type) => {
    let storage;

    try {
        const x = '__storage_test__';

        storage = window[type];
        storage.setItem(x, x);
        storage.removeItem(x);

        return true;
    }
    catch(e) {
        return e instanceof DOMException && (
            e.code === 22 ||
            e.code === 1014 ||
            e.name === 'QuotaExceededError' ||
            e.name === 'NS_ERROR_DOM_QUOTA_REACHED') &&
            (storage && storage.length !== 0);
    }
};
