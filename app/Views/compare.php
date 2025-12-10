<?php require __DIR__ . '/layout/header.php'; ?>

<section class="mb-4">
    <div class="alert alert-warning border-0 shadow-sm">
        <h2 class="h5 mb-2">Comparison Tool</h2>
        <p class="mb-0">Compare complexity metrics from different repositories or time periods. Identify patterns and trends.</p>
    </div>
</section>

<section class="mb-4">
    <div class="row g-3">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-bottom">
                    <h3 class="h6 mb-0">Dataset A</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Select Repository</label>
                        <select class="form-select">
                            <option selected>Choose a repository...</option>
                            <option>Project A - Main</option>
                            <option>Project B - Components</option>
                            <option>Project C - Modules</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Time Period</label>
                        <select class="form-select">
                            <option selected>Current</option>
                            <option>Last week</option>
                            <option>Last month</option>
                            <option>Last quarter</option>
                        </select>
                    </div>
                    <div class="bg-light rounded p-4 text-center" style="min-height: 150px;">
                        <p class="text-muted small mb-0">Select a repository to load metrics</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-bottom">
                    <h3 class="h6 mb-0">Dataset B</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Select Repository</label>
                        <select class="form-select">
                            <option selected>Choose a repository...</option>
                            <option>Project A - Main</option>
                            <option>Project B - Components</option>
                            <option>Project C - Modules</option>
                            <option>GitHub: react</option>
                            <option>GitHub: vuejs/vue</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Time Period</label>
                        <select class="form-select">
                            <option selected>Current</option>
                            <option>Last week</option>
                            <option>Last month</option>
                            <option>Last quarter</option>
                        </select>
                    </div>
                    <div class="bg-light rounded p-4 text-center" style="min-height: 150px;">
                        <p class="text-muted small mb-0">Select a repository to load metrics</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-4">
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white border-bottom">
            <h3 class="h6 mb-0">Comparison Results</h3>
        </div>
        <div class="card-body">
            <div class="bg-light rounded p-5 text-center" style="min-height: 300px;">
                <p class="text-muted mb-3">Select two datasets above to see comparisons</p>
                <button class="btn btn-warning" disabled>Generate Comparison</button>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white border-bottom">
            <h3 class="h6 mb-0">Metrics to Compare</h3>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" checked id="metric1">
                        <label class="form-check-label" for="metric1">Complexity</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" checked id="metric2">
                        <label class="form-check-label" for="metric2">Lines of Code</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="metric3">
                        <label class="form-check-label" for="metric3">another metric</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="metric4">
                        <label class="form-check-label" for="metric4">idk</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/layout/footer.php'; ?>
