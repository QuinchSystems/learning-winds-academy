(function () {
    renderStudentVsCourseChartJsData();
    renderSalesLineChartJsData();
})();

function renderStudentVsCourseChartJsData() {
    const courseVsStudentChartElm = document.getElementById('course-vs-student-chart');

    if (courseVsStudentChartElm) {
        const ctx = courseVsStudentChartElm.getContext('2d');
        const courseVsStudentChart = new Chart(ctx, {
            type: 'bar',
            data: STUDENT_COURSE_CHART_DATA,
            options: {
                indexAxis: 'y',
                // Elements options apply to all of the options unless overridden in a dataset
                // In this case, we are setting the border of each horizontal bar to be 2px wide
                elements: {
                    bar: {
                        borderWidth: 2,
                    },
                },
                responsive: true,
                plugins: {
                    legend: {
                        position: 'right',
                    },
                    title: {
                        display: true,
                        text: 'Students vs Courses Horizontal Bar Chart',
                    },
                },
            },
        });
    }
}

function renderSalesLineChartJsData() {
    const salesFilterDropDownElements = document.querySelectorAll('.sales-filter-dropdown ul a');
    console.log(salesFilterDropDownElements);
    const defaultFilter = 'daily';

    const render = renderSalesChart();

    render(defaultFilter);

    salesFilterDropDownElements.forEach(elm => {
        elm.addEventListener('click', () => {
            const filter = elm.dataset.salesFilter;

            console.log(filter);

            render(filter);
        });
    });
}

function renderSalesChart(filter) {
    const salesChartElm = document.getElementById('sales-line-chart');
    if (salesChartElm) {
        const ctx = salesChartElm.getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'line',
            data: {},
            options: {},
        });

        return function (filter) {
            axios
                .get(SALES_CHART_JS_DATA_URL.replace('#', filter))
                .then(({ data }) => {
                    salesChart.data = data;
                    salesChart.update();
                })
                .catch(response => {
                    console.error(response);
                });
        };
    }
}
