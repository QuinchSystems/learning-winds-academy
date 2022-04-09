const appendSpinner = target => {
    const spinnerNode = document.createElement('i');
    spinnerNode.className = 'fa fa-spinner fa-spin me-2';
    spinnerNode.style.fontSize = '0.8rem';
    target.prepend(spinnerNode);

    return spinnerNode;
};
