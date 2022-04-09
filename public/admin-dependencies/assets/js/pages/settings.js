(function () {
    const changePasswordHandle = document.getElementById('changne-password-handle');
    changePasswordHandle.addEventListener('change', function (event) {
        const checked = event.target.checked;
        if (checked) {
            document.querySelectorAll('.password-input').forEach(elm => (elm.type = 'text'));
            changePasswordHandle.parentElement.querySelector('.state > label').textContent =
                'Hide Password';
        } else {
            document.querySelectorAll('.password-input').forEach(elm => (elm.type = 'password'));
            changePasswordHandle.parentElement.querySelector('.state > label').textContent =
                'Show Password';
        }
    });
})();
