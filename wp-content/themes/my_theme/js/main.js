function fixedFooter() {
    const heightContent = document.querySelector('.page-content').offsetHeight + 160;
    const footer = document.querySelector('.footer');

    if(heightContent > window.innerHeight) {
        footer.classList.add('position-relative');
    } else {
        footer.classList.remove('position-relative');
    }
}

window.onload = () => fixedFooter();
window.onresize = () => fixedFooter();