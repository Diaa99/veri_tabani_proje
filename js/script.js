var swap = document.querySelectorAll(".swap_");
var img = document.getElementById("person");
console.log(swap);
swap.forEach(e=>{
    
    e.addEventListener('click',()=>{
        console.log(e.classList[0]);
        img.src='images/'+e.classList[0]+'.png';
        console.log(img.src);
        img.style.borderRadius='50%';
        swap.forEach(e=>e.classList.remove("active_2"));
        e.classList.add("active_2");

    })
})
