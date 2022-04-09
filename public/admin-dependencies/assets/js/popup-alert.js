const ALERT_DANGER = 'danger';
const ALERT_SUCCESS = 'success';
const ALERT_INFO = 'info';
const ALERT_WARNING = 'warning';

function createAlert(message, type = ALERT_DANGER) {
    let alertPopupNode,
        alertPopupContainerNode,
        btnCloseNode,
        btnCloseIconNode,
        alertMessageNode,
        messageTextNode;

    const alertColor = setAlertType(type);

    alertPopupNode = createElement(document.body, 'div', `fixed-top alert-popup ${alertColor}`);
    alertPopupContainerNode = createElement(alertPopupNode, 'div', 'alert-popup__container');

    messageTextNode = document.createTextNode(message);
    alertMessageNode = createElement(alertPopupContainerNode, 'div', 'message').appendChild(
        messageTextNode
    );

    btnCloseNode = createElement(alertPopupContainerNode, 'button', 'close');
    btnCloseNode.addEventListener('click', removeRootElement);
    btnCloseIconNode = createElement(btnCloseNode, 'i', 'fa fa-times');

    setTimeout(removeRootElement, 8000);

    function removeRootElement() {
        alertPopupNode.remove();
    }

    function setAlertType(type) {
        switch (type) {
            case ALERT_DANGER:
                return 'alert-popup__bg-danger';
            case ALERT_SUCCESS:
                return 'alert-popup__bg-success';
            case ALERT_INFO:
                return 'alert-popup__bg-info';
            case ALERT_WARNING:
                return 'alert-popup__bg-warning';
            default:
                return 'alert-popup__bg-danger';
        }
    }
}

function createSpinner() {
    const spinnerWrapper = createElement(document.body, 'div', 'spinner-wrapper');
    createElement(spinnerWrapper, 'i', 'fa fa-spinner fa-spin fa-3x fa-fw');
    return spinnerWrapper;
}

function createElement(target, tagName = 'div', classNameString = null) {
    let node = document.createElement(tagName);

    if (classNameString) node.className = classNameString;
    target.appendChild(node);

    return node;
}
