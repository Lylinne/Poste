

/*var search = [];
var mots ;
var param = document.getElementById(myDiv)

    for(i = 0; i < search.document.getElementById(myDiv);) {
        
        mots += [i++];


        console.log(mots[i]);
    }
    */


   function FindNext() {
    $("span").removeAttr("style");
    var str = $("#search").val();
    var field = $(".article").html();
    //cherche première occurence du mot clé
    var pos = field.indexOf(str);
    //créer expression régulière qui accepte le mot clé mais exclu carac speciaux
    var re = new RegExp("("+str+")(?![^<]*>)", "gi");
    
    if (str == "") {
        alert("Champs vide recherche impossible");
        
        return;
    }else{
        //remplace tous les mots str de la chaine de c. originale en fonction de la RegExp
        //puis stocke dans content 
        
        if(pos > -1){
       
        var content = field.replace(re, "<span style='background-color:#FF6767'>"+str+"</span>");
        //remplace contenu original par le nouveau contenu
          $(".article").html(content);
          
        }
        
    }
    
}
$('#but').on("click", function() {
FindNext();

});
