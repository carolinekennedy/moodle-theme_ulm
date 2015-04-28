YUI.add('moodle-theme_ulm-gridslider', function(Y) {
    var ModulenameNAME = 'theme_ulm-gridslider';
 
    M.theme_ulm = M.theme_ulm || {}; // This line use existing name path if it exists, otherwise create a new one. 
                             
	var auto = new Array(); 
	var autorand = null;
	var e = null;
	// This is to avoid to overwrite previously loaded module with same name.
    M.theme_ulm.gridslider = {
        init: function() {
        	e = this;
        	if (Y.one('div.panes') == null || Y.one('div.panes .pane2') == null) {
        		return;
        	}
            Y.one('div.panes .pane2').setStyle('left', '102%');
            Y.one('div.panes .pane3').setStyle('left', '-102%');
            var pane3 = Y.one('div.panes .pane3');
            Y.one('div.panes .pane3').remove();
            Y.one('div.panes').prepend(pane3);

            Y.one('div.panes .prev_btn').on('click', this.prev_click);
            Y.one('div.panes .next_btn').on('click', this.next_click);
            Y.all('div.panes .pane').setStyle('display', 'block');

            if (autoslide) {
            	autorand = new Date().getTime();
        		auto[autorand] = setInterval(this.next_click, slidedelay);
            	Y.one('div.panes-wrapper').on('hover', this.pause, this.resume);
            }

        },

        pause: function() {
        	clearInterval(auto[autorand]);
        	auto[autorand] = 0;
        },

        resume: function() {
        	setTimeout(function(){
        		autorand = new Date().getTime();
        		auto[autorand] = setInterval(e.next_click, slidedelay);
        	},500);
        	console.log(auto);
        }, 

        prev_click: function() {
        	Y.one('div.panes .pane2').addClass('switch');
            var pane3 = Y.one('div.panes .pane2');
        	Y.one('div.panes .pane1').transition(
				{
					left:   '102%',
					easing: 'ease-out'
				}
			);
			Y.one('div.panes .pane2').transition(
				{
					left:   '200%',
					easing: 'ease-out'
				}
			);
			Y.one('div.panes .pane3').transition(
				{
					left:   '0',
					easing: 'ease-out'
				}
			);
            Y.one('div.panes .pane2').remove();
			Y.one('div.panes .pane1').replaceClass('pane1', 'pane2');
			Y.one('div.panes .pane3').replaceClass('pane3', 'pane1');
            Y.one('div.panes').prepend(pane3);
			Y.one('div.panes .switch').replaceClass('pane2', 'pane3	').removeClass('switch');
            Y.one('div.panes .pane3').setStyle('left', '-150%');
            Y.one('div.panes .pane3').transition(
				{
					left:   '-102%',
					easing: 'ease-out'
				}
			);
			clearInterval(auto[autorand]);
        	auto[autorand] = 0;
        	autorand = new Date().getTime();
        	auto[autorand] = setInterval(e.next_click, slidedelay);
        },

        next_click: function() {
        	Y.one('div.panes .pane3').addClass('switch');
            var pane3 = Y.one('div.panes .pane3');
        	Y.one('div.panes .pane1').transition(
				{
					left:   '-102%',
					easing: 'ease-out'
				}
			);
			Y.one('div.panes .pane2').transition(
				{
					left:   '0',
					easing: 'ease-out'
				}
			);
			Y.one('div.panes .pane3').transition(
				{
					left:   '-200%',
					easing: 'ease-out'
				}
			);
            Y.one('div.panes .pane3').remove();
			Y.one('div.panes .pane1').replaceClass('pane1', 'pane3');
			Y.one('div.panes .pane2').replaceClass('pane2', 'pane1');
            Y.one('div.panes').append(pane3);
			Y.one('div.panes .switch').replaceClass('pane3', 'pane2').removeClass('switch');
            Y.one('div.panes .pane2').setStyle('left', '150%');
            Y.one('div.panes .pane2').transition(
				{
					left:   '102%',
					easing: 'ease-out'
				}
			);
			clearInterval(auto[autorand]);
        	auto[autorand] = 0;
        	autorand = new Date().getTime();
        	auto[autorand] = setInterval(e.next_click, slidedelay);
        }
    }

  }, '@VERSION@', {
      requires:['base','node', 'anim', 'transition', 'event']
});