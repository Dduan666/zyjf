;(function (window, $, undefined) {
    /*
     * tab切换插件
     * 用例：$('*').createTab();
     */
    $.fn.createTab = function (opt) {
        var def = {
            activeEvt: 'click',
            activeCls: 'cur'
        }
        $.extend(def, opt);
        this.each(function () {
            var $this = $(this);
            var timer;
            $this.find('ul.title li').click(def.activeEvt,function(){
                var index = $(this).index(),
                    that = $(this);
                timer = setTimeout(function(){
                    that.addClass('cur').siblings().removeClass('cur');
                    $this.find('div.list').animate({marginLeft:-1024*index},'slow');
                },300);
            }).mouseout(function(){
                clearTimeout( timer );
            })
        });
    }

})(window, jQuery);
$(function(){
    $(".jyTable").createTab()
})



;(function (window, $, undefined) {
    /*
     * tab切换插件
     * 用例：$('*').createTab();
     */
    $.fn.createTab1 = function (opt) {
        var def = {
            activeEvt: 'click',
            activeCls: 'new_bac_a'
        }
        $.extend(def, opt);
        this.each(function () {
            var $this = $(this);
            var timer;
            $this.find('ul.new_dhf li').click(def.activeEvt,function(){
                var index = $(this).index(),
                    that = $(this);
                timer = setTimeout(function(){
                   that.addClass('new_bac_a').siblings().removeClass('new_bac_a');
                    $this.find('div.new_con_tabs').animate({marginTop:-500*index},'slow');
                },300);
            }).mouseout(function(){
                clearTimeout( timer );
            })
        });
    }

})(window, jQuery);
$(function(){
    $(".new_tabs").createTab1()
})