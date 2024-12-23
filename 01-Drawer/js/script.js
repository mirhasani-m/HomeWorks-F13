const drawer = document.querySelector('.drawer')
let drawerState;
function openDrawer(){
    if (drawerState){
        drawer.classList.remove("openedDrawer");
        drawerState = 0;
    }    else{
        drawer.classList.add("openedDrawer");
        drawerState = 1;
    }
}