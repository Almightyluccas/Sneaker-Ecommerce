// Mobile filter dialog
const openMobileFilter = document.getElementById('open-mobile-filter');
const closeMobileFilter = document.getElementById('close-mobile-filter');
const mobileFilterDialog = document.getElementById('mobile-filter-dialog');
const mobileFilterBackdrop = document.getElementById('mobile-filter-backdrop');
const mobileFilterPanel = document.getElementById('mobile-filter-panel');

if (openMobileFilter) {
    openMobileFilter.addEventListener('click', function() {
        mobileFilterDialog.classList.remove('hidden');
        // Animate the panel in
        setTimeout(() => {
            mobileFilterPanel.classList.remove('translate-x-full');
        }, 10);
    });
}

if (closeMobileFilter) {
    closeMobileFilter.addEventListener('click', closeFilterDialog);
}

if (mobileFilterBackdrop) {
    mobileFilterBackdrop.addEventListener('click', closeFilterDialog);
}

function closeFilterDialog() {
    // Animate the panel out
    mobileFilterPanel.classList.add('translate-x-full');
    // Hide the dialog after animation completes
    setTimeout(() => {
        mobileFilterDialog.classList.add('hidden');
    }, 300);
}

// Filter accordions
document.querySelectorAll('.filter-section-toggle').forEach(button => {
    button.addEventListener('click', function() {
        const content = this.nextElementSibling;
        const icon = this.querySelector('svg');

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            icon.classList.remove('rotate-180');
        } else {
            content.style.maxHeight = content.scrollHeight + 'px';
            icon.classList.add('rotate-180');
        }
    });
});
