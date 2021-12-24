;function($) {	
				$('div.navigation').css({'float' : 'left'});
				$('div.content').css('display', 'block');

				var onMouseOutOpacity = 0.67;
				$('#thumbs ul.thumbs li').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast',
					exemptionSelector: '.selected'
				});
				
				var gallery = $('#thumbs').galleriffic({
					delay:                     2500,
					numThumbs:                 15,
					preloadAhead:              10,
					enableTopPager:            true,
					enableBottomPager:         true,
					maxPagesToShow:            7,
					imageContainerSel:         '#slideshow',
					controlsContainerSel:      '#controls',
					captionContainerSel:       '#caption',
					loadingContainerSel:       '#loading',
					renderSSControls:          false,
					renderNavControls:         true,
					prevLinkText:              '&lsaquo; Cr�ation pr�c�dente',
					nextLinkText:              'Cr�ation suivante &rsaquo;',
					nextPageLinkText:          'Suivant',
					prevPageLinkText:          'Pr�c�dent',
					enableHistory:             true,
					autoStart:                 false,
					syncTransitions:           true,
					defaultTransitionDuration: 900,
					onSlideChange:             function(prevIndex, nextIndex) {
						this.find('ul.thumbs').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 1.0);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						this.fadeTo('fast', 1.0);
					}
				});

				function pageload(hash) {

					if(hash) {
						$.galleriffic.gotoImage(hash);
					} else {
						gallery.gotoIndex(0);
					}
				}
 
				$.historyInit(pageload, "advanced.html");

				$("a[rel='history']").live('click', function(e) {
					if (e.button != 0) return true;
					
					var hash = this.href;
					hash = hash.replace(/^.*#/, '');

					$.historyLoad(hash);

					return false;
				});
			});
		