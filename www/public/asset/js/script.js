

/*var search = [];
var mots ;
var param = document.getElementById(myDiv)

    for(i = 0; i < search.document.getElementById(myDiv);) {
        
        mots += [i++];


        console.log(mots[i]);
    }
    */


function getValue(){
    $('span').removeAttr('style');
    var word = $('#inputSearch').val();
    var field = $('#myDiv').html();
    var pos = field.indexOf(word);
    var re = new RegExp('('+word+')(?![^<]*>)', "gi");
    console.log(word);

    if(pos > -1){
        var content = field.replace(re, '<span style="background-color: #00FF00">'+word+'</span>');
        $('#myDiv').html(content);
    }
}
