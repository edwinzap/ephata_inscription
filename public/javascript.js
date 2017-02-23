/**
 * Created by forge on 21/02/2017.
 */
function revealIfChecked(item){

    var train = document.getElementById("divTrain");
    var voiture = document.getElementById("divVoiture");
    var radio = document.getElementsByName("arriveeGare");

    switch (item.id){
        case "train":
            train.style.display = "inherit";
            voiture.style.display = "none";
            activateRequired(radio);
            break;
        case "voiture":
            train.style.display = "none";
            voiture.style.display = "inherit";
            desactivateRequired(radio);
            break;
        case "autre":
            train.style.display ="none";
            voiture.style.display = "none";

            desactivateRequired(radio);
            break;
        default:
            train.style.display ="none";
            voiture.style.display = "none";
            desactivateRequired(radio);
            break;
    }
}

function desactivateRequired(children){
    for (i = 0; i< children.length;i++){
        children[i].removeAttribute("required");
    }
}
function activateRequired(children){
    for (i = 0; i< children.length;i++){
        children[i].prop('required', true);
    }
}