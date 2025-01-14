const scr = document.querySelector('.screen');
let screenNumber = '0' , partA , partB , oparatorType , helper = 0 , result ;
scr.innerHTML = screenNumber ;
function printOnScreen(x){
  if( x == "." ){
    scr.innerHTML = (+screenNumber).toLocaleString() + "." ;
  }else{
    scr.innerHTML = (+screenNumber).toLocaleString() ;
  }
}
function setNum(x){
  if (helper){
    screenNumber = '' ;
    helper = 0 ;
  }
  if (screenNumber == '0'){
    screenNumber = '';
  }
  screenNumber = screenNumber + x ;
  printOnScreen(x)
}
function operate(type){
partA = +screenNumber ;
oparatorType = type ;
helper = 1 ;

}
function calculate(){
  partB = +screenNumber ;
if (oparatorType == '+'){
  result = partA + partB ;
}

scr.innerHTML = result ;
}


