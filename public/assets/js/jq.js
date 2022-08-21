// jqueryのコード
$(function(){

     // ページのURL取得
    let pageUrl = location.pathname;
    console.log(pageUrl);

        // ウィンドウの高さ取得
        let windowHeight = $(window).height();
    
        $(window).on('load scroll' ,function(){

            console.log(pageUrl);
    
            let scroll = $(window).scrollTop();

    
            //////////////////////////////////////////////////////////////
            // セクションの三角形部分
            // 各セクションのtriangleを取得
            if( $('.top-page').length )  {

                let triangleList = [];

                triangleList[0]= $('#about').find('.triangle');
                triangleList[1]= $('#works').find('.triangle');
                triangleList[2]= $('#skill').find('.triangle');
                triangleList[3]= $('#contact').find('.triangle');
        
                // 繰り返し
                $.each(triangleList,function(){
        
                    let target = $(this).offset().top;
        
                    if( target - windowHeight < scroll ){
                        $(this).addClass('triangle---active');
                    }
        
                });
            }

            //////////////////////////////////////////////////////////////
            // 制作事例ページ専用
            // 写真拡大
            if( pageUrl.indexOf('/works.html') || pageUrl.indexOf('/index.html') ) {

                $('.works__item-link').mouseover(function (){
                    $(this).find('.works__img').addClass('imgScale');
                });

                $('.works__item-link').mouseout(function (){
                    $(this).find('.works__img').removeClass('imgScale');
                });
            }
        });
});