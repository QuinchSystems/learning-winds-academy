window.onload = function () {
    const fetchCoursesBtn = document.querySelector('.fetch-courses-btn');

    fetchCoursesBtn.addEventListener('click', function () {
        fetchCoursesBtn.setAttribute('disabled', true);
        const spinner = appendSpinner(fetchCoursesBtn);
        api.post(FETCH_MOODLE_COURSE_URL)
            .then(({ data }) => {
                document.getElementById('courses-table').innerHTML = data.view;
            })
            .catch(({ response }) => {
                createAlert('Something went wrong, please try again');
            })
            .finally(() => {
                fetchCoursesBtn.removeAttribute('disabled');
                spinner.remove();
            });
    });

    const cleanCoursesBtn = document.querySelector('.clean-up-courses-btn');

    cleanCoursesBtn.addEventListener('click', function () {
        cleanCoursesBtn.setAttribute('disabled', true);
        const spinner = appendSpinner(cleanCoursesBtn);
        api.put(CLEAN_UP_MOODLE_COURSES_URL)
            .then(({ data }) => {
                createAlert(data.message, ALERT_SUCCESS);
            })
            .catch(({ response }) => {
                createAlert('Something went wrong, please try again');
            })
            .finally(() => {
                cleanCoursesBtn.removeAttribute('disabled');
                spinner.remove();
            });
    });
};
