// ArrayIcon
function togleArrow(el){
    let currentArrowIcon = el.querySelector("i");
    const defaultIconClass = currentArrowIcon.classList.contains("down"); 

    if(defaultIconClass){
        currentArrowIcon.classList.remove("down");
        currentArrowIcon.classList.add("up");
    }else{
        currentArrowIcon.classList.remove("up");
        currentArrowIcon.classList.add("down");
    }

}

// Price
function negateNegativePrice(el){
    if(el.value < 0){
        alert('Price Can Not Be Negative')
        el.value = 0;
    }
       
}





// document.getElementById("minPrice").addEventListener('focusout',function(){
//     const max = document.getElementById("maxPrice").value
//     const min = document.getElementById("minPrice").value

//     if(min > max)
//         alert("Max Price shall be greater than Min Price");
// });

// document.getElementById("maxPrice").addEventListener('focusout',function(){
//     const max = document.getElementById("maxPrice").value
//     const min = document.getElementById("minPrice").value

//     if(min > max)
//         alert("Max Price shall be greater than Min Price");
// });