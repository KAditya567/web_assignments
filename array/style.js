alert("")

let arr = [
  "https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2Fyc3xlbnwwfHwwfHx8MA%3D%3D",
  "https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Y2Fyc3xlbnwwfHwwfHx8MA%3D%3D",
  "https://images.unsplash.com/photo-1583121274602-3e2820c69888?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8Y2Fyc3xlbnwwfHwwfHx8MA%3D%3D",
];

// main.innerHTML = "press next button";
var i = 0;
nxt.addEventListener("click", nx);
function nx() {
  if (i > arr.length) {
    i = 0;
  } else {
    img.setAttribute("src", arr[i]);
    i++;
  }
}

pre.addEventListener("click", bck);
function bck() {
  if (i > arr.length) {
    i = 0;
  } else {
    img.setAttribute("src", arr[i]);
    i--;
  }
}
