function toggleContextMenu(element) {
    console.log('Clicked the menu icon');  // Debugging check
    const contextMenu = element.closest('.card').querySelector('.context-menu');
    
    // Toggle the context menu visibility
    if (contextMenu.style.display === 'block') {
        console.log('Hiding context menu');
        contextMenu.style.display = 'none';
    } else {
        console.log('Showing context menu');
        // Hide all other context menus
        document.querySelectorAll('.context-menu').forEach(menu => menu.style.display = 'none');
        contextMenu.style.display = 'block';
    }

    // Close the menu if clicked outside
    document.addEventListener('click', function(event) {
        if (!element.contains(event.target) && !contextMenu.contains(event.target)) {
            console.log('Click detected outside menu');
            contextMenu.style.display = 'none';
        }
    }, { once: true });
}