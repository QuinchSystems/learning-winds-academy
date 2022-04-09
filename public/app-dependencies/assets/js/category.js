const init = async () => {
    const coursePurchaseButton = document.querySelector('.course-purchase-button');
    const coursePurchaseModal = document.getElementById('course-purchase-modal');
    const purchaseCourseForm = document.getElementById('purchase-course-form');
    const coursePurchaseContinueButton = document.getElementById('course-purchase-continue-button');

    if (coursePurchaseButton && coursePurchaseModal) {
        const purchaseModal = new bootstrap.Modal(coursePurchaseModal, {
            keyboard: false,
            backdrop: 'static',
        });
        coursePurchaseButton.addEventListener('click', async () => {
            const { data } = await axios.get(
                COURSE_PURCHASE_FORM_URL.replace('#', coursePurchaseButton.dataset.courseId)
            );

            coursePurchaseModal.querySelector('.modal-body').innerHTML = "";
            coursePurchaseModal.querySelector('.modal-body').innerHTML = data;

            purchaseModal.show();
        });
    }
};

(() => {
    init();
})();
