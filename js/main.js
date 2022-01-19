let collapseElementList = [].slice.call(document.querySelectorAll('.cardCollapse')) ;
let collapseList = collapseElementList.map(function (collapseEl) {
    return new bootstrap.Collapse(collapseEl, {toggle: false})
})

let cardt = null ;

document.getElementById("lastProjects").addEventListener("shown.bs.collapse", function (e) {
    console.log("show");
    console.log(document.querySelector(".iconCardCollapse:not(.collapsed) > div"));
    let btn = document.querySelector(".iconCardCollapse:not(.collapsed) > div") ;
    btn.style.transform = "rotate(0deg)" ;
    cardt = document.querySelector(".collapse.show").parentElement ;
    $("*:not(.show)").click(function (event) {
        let target = event.target;
        if ( target.closest(".collapse.show") === null ) {
            $(".collapse.show").collapse("hide")
        }
    })
})

document.getElementById("lastProjects").addEventListener("hide.bs.collapse", function (e) {
    console.log("hide")
    let btn = e.target.previousElementSibling.querySelector("div") ;
    btn.style.transform = "rotate(180deg)" ;
    console.log("rotating 180deg", e.target.previousElementSibling.querySelector("div") ,btn);
}, {capture: false, once: false})

let introBool = false;

if (introBool) {
    const tl = gsap.timeline({defaults: {ease: "power1.out"}});
    tl.to(".titlesintro > .hide >.text", {y: '0%', duration: 1.5});
    tl.to(".divider", {y: "0%", duration: 1}, "-=1.2")
    tl.to(".thin.text", {y: '0%', duration: 1.5});
    tl.to(".slider", {y: '-100%', duration: 1.5, delay: 2});
    tl.to(".intro", {y: '-100%', duration: 1.5}, "-=1.3");
    tl.fromTo("nav", {opacity: 0}, {opacity: 1, duration: 1}, "-=.5");
    tl.fromTo(".notConnected", {opacity: 0}, {opacity: 1, duration: 2}, "-=.5")
    setTimeout(() => {
        $(window).scrollTop(0);
        console.log("effectuée")
    }, 5900 );
}
else {
    document.querySelector(".intro").style.transform = "translateY(-100%)";
    document.querySelector(".intro .divider").style.transform = "translateY(-100%)";
}


