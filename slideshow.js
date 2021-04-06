var toyStorySlide = ["woody.jpeg","buzz.jpg","slinky.png","potato.png","rex.jpg"]

var test;
var indexSlide = 0;

window.onload = function(){
    test= document.getElementById("test");

    setInterval(slideShow, 1000);
}

function slideShow(){
        test.style.backgroundImage = "url(images/" + toyStorySlide[indexSlide] + ")";
        indexSlide++;
        if(indexSlide == toyStorySlide.length){
            indexSlide = 0;
        }
}
