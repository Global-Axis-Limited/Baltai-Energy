<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Section</title>
</head>

<body>
    <header>
        <div class="bg-dark text-white pt-3 pb-3 fixed-top" id="header-scroll">
            <div class="container d-flex justify-content-between ">
                <div class="">
                    <a href="https://www.instagram.com/baltaienergy/" class="text-white me-4"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/baltai-energy/" class="text-white me-4"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.facebook.com/baltaienergy/" class="text-white me-4"><i class="bi bi-facebook"></i></a>
                    <a href="https://twitter.com/BaltaiEnergy" class="text-white"><i class="bi bi-twitter-x"></i></a>
                </div>

                <!-- Contact Information -->
                <div class="All">


                </div>

                <div class="text-end">
                    <p class="mb-0">info@baltaienergy.com</p>
                </div>
                <div class="text-end">

                    <p class="mb-0">+234 913 714 8567</p>

                </div>
                <div class="text-end">

                    <p class="mb-0">+234 913 713 1599</p>
                </div>
            </div>

        </div>
        <nav class="navbar navbar-expand-lg fixed-top" id="header-scroll">
            <div class="container">
                <a href="{{route('index')}}" class="navbar-brand">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736857400/Energy/p_1_w9bqwe.png" draggable="false" alt="">
                </a>
                <button class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-100" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <button data-bs-dismiss="offcanvas">
                            <i class="bi bi-x-square"></i>
                        </button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1">
                            <li class="nav-item">
                                <a href="{{route('index')}}" class="nav-link" class="routers" {{ (request()->is('/')) ? 'active' : '' }}>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('about')}}" class="nav-link" class="routers" {{ (request()->is('about')) ? 'active' : '' }}>
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{route('solution')}}" {{ (request()->is('solution*')) ? 'active' : '' }}>
                                    Solution
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('residential')}}" class="dropdown-item"><i class="bi bi-house"></i> Residential Solutions</a></li>
                                    <li><a href="{{route('business')}}" class="dropdown-item"><i class="bi bi-house-heart"></i> Business Solutions</a></li>
                                    <li><a href="{{route('industrial')}}" class="dropdown-item"><i class="bi bi-houses"></i> Industrial Solutions</a></li>
                                </ul>
                            </li>
                            <!-- -->
                            <li class="nav-item">
                                <a href="{{route('partners')}}" class="nav-link" class="routers">
                                    Partners
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('our_ssn')}}" class="nav-link" class="routers">
                                    SSN
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#">
                                    Careers
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('baltai')}}" class="dropdown-item">Baltai Learning</a></li>
                                    <li><a href="{{route('career')}}" class="dropdown-item">SRM</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('our_insight')}}" class="nav-link" class="routers">
                                    Insights
                                </a>
                            </li>
                        </ul>

                        <div class="login-div space-x-4">
                            <i class="fas fa-search" id="search-icon" style="cursor: pointer;"></i>
                            <a href="{{route('contact')}}" class="btn-signup">Contact Us</a>
                        </div>
                        <div class="search-overlay" id="search-overlay">
                            <div class="search-box">
                                <div class="close-btn" id="close-search">&times;</div>
                                <input type="text" placeholder="Search Anything..." id="search-input">
                                <div class="search-results" id="search-results"></div>
                            </div>
                        </div>
                        <div class="content">
                            
                        </div>

                    </div>
                </div>
            </div>
        </nav>
        <div class="offcanvas offcanvas-end offcanvas-contact-hambuger" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <button data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="bi bi-x-square"></i>
                </button>
            </div>
            <div class="offcanvas-body text-center">
            </div>
        </div>
    </header>
