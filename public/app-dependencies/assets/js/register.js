const validatePassword = () => {
    const passwordInput = document.getElementById('password-input');
    const passwordValidatorElement = document.querySelector('.password-validator');

    const must8CharsElm = document.querySelector('.must-8-chars');
    const must1LowercaseElm = document.querySelector('.must-1-lowercase');
    const must1UppercaseElm = document.querySelector('.must-1-uppercase');
    const must1SpecialCharElm = document.querySelector('.must-1-specialchar');

    passwordInput.addEventListener('input', e => {
        const value = e.target.value;

        changeStyleOnValidate(must8CharsElm, mustBeEightCharsLong(value));
        changeStyleOnValidate(must1LowercaseElm, mustHaveOneLowercaseChar(value));
        changeStyleOnValidate(must1UppercaseElm, mustHaveOneUppercaseChar(value));
        changeStyleOnValidate(must1SpecialCharElm, mustHaveOneSpecialChar(value));
    });

    const observeOnValueChange = () => {
        if (changed) {
            passwordValidatorElement.style.display = 'block';
        }
    };

    const mustBeEightCharsLong = value => {
        return value.length >= 8;
    };

    const mustHaveOneLowercaseChar = value => {
        return /[a-z]/g.test(value);
    };

    const mustHaveOneUppercaseChar = value => {
        return /[A-Z]/g.test(value);
    };

    const mustHaveOneSpecialChar = value => {
        return /[@$!%*?&#\^\*\(\)]/g.test(value);
    };

    const changeStyleOnValidate = (elm, condition) => {
        const classList = elm.querySelector('i').classList;

        if (condition) {
            elm.style.color = 'green';
            classList.remove('fa-times-circle');
            classList.add('fa-check-circle');
        } else {
            elm.style.color = 'red';
            classList.remove('fa-check-circle');
            classList.add('fa-times-circle');
        }
    };
};

(() => {
    validatePassword();
})();
