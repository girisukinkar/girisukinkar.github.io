// Navigation tab functionality
const navTabs = document.querySelectorAll('.nav-tab');
const sections = document.querySelectorAll('.section');

navTabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const targetSection = tab.dataset.section;
        
        // Remove active class from all tabs and sections
        navTabs.forEach(t => t.classList.remove('active'));
        sections.forEach(s => s.classList.remove('active'));
        
        // Add active class to clicked tab and corresponding section
        tab.classList.add('active');
        document.getElementById(targetSection).classList.add('active');
        
        // Scroll to section on mobile
        if (window.innerWidth <= 768) {
            const section = document.getElementById(targetSection);
            section.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// Checkbox functionality - persist state
const checkboxes = document.querySelectorAll('.checkbox-item input[type="checkbox"]');

checkboxes.forEach((checkbox, index) => {
    // Load saved state from localStorage
    const savedState = localStorage.getItem(`checklist-${index}`);
    if (savedState === 'true') {
        checkbox.checked = true;
    }
    
    // Save state when changed
    checkbox.addEventListener('change', () => {
        localStorage.setItem(`checklist-${index}`, checkbox.checked);
    });
});

// Clear checklist button (optional)
function clearChecklist() {
    checkboxes.forEach((checkbox, index) => {
        checkbox.checked = false;
        localStorage.removeItem(`checklist-${index}`);
    });
}

// Add print functionality
function printGuide() {
    window.print();
}

// Handle keyboard navigation
document.addEventListener('keydown', (e) => {
    // Arrow keys to navigate between tabs
    const activeTab = document.querySelector('.nav-tab.active');
    const tabsArray = Array.from(navTabs);
    const currentIndex = tabsArray.indexOf(activeTab);
    
    if (e.key === 'ArrowRight' && currentIndex < tabsArray.length - 1) {
        tabsArray[currentIndex + 1].click();
    } else if (e.key === 'ArrowLeft' && currentIndex > 0) {
        tabsArray[currentIndex - 1].click();
    }
});

// Mobile-friendly tab scrolling
const navTabsContainer = document.querySelector('.nav-tabs');
if (navTabsContainer) {
    let isDown = false;
    let startX;
    let scrollLeft;
    
    navTabsContainer.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - navTabsContainer.offsetLeft;
        scrollLeft = navTabsContainer.scrollLeft;
    });
    
    navTabsContainer.addEventListener('mouseleave', () => {
        isDown = false;
    });
    
    navTabsContainer.addEventListener('mouseup', () => {
        isDown = false;
    });
    
    navTabsContainer.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - navTabsContainer.offsetLeft;
        const walk = (x - startX) * 1;
        navTabsContainer.scrollLeft = scrollLeft - walk;
    });
}

// Smooth scroll for internal links
document.querySelectorAll('a[href^="https://"]').forEach(link => {
    link.setAttribute('target', '_blank');
    link.setAttribute('rel', 'noopener noreferrer');
});