let put_favorite = (favorite) =>{

    $.post(favorite,function(card){$("#menu_favoritos").append(card);});
    
    };
    $('.b_favoritos').change(function(){
        if($(this).is(':checked')){
            alert()
    console.log(this.id)
             switch (this.id) {
                 case f_animalario:
                     put_favorite('card_games/card_animalario.html');
                     break;
            
                 default:
                     break;
            }
        } else {
            alert('not checked');
        }
    });
