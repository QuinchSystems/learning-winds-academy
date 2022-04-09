window.onload = function () {
    const fetchUsersBtn = document.querySelector('.fetch-users-btn');

    fetchUsersBtn.addEventListener('click', function () {
        fetchUsersBtn.setAttribute('disabled', true);
        const spinner = appendSpinner(fetchUsersBtn);
        api.post(FETCH_MOODLE_USERS_URL)
            .then(({ data }) => {
                window.location.reload();
            })
            .catch(({ response }) => {
                createAlert('Something went wrong, please try again');
            })
            .finally(() => {
                fetchUsersBtn.removeAttribute('disabled');
                spinner.remove();
            });
    });
};