</body>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const searchIcon = document.getElementById("search-icon");
    const searchOverlay = document.getElementById("search-overlay");
    const closeSearch = document.getElementById("close-search");
    const searchInput = document.getElementById("search-input");
    const searchResults = document.getElementById("search-results");

    const allPages = [
        { title: "Home", link: "/" },
        { title: "About Us", link: "/ssn/about" },
        { title: "Contact Us", link: "/contact" },
        { title: "Careers", link: "/careers/career" },
        { title: "Baltai Learning", link: "/careers/baltai_learning" },
        { title: "Insight", link: "/insight/our_insight" },
        { title: "Solutions", link: "/solution/solution" },
        { title: "Business Solution", link: "/solution/business_solution" },
        { title: "Industrial Solution", link: "/solution/industrial_solutions" },
        { title: "Residential Solution", link: "/solution/residential_solutions" },
        { title: "Finance", link: "/finance" },
        { title: "Energy Calculator", link: "/energy_calculator" },
        { title: "Energy Glossary", link: "/energy_glossary" },
        { title: "FAQs", link: "/faqs" },
        { title: "Partners", link: "/partners" }
    ];

    // Open search overlay
    searchIcon.addEventListener("click", function () {
        searchOverlay.style.display = "flex";
        searchInput.focus();
    });

    // Close search when clicking close button
    closeSearch.addEventListener("click", function () {
        searchOverlay.style.display = "none";
    });

    // Close search when clicking outside the box
    document.addEventListener("click", function (event) {
        if (!document.querySelector(".search-box").contains(event.target) && event.target !== searchIcon) {
            searchOverlay.style.display = "none";
        }
    });

    // Prevent clicks inside the search box from closing the overlay
    searchOverlay.addEventListener("click", function (event) {
        event.stopPropagation();
    });

    // Highlight and scroll to found text on the current page
    function highlightAndScrollTo(text) {
        // Remove previous highlights
        document.querySelectorAll(".highlight").forEach(el => {
            el.outerHTML = el.innerText;
        });

        // Search for the text in visible elements
        const bodyText = document.body.innerHTML;
        const regex = new RegExp(`(${text})`, "gi");
        document.body.innerHTML = bodyText.replace(regex, '<span class="highlight">$1</span>');

        // Scroll to the first highlighted match
        const firstMatch = document.querySelector(".highlight");
        if (firstMatch) {
            firstMatch.scrollIntoView({ behavior: "smooth", block: "center" });
        }
    }

    // Search text on the current page
    function searchOnPage(query) {
        searchResults.innerHTML = "";
        if (query.length === 0) return;

        const bodyText = document.body.innerText.toLowerCase();
        const lowerQuery = query.toLowerCase();
        const index = bodyText.indexOf(lowerQuery);

        if (index !== -1) {
            const snippet = document.body.innerText.substring(Math.max(0, index - 30), index + 30);
            const highlightedSnippet = snippet.replace(new RegExp(query, "gi"), match => `<mark>${match}</mark>`);

            const resultItem = document.createElement("div");
            resultItem.classList.add("search-item");
            resultItem.innerHTML = `<p class="search-link">${highlightedSnippet}...</p>`;
            resultItem.addEventListener("click", () => highlightAndScrollTo(query));
            searchResults.appendChild(resultItem);
        } else {
            searchResults.innerHTML = "<p class='no-results'>No results found on this page</p>";
        }
    }

    // Fetch and extract only visible text from a page (no scripts, no styles, no code)
    async function fetchPageContent(url) {
        try {
            const response = await fetch(url);
            const text = await response.text();
            const parser = new DOMParser();
            const doc = parser.parseFromString(text, "text/html");

            // Remove unwanted elements
            doc.querySelectorAll("script, style, code, pre").forEach(el => el.remove());

            return doc.body.innerText.trim();
        } catch (error) {
            return "";
        }
    }

    // Search external pages if not found on the current page
    async function searchPages(query) {
        searchResults.innerHTML = "";
        if (query.length === 0) return;

        let resultsFound = 0;

        for (const page of allPages) {
            const content = await fetchPageContent(page.link);
            const lowerContent = content.toLowerCase();
            const lowerQuery = query.toLowerCase();

            const index = lowerContent.indexOf(lowerQuery);
            if (index !== -1) {
                resultsFound++;
                const snippet = content.substring(Math.max(0, index - 30), index + 30);
                const highlightedSnippet = snippet.replace(new RegExp(query, "gi"), match => `<mark>${match}</mark>`);

                const resultItem = document.createElement("div");
                resultItem.classList.add("search-item");
                resultItem.innerHTML = `<a href="${page.link}"><strong>${page.title}</strong></a> <p>${highlightedSnippet}...</p>`;
                searchResults.appendChild(resultItem);
            }
        }

        if (resultsFound === 0 && searchResults.innerHTML === "") {
            searchResults.innerHTML = "<p class='no-results'>No results found</p>";
        }
    }

    // Listen for search input changes
    searchInput.addEventListener("input", function () {
        searchOnPage(searchInput.value);
        searchPages(searchInput.value);
    });

    // Highlight styling
    const style = document.createElement("style");
    style.innerHTML = `
        .highlightt { background: yellow; padding: 2px; border-radius: 4px; }
        .search-link { cursor: pointer; color: blue; text-decoration: underline; }
    `;
    document.head.appendChild(style);
});
</script>
</html>