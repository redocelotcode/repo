document.addEventListener('DOMContentLoaded', () => {
    const filterButtons = document.querySelectorAll('.filter-button');
    const cards = document.querySelectorAll('.graph-card-wrapper');
    const searchInput = document.getElementById('searchInput');

    function applyFilters() {
        const activeButton = document.querySelector('.filter-button.active');
        const filterValue = activeButton ? activeButton.dataset.filter : 'all';
        const searchText = (searchInput?.value || '').toLowerCase().trim();

        cards.forEach(card => {
            const type = card.dataset.type;           // line / bar / histogram
            const name = (card.dataset.name || '').toLowerCase();

            const matchesType = (filterValue === 'all') || (type === filterValue);
            const matchesSearch = !searchText || name.includes(searchText);

            if (matchesType && matchesSearch) {
                card.classList.remove('d-none');
            } else {
                card.classList.add('d-none');
            }
        });
    }

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            filterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            applyFilters();
        });
    });

    if (searchInput) {
        searchInput.addEventListener('input', applyFilters);
    }

    applyFilters();
});
