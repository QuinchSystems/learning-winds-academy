function counterAnimate(obj, initVal, lastVal, duration) {
    let startTime = null;

    //get the current timestamp and assign it to the currentTime variable
    let currentTime = Date.now();

    //pass the current timestamp to the step function
    const step = currentTime => {
        //if the start time is null, assign the current time to startTime
        if (!startTime) {
            startTime = currentTime;
        }

        //calculate the value to be used in calculating the number to be displayed
        const progress = Math.min((currentTime - startTime) / duration, 1);

        //calculate what to be displayed using the value gotten above
        obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);

        //checking to make sure the counter does not exceed the last value (lastVal)
        if (progress < 1) {
            window.requestAnimationFrame(step);
        } else {
            window.cancelAnimationFrame(window.requestAnimationFrame(step));
        }
    };

    //start animating
    window.requestAnimationFrame(step);
}

const load = () => {
    const studentCountElm = document.querySelector('.student-count');
    const courseCountElm = document.querySelector('.course-count');
    const instructorCountElm = document.querySelector('.instructor-count');

    counterAnimate(studentCountElm, 0, studentCount, 1000);
    counterAnimate(courseCountElm, 0, courseCount, 1000);
    counterAnimate(instructorCountElm, 0, 30, 1000);
}

(function () {
    load();
})();
