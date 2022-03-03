function getRandomInt(min,max) {
    var x=prompt("Tapez le niveau de difficulté de 1 à 10 !");
    alert("maintenant vous allez determiner un nombre caché entre 0 et 10")
    i=0; 
    j=0;
    while(i<11-x)
    {var y=prompt("Tapez un entier !");
  if(y>10 || y<0) alert("votre reponse est fausse");
  else {
  
     var n=Math.floor((Math.random(max+1-min)*10));
     if(n==x){
     alert("BRAVO !"); break; j=1;}
     else alert("FAUX");
     
  }   i=i+1;   
    }
  alert("FIN");
  if(j==0) alert(n," est la reponse correcte");
  }
getRandomInt(0,10);
var z=prompt("voulez vous jouer encore? 1 si oui, o sinon");
while(z==1){
  getRandomInt(0,10);
  var z=prompt("voulez vous jouer encore? 1 si oui, o sinon");
};
if(z==0)alert("Merci!");