let focusedLink = document.querySelector("#currentLink").value
const links = document.querySelectorAll(".nav-link")

for(let link of links){
  if(focusedLink === link.getAttribute("id")){
    link.setAttribute("class", "nav-link active")
  }
  else{
    link.setAttribute("class", "nav-link text-black")
  }
}

