<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Metrics Graphs</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <h1>RedOcelot Data Gallery</h1>
    <p>Browse, filter and search your graphs.</p>
</header>

<main>
    <section class="controls">
        <div class="filter-group">
            <button class="filter-btn active" data-type="all">All</button>
            <button class="filter-btn" data-type="Line">Line</button>
            <button class="filter-btn" data-type="Bar">Bar</button>
            <button class="filter-btn" data-type="Histogram">Histogram</button>
        </div>

        <div class="search-group">
            <input id="searchInput" type="text" placeholder="Search by graph name or tags...">
        </div>
    </section>

    <section class="gallery" id="graphGallery">
        <article class="graph-card" data-type="line" data-tags="complexity trend project a">
            <img src="images/graph1.png" alt="Complexity trend - Project A">
            <h2>Complexity Trend - "Project A"</h2>
            <p>Line graph showing cyclomatic complexity per commit.</p>
        </article>

        <article class="graph-card" data-type="bar" data-tags="loc size project b">
            <img src="images/graph2.png" alt="Lines of Code Distribution - Project B">
            <h2>Lines of Code Distribution - "Project B"</h2>
            <p>Bar chart showing LOC per class.</p>
        </article>

        <article class="graph-card" data-type="histogram" data-tags="complexity density project c">
            <img src="images/graph3.png" alt="Complexity Density Histogram - Project C">
            <h2>Complexity Density Histogram - "Project C"</h2>
            <p>Histogram of complexity density over time.</p>
        </article>

    </section>
</main>

<footer>
    <small>&copy; <?php echo date('Y'); ?> Hack Camp Group 13</small>
</footer>

<script src="js/app.js"></script>
</body>
</html>
