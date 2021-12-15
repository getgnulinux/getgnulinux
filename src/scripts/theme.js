(function () {
    const initTheme = () => {
        const storage = storageAvailable('localStorage') ? window.localStorage : null;
        const root = document.documentElement;
        const selectedTheme = storage !== null ? storage.getItem('theme') : null;
        const currentTheme = root !== null && root.classList.contains('night') ? 'night' : 'day';
        const darkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

        if (selectedTheme !== null) {
            if (selectedTheme === 'night' && currentTheme !== 'night') {
                return toggleTheme();
            }
        }
        else if (darkMode && currentTheme !== 'night') {
            return toggleTheme();
        }

        return null;
    };

    const toggleTheme = (store = false) => {
        const storage = storageAvailable('localStorage') ? window.localStorage : null;
        const root = document.documentElement;
        let theme = null;

        if (root !== null) {
            const isNight = root.classList.toggle('night');
            theme = isNight ? 'night' : 'day';
        }

        if (store && storage !== null) {
            storage.setItem('theme', theme);
        }

        updateThemeButton(theme);

        return theme;
    };

    const updateThemeButton = (theme) => {
        const button = document.querySelector('.dark-mode-button');
        const icon = button !== null ? button.querySelector('.material-icons') : null;

        if (icon !== null) {
            icon.textContent = theme === 'night' ? 'light_mode' : 'dark_mode';
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

    const theme = initTheme();

    window.addEventListener('DOMContentLoaded', () => {
        const button = document.querySelector('.dark-mode-button');

        if (button !== null) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                toggleTheme(true);
            });
        }

        updateThemeButton(theme);
    });
})();
