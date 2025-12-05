//specific graph filters
const filterButtons = document.querySelectorAll('.filter-btn');
const graphCards = document.querySelectorAll('.graph-card');
const searchInput = document.getElementById('searchInput');

function applyFilters() {
    const activeBtn = document.querySelector('.filter-btn.active');
    const typeFilter = activeBtn ? activeBtn.dataset.type : 'all';
    const searchText = searchInput.value.toLowerCase().trim();

    graphCards.forEach(card => {
        const cardType = card.dataset.type;
        const tags = card.dataset.tags.toLowerCase();
        const title = card.querySelector('h2').innerText.toLowerCase();

        const matchesType = (typeFilter === 'all') || (cardType === typeFilter);
        const matchesSearch =
            !searchText ||
            tags.includes(searchText) ||
            title.includes(searchText);

        if (matchesType && matchesSearch) {
            card.style.display = '';
        } else {
            card.style.display = 'none';
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

searchInput.addEventListener('input', applyFilters);

//gen filter
applyFilters();
