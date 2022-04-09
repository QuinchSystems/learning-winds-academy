'use strict';

const form = document.getElementById('contact-form');

const sendMsgBtn = document.getElementById('send-msg-btn');
const defaultSendMsgBtnText = document.querySelector('.default-send-msg-btn-text');
const loading = document.querySelector('.loading');
const errorMsg = document.querySelector('.error-message');
const msgSend = document.querySelector('.sent-message');

(function () {
    hide(loading, errorMsg, msgSend);

    form.addEventListener('submit', onFormSubmit);
})();

function onFormSubmit(e) {
    e.preventDefault();

    const formData = new FormData(e.target);
    show(loading);
    hide(errorMsg, msgSend, defaultSendMsgBtnText);
    toggleButtonState(sendMsgBtn);
    axios
        .post(POST_CONTACT_URL, formData)
        .then(data => {
            show(msgSend);
        })
        .catch(({ response: { data } }) => {
            console.log(data);
            show(errorMsg);
            errorMsg.textContent = data.message;
        })
        .finally(() => {
            hide(loading);
            show(defaultSendMsgBtnText);
            toggleButtonState(sendMsgBtn);
        });
}

function hide(...elements) {
    elements.forEach(element => (element.style.display = 'none'));
}

function show(...elements) {
    elements.forEach(element => (element.style.display = 'block'));
}

function toggleButtonState(button) {
    button.disabled = !button.disabled;
}
