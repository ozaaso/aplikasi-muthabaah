// Array of tab configurations, including IDs and absolute target URLs (relative to root)
const tabs = [
    { id: 'tab-harian', url: '/konten' },
    { id: 'tab-form', url: '/form' },
    { id: 'tab-list', url: '/list' }
];

// Add event listeners for each tab to handle navigation
tabs.forEach(tab => {
    document.getElementById(tab.id).addEventListener('click', function() {
        // Navigate to the specified URL when the tab is clicked
        window.location.href = tab.url;
    });
});


// Function to highlight the active tab based on the current URL
function highlightActiveTab() {
    const currentUrl = window.location.pathname;
    tabs.forEach(tab => {
        const element = document.getElementById(tab.id);
        // Check if the current URL includes the tab's URL to mark it as active
        if (currentUrl.includes(tab.url)) {
            element.classList.add('active');
        } else {
            element.classList.remove('active');
        }
    });
}

// Highlight the active tab on page load
window.onload = highlightActiveTab;
