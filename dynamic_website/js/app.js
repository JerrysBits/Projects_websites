const cookieStorage = {
    getItem: (key) => {
        const cookies = document.cookie
            .split(';')
            .map(cookie => cookie.split('='))
            .reduce((acc, [key, value]) => ({ ...acc, [key.trim()]: value }), {})
        return cookies[key];
    },
    setItem: (key, value) => {
        document.cookie = `${key}=${value}`;
    },
};

const storageType = cookieStorage; 
const consentPropertyName = 'practice_consent';

const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {
    
    /*
    const consentPopup = document.getElementById('consent-popup');
    const acceptBtn = document.getElementById('accept');

    const acceptFn = event => {
        saveToStorage(storageType);
        consentPopup.classList.add('hidden');
    };

    acceptBtn.addEventListener('click', acceptFn);

    if (shouldShowPopup(storageType)) { 
        setTimeout(() => {            
            consentPopup.classList.remove('hidden');

        }, 2000); } */
    if (shouldShowPopup(storageType)) { 
        const consent = confirm('This website uses cookies. Do you agree to this terms and conditions of the site?');
        if (consent){
            saveToStorage();
        }
    }

    
    const arrayButton = document.getElementById('btnArray');
    const inputName = document.getElementById('myName');
    
    arrayButton.addEventListener('click', showName);
    const showName = event => {
        inputName.classList.remove('hidden');
    };

};

