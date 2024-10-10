const sections = document.querySelectorAll('.content');
    const navLinks = document.querySelectorAll('.nav-link');
    const navMap = {
        'navMakanan': 'makanan',
        'navCaffe': 'caffe',
        'navMinuman': 'minuman',
        'navInfo': 'about'
    };

    navLinks.forEach(navLink => {
        navLink.addEventListener('click', function(e) {
            e.preventDefault();
            sections.forEach(section => section.style.display = 'none');
            navLinks.forEach(link => link.classList.remove('active'));
            document.getElementById(navMap[navLink.id]).style.display = 'block';
            navLink.classList.add('active');
        });
    });

const searchInput = document.getElementById('searchInput');

searchInput.addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const activeNav = document.querySelector('.nav-link.active');
    const activeSectionId = navMap[activeNav.id];
    const placeItems = document.querySelectorAll(`#${activeSectionId} .place-item`);
    const noResultsMessage = document.getElementById('noResults');
    
    let hasResults = false;

    placeItems.forEach(item => {
        const itemName = item.getAttribute('data-name').toLowerCase();
        if (itemName.includes(searchTerm)) {
            item.style.display = 'block';
            hasResults = true;
        } else {
            item.style.display = 'none';
        }
    });

    noResultsMessage.style.display = hasResults ? 'none' : 'block';
});
