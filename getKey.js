

var KC_1 = ["",""];
var KC_2 = ["",""];
var KC_3 = ["",""];
var KC_4 = ["",""];
var KC_5 = ["",""];
var KC_6 = ["",""];
var KC_7 = ["",""];
var KC_8 = ["",""];
var KC_9 = ["",""];
var KC_10 = ["",""];

var KC = [KC_1,KC_2,KC_3,KC_4,KC_5,KC_6,KC_7,KC_8,KC_9,KC_10];
var tmp_kc = null; // Tampon pour le tableau
var konami;


//Récupère une touche "e" et vérifie si ça correspond à un konami code
function getKeyEvent(e) {
	alert(e.keyCode);
  if(tmp_kc != null) //Première touche
  for (var i = 0; i < kc.length; i++) {
    if(KC[i][0] = e.keyCode)
      copyArray(tmp_kc,KC[i]);
      tmp_kc.reverse();
      tmp_kc.pop();
      konami = i;
  }
  else { //Vérification de la suite
    if(e.keyCode === tmp_kc[tmp_kc.length - 1]) { //Si correcte
      tmp_kc.pop();

      if(tmp_kc.length == 0) {
        showKonami(konami);
        tmp_kc = null;
      }
    }
    else
      tmp_kc = null;
  }

}

//Copie un tableau. La tableau 1 est égal au tableau 2
function copyArray(a1,a2) {
  for (var i = 0; i < a2.length; i++) {
    a1[i] = a2[i];
  }
}
