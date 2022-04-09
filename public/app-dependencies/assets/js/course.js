const init = () => {
    const coursePurchaseButton = document.querySelector('.course-purchase-button');
    const coursePurchaseModal = document.getElementById('course-purchase-modal');
    const purchaseCourseForm = document.getElementById('purchase-course-form');
    const coursePurchaseContinueButton = document.getElementById('course-purchase-continue-button');

    if (coursePurchaseButton && coursePurchaseModal) {
        const purchaseModal = new bootstrap.Modal(coursePurchaseModal, {
            keyboard: false,
            backdrop: 'static',
        });
        coursePurchaseButton.addEventListener('click', () => {
            purchaseModal.show();
        });
    }
};

(() => {
    init();
})();
