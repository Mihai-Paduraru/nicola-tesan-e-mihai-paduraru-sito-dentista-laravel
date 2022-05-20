const navbar = document.querySelector('#nav');

window.addEventListener('scroll', () => {
    let scrolled = window.scrollY;

    if (scrolled > 0) {
        navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.3)';
    } else {
        navbar.style.backgroundColor = 'rgba(0, 0, 0, 0)';
    }
});




const iconScrollTop = document.querySelector('.icon-head-top');

window.addEventListener('scroll', () => {
    let scrolled = window.scrollY;

    if (scrolled > 100) {
        iconScrollTop.style.transform = 'translateX(0.1vw)';
    } else {
        iconScrollTop.style.transform = 'translateX(5.5vw)';
    }
});




const main = document.querySelector('#main');
const title = document.querySelector('.head-title');
const contentTop = document.querySelector('.content-head-top');
const contentBottom = document.querySelector('.content-head-bottom');

let observer = new IntersectionObserver(
    (entries) => {
        entries.forEach(entry => {
            
            if (entry.isIntersecting) {
                title.style.transform = 'translateX(0vw)';
                title.style.opacity = '1';

                contentTop.style.transform = 'translateX(0vw)';
                contentTop.style.opacity = '1';

                contentBottom.style.transform = 'translateX(0vw)';
                contentBottom.style.opacity = '1';
            } 
            
            else {
                title.style.transform = 'translateX(5vw)';
                title.style.opacity = '0';
                
                contentTop.style.transform = 'translateX(5vw)';
                contentTop.style.opacity = '0';

                contentBottom.style.transform = 'translateX(5vw)';
                contentBottom.style.opacity = '0';
            }
        })
    }
);

observer.observe(main);





const imgTop = document.querySelector('.img-top ,.servizi-img-top');

let observerT = new IntersectionObserver(
    (entries) => {
        entries.forEach(entry => {
            
            if (entry.isIntersecting) {
                imgTop.style.transform = 'translateX(51vw)';
                imgTop.style.opacity = '1';
            } else {
                imgTop.style.transform = 'translateX(61vw)';
                imgTop.style.opacity = '0';
            }
        })
    }
);

observerT.observe(main);



const titleMain = document.querySelector('.main-title');
const contentTopMain = document.querySelector('.content-main-top');
const contentBottomMain = document.querySelector('.content-main-bottom');

let observerMain = new IntersectionObserver(
    (entries) => {
        entries.forEach(entry => {

            if (entry.isIntersecting) {
                titleMain.style.transform = 'translateX(0vw)';
                titleMain.style.opacity = '1';

                contentTopMain.style.transform = 'translateX(0vw)';
                contentTopMain.style.opacity = '1';

                contentBottomMain.style.transform = 'translateX(0vw)';
                contentBottomMain.style.opacity = '1';
            } else {
                titleMain.style.transform = 'translateX(10vw)';
                titleMain.style.opacity = '0';

                contentTopMain.style.transform = 'translateX(10vw)';
                contentTopMain.style.opacity = '0';

                contentBottomMain.style.transform = 'translateX(10vw)';
                contentBottomMain.style.opacity = '0';
            }
        })
    }
);

observerMain.observe(contentBottomMain);





const imgCenter = document.querySelector('.img-center , .servizi-img-center');

let observerM = new IntersectionObserver(
    (entries) => {
        entries.forEach(entry => {
            
            if (entry.isIntersecting) {
                imgCenter.style.transform = 'translateX(10vw)';
                imgCenter.style.opacity = '1';

            } else {
                imgCenter.style.transform = 'translateX(0vw)';
                imgCenter.style.opacity = '0';
            }
        })
    }
);

observerM.observe(contentBottomMain);





const imgSection = document.querySelector('.img-1');
const contentSection = document.querySelector('.content-section');

let observerImg = new IntersectionObserver(
    (entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                imgSection.style.transform = 'translateY(0)';
                imgSection.style.opacity = '1';
            } else {
                imgSection.style.transform = 'translateY(100px)';
                imgSection.style.opacity = '0';
            }
        })
    }
);

observerImg.observe(contentSection);


const footer = document.querySelector('#footer');
const titleSection = document.querySelector('.title-section');

let observercontent = new IntersectionObserver(
    (entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                titleSection.style.transform = 'translateX(0)';
                titleSection.style.opacity = '1';
                
                contentSection.style.transform = 'translateX(10px)';
                contentSection.style.opacity = '1';
            } else {
                titleSection.style.transform = 'translateX(-100px)';
                titleSection.style.opacity = '0';

                contentSection.style.transform = 'translateX(100px)';
                contentSection.style.opacity = '0';
            }
        })
    }
);

observercontent.observe(footer);