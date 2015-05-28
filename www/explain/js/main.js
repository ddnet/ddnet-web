$(document).ready(function() //executes when HTML-Document is loaded and DOM is ready
	{
/* ================================== */
/* ==========[ BLOCK CTRL+A ]========== */
/* ================================== */
	 $(function()
		{
		 $(document).keydown(function(e)
			{
			 if ((e.ctrlKey || e.metaKey) && e.keyCode == 65)
				{
				 e.preventDefault();
				}
			});
		});
	});


/* = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = */


$(window).load(function() //executes when complete page is fully loaded, including all frames, objects and images
	{
/* ================================ */
/* ==========[ COORDS FIX ]========== */
/* ================================ */
	 $('area').each(function()
		{
		 var pairs = $(this).attr('coords').split(', ');
		 for(var i=0; i<pairs.length; i++)
			{
			 var nums = pairs[i].split(',');
			 for(var j=0; j<nums.length; j++)
				{
				 nums[j] = parseFloat(nums[j]) +2; //+2 to every coord due to canvas margin (css)
				};
			 pairs[i] = nums.join(',');
			}
		 $(this).attr('coords', pairs.join(', '));
		});

/* ====================================== */
/* ==========[ HIGHTLIGHT MAP AREAS ]========== */
/* ====================================== */
	 $(function()
		{
		 $('.map').maphilight();
		});

/* ======================================= */
/* ==========[ TOOLTIPS SETTINGS ]========== */
/* ======================================= */
	 $('area').qtip(
		{
		 style:
			{
			 classes: 'qtip-dark'
			},
		 position:
			{
			 container: $('div.tooltips'),
			 my: 'top center',
			 at: 'bottom center',
			 viewport: $('.map'),
			 adjust:
				{
				 method: 'shift flip',
				 scroll: true
				}
			},
		 content:
			{
			 title: function()
				{
				 return $(this).attr('title');
				},
			 text: function()
				{
				 return $(this).attr('alt1');
				}
			}
		});

/* ========================================================================================== */
/* ==========[ DIFFERENT TOOLTIP CONTENT ON CLICK /W RESET ON SECOND CLICK / ON HOVER ]========== */
/* ========================================================================================== */
	 var handlers =
		[
		 function() //first click
			{
			 $(this).qtip('option', 'content.text', function()
				{
				 return $(this).attr('alt2');
				});
			},
		 function() //second click
			{
			 $(this).qtip('option', 'content.text', function()
				{
				 return $(this).attr('alt1');
				});
			}
		];
	 var ContextCounter = 0;

	 $('area').click(function()
		{
		 if($(this).attr('alt2'))
			{
			 handlers[ContextCounter++].apply(this, Array.prototype.slice.apply(arguments));
			 ContextCounter %= handlers.length;
			};
		});
	 $('area').mouseenter(function () //reset on mouseenter
		{
		 $(this).qtip('option', 'content.text', function()
			{
			 ContextCounter = 0;
			 return $(this).attr('alt1');
			});
		});

/* =========================================================================== */
/* ==========[ PLACE THESE AMAZINGLY LONG IMAGE CODES ON THEIR PLACE ]========== */
/* =========================================================================== */
	 $('area[alt2="ThereShouldBeNiceImage"]').attr('alt2', '<img src="data:image/png;base64,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"/>');
	});  