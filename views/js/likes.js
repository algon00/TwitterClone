//*いいね用Java Script*//

$(function(){
    //いいねがクリックされた時
    $('.js-like').click(function(){
        const this_obj = $(this);
        const like_id = $(this).data('like-id');
        const like_count_obj = $(this).parent().find('.js-like-count');
        let like_count = Number(like_count_obj.html());

        if(like_id){
            //いいね取り消し
            //いいねのカウントを減らす
            like_count--;
            like_count_obj.html(like_count);
            this_obj.data('like-id',null);

            //いいねボタンの色をグレーにする
            $(this).find('img').attr('src','./img/icon-heart.svg');
        }else{
            //いいね付与
            //いいねのカウントを増やす
            like_count++;
            like_count_obj.html(like_count);
            this_obj.data('like-id',true);

            //いいねボタンの色を青にする
            $(this).find('img').attr('src','./img/icon-heart-twitterblue.svg');
        }
    });
})