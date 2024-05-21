// start: Sidebar
const sidebarToggle = document.querySelector(".sidebar-toggle");
const sidebarOverlay = document.querySelector(".sidebar-overlay");
const sidebarMenu = document.querySelector(".sidebar-menu");
const main = document.querySelector(".main");
if (window.innerWidth < 768) {
    main.classList.toggle("active");
    sidebarOverlay.classList.toggle("hidden");
    sidebarMenu.classList.toggle("-translate-x-full");
}
sidebarToggle.addEventListener("click", function (e) {
    e.preventDefault();
    main.classList.toggle("active");
    sidebarOverlay.classList.toggle("hidden");
    sidebarMenu.classList.toggle("-translate-x-full");
});
sidebarOverlay.addEventListener("click", function (e) {
    e.preventDefault();
    main.classList.add("active");
    sidebarOverlay.classList.add("hidden");
    sidebarMenu.classList.add("-translate-x-full");
});
document.querySelectorAll(".sidebar-dropdown-toggle").forEach(function (item) {
    item.addEventListener("click", function (e) {
        e.preventDefault();
        const parent = item.closest(".group");
        if (parent.classList.contains("selected")) {
            parent.classList.remove("selected");
        } else {
            document
                .querySelectorAll(".sidebar-dropdown-toggle")
                .forEach(function (i) {
                    i.closest(".group").classList.remove("selected");
                });
            parent.classList.add("selected");
        }
    });
});
// end: Sidebar

// Ambil semua tombol dropdown
const dropdownToggles = document.querySelectorAll(".dropdown-toggle");

// Tambahkan event listener untuk setiap tombol dropdown
dropdownToggles.forEach(function (toggle) {
    toggle.addEventListener("click", function (e) {
        e.preventDefault();

        // Temukan parent dropdown
        const dropdown = toggle.closest(".dropdown");

        // Temukan dropdown menu di dalam parent dropdown
        const dropdownMenu = dropdown.querySelector(".dropdown-menu");

        // Periksa apakah dropdown menu sedang ditampilkan atau disembunyikan
        if (dropdownMenu.classList.contains("hidden")) {
            // Jika dropdown menu sedang disembunyikan, tampilkan dropdown menu
            dropdownMenu.classList.remove("hidden");
        } else {
            // Jika dropdown menu sedang ditampilkan, sembunyikan dropdown menu
            dropdownMenu.classList.add("hidden");
        }
    });
});

function hideDropdown() {
    document.querySelectorAll(".dropdown-menu").forEach(function (item) {
        item.classList.add("hidden");
    });
}
function showPopper(popperId) {
    popperInstance[popperId].setOptions(function (options) {
        return {
            ...options,
            modifiers: [
                ...options.modifiers,
                { name: "eventListeners", enabled: true },
            ],
        };
    });
    popperInstance[popperId].update();
}
function hidePopper(popperId) {
    popperInstance[popperId].setOptions(function (options) {
        return {
            ...options,
            modifiers: [
                ...options.modifiers,
                { name: "eventListeners", enabled: false },
            ],
        };
    });
}
// end: Popper

// start: Tab
document.querySelectorAll("[data-tab]").forEach(function (item) {
    item.addEventListener("click", function (e) {
        e.preventDefault();
        const tab = item.dataset.tab;
        const page = item.dataset.tabPage;
        const target = document.querySelector(
            '[data-tab-for="' + tab + '"][data-page="' + page + '"]'
        );
        document
            .querySelectorAll('[data-tab="' + tab + '"]')
            .forEach(function (i) {
                i.classList.remove("active");
            });
        document
            .querySelectorAll('[data-tab-for="' + tab + '"]')
            .forEach(function (i) {
                i.classList.add("hidden");
            });
        item.classList.add("active");
        target.classList.remove("hidden");
    });
});
// end: Tab

// start: Chart
new Chart(document.getElementById("order-chart"), {
    type: "line",
    data: {
        labels: generateNDays(7),
        datasets: [
            {
                label: "Dipinjamkan",
                data: generateRandomData(7),
                borderWidth: 1,
                fill: true,
                pointBackgroundColor: "rgb(59, 130, 246)",
                borderColor: "rgb(59, 130, 246)",
                backgroundColor: "rgb(59 130 246 / .05)",
                tension: 0.2,
            },
            {
                label: "Selesai",
                data: generateRandomData(7),
                borderWidth: 1,
                fill: true,
                pointBackgroundColor: "rgb(16, 185, 129)",
                borderColor: "rgb(16, 185, 129)",
                backgroundColor: "rgb(16 185 129 / .05)",
                tension: 0.2,
            },
            {
                label: "Dibatalkan",
                data: generateRandomData(7),
                borderWidth: 1,
                fill: true,
                pointBackgroundColor: "rgb(244, 63, 94)",
                borderColor: "rgb(244, 63, 94)",
                backgroundColor: "rgb(244 63 94 / .05)",
                tension: 0.2,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});

function generateNDays(n) {
    const data = [];
    for (let i = 0; i < n; i++) {
        const date = new Date();
        date.setDate(date.getDate() - i);
        data.push(
            date.toLocaleString("en-US", {
                month: "short",
                day: "numeric",
            })
        );
    }
    return data;
}
function generateRandomData(n) {
    const data = [];
    for (let i = 0; i < n; i++) {
        data.push(Math.round(Math.random() * 10));
    }
    return data;
}
// end: Chart
