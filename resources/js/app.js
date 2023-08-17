import "./bootstrap";
import "flowbite";
import Alpine from "alpinejs";
import ApexCharts from "apexcharts";
import axios from "axios";

window.Alpine = Alpine;

Alpine.start();

const response = await axios.get('http://localhost:8000/app-statistik');

console.log(response.data);

const data = [];
response.data.service_types.forEach((i, v) => {
    data.push({
        x: i.name,
        y: (i.id in response.data.group ? response.data.group[i.id].length : 0)
    });
});

console.log(data)

function chart(data) {
    let options = {
        plotOption: {
            bar: {
                distributed: true,
            }
        },
        chart: {
            type: "bar",
        },
        series: [
            {
                data: data,
            },
        ],
    };

    if (
        document.getElementById("area-chart") &&
        typeof ApexCharts !== "undefined"
    ) {
        const chart = new ApexCharts(
            document.getElementById("area-chart"),
            options
        );
        chart.render();
    }
}
window.addEventListener("load", chart(data));