let collapseElementList = [].slice.call(document.querySelectorAll('.cardCollapse')) ;
let collapseList = collapseElementList.map(function (collapseEl) {
    return new bootstrap.Collapse(collapseEl, {toggle: false})
})

let card = null ;
let cardChild = null;

document.getElementById("lastProjects").addEventListener("shown.bs.collapse", function () {
    console.log("show");
    let btn = document.querySelector(".iconCardCollapse:not(.collapsed) > div");
    console.log("btn");
    console.log(btn);
    btn.style.transform = "rotate(0deg)";
    cardChild = document.querySelector(".show");
    card = cardChild.parentElement;
    console.log(card);
    card.addEventListener("click", function (e) {
        e.stopPropagation();
        console.log("clickCard")
        console.log("Card");
        console.log(card);
    }, {capture: true, once: true});

    document.body.addEventListener("click",function () {
        console.log($(".iconCardCollapse:not(.collapsed)"));
        $(".collapse.show").collapse("hide");
        console.log("clickHide")
    }, {capture: false, once: true});
}, {capture: false, once : false})

document.getElementById("lastProjects").addEventListener("hide.bs.collapse", function () {
    console.log("hide")
    let btn = document.querySelector(".iconCardCollapse:not(.collapsed) > div");
    console.log(btn);
    btn.style.transform = "rotate(180deg)" ;
}, {capture: false, once: false})

