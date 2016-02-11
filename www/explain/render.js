var layers = {
	'game': ['entities.png', 'Game layer'],
	'front': ['front.png', 'Front layer'],
	'tele': ['tele.png', 'Tele layer'],
	'speedup': ['speedup.png', 'Speedup layer'],
	'switch': ['switch.png', 'Switch layer'],
	'tune': ['tune.png', 'Tune layer'],
	'overlay': ['entities_clear.png', 'Entities overlay']
};
var properties = {
	'rotate': ['Rotate.png'],
	'flip': ['Flip.png'],
	'switch': ['Power.png'],
	'more': ['more.png']
};

layer_name = $.url('?layer');
if(!(layer_name in layers))
	layer_name = 'game';
highlight = $.url('?index');

$(document).ready(function() {
	title = $('#title');
	menu = $('#menu');
	entities_image = $('#entities_image');
	entities_map = $('#entities_map');
	permalink = $('#permalink');

	$.getJSON('explanations.json', function(json) {
		explanations = [];
		$.each(json, function(i, obj) {
			if($.isArray(obj)) {
				$.each(obj, function(j, entity) {
					entity["group"] = i;
					explanations.push(entity);
				});
			} else {
				explanations.push(obj);
			}
		});
		show_explanations();
	});

	$.each(layers, function(layer, data) {
		var button = $('<button>' + data[1] + '</button>');
		button.click(function() {
			layer_name = layer;
			show_permalink();
			show_title();
			show_entities_image();
			show_explanations();
		});
		menu.append(button);
	});

	show_title();
	show_entities_image();
});


function show_permalink(layer, index) {
	if(layer) {
		url = 'https://ddnet.tw/explain/?layer=' + layer + '&index=' + index;
		input = permalink.children()[0];
		if(!input) {
			input = $('<input type="text" readonly="1" />');
			input.bind("click", function() {
				input.select();
			});
			permalink.html('Permalink ');
			permalink.append(input);
		}
		$(input).val(url);
	} else {
		permalink.empty();
	}
}

function show_title() {
	title.html('Game tiles explanations: ' + layers[layer_name][1]);
}

function show_entities_image() {
	entities_image.attr('src', 'layer/' + layers[layer_name][0]);
}

function parse_entity(entity) {
	var area = $('<area></area>');
	area['layers'] = entity['layers'];

	area.attr('shape', 'rect');

	var x = (entity['index'] % 16) * 64;
	var y = Math.floor(entity['index'] / 16) * 64;
	var x2 = x + ('width' in entity ? entity['width'] : 1) * 64;
	var y2 = y + ('height' in entity ? entity['height'] : 1) * 64;
	area['top'] = y;
	area.attr('coords', x + ', ' + y + ', ' + x2 + ', ' + y2);

	if('group' in entity)
		area.attr('group', entity['group']);

	var title = entity['name'] + ' (' + entity['index'] + ')';
	if('type' in entity) {
		title += '<br \>';
		title += entity['type'];
	}

	var text = entity['explanation'];
	if('properties' in entity) {
		var linebreak = false;
		$.each(entity['properties'], function(i, property) {
			if(property in properties) {
				if(!linebreak) {
					text += '<br>';
					linebreak = true;
				}
				text += '<img class="property" src="property/' + properties[property][0] + '" />';
			}
		});			
	}

	area.qtip({
		style: {
			classes: 'qtip-dark'
		},
		position: {
			my: 'top center',
			at: 'bottom center',
			viewport: entities_image,
			adjust: {
				method: 'shift flip',
				scroll: true
			}
		},
		content: {
			title: title,
			text: text
		}
	});

	area.bind("click", function() {
		show_permalink(layer_name, entity['index']);
	});

	if(entity['index'] == highlight)
		highlight = area;

	return area
}

function show_explanations() {
	var old_entities = entities_map.children();
	old_entities.qtip('hide');
	old_entities.detach();
	$.each(explanations, function(i, entity) {
		if($.inArray(layer_name, entity['layers']) != -1) {
			if(!$(entity).is('area')) {
				entity = parse_entity(entity);
				explanations[i] = entity;
			}
			entities_map.append(entity);
		}
	});
	entities_image.maphilight();

	if($(highlight).is('area')) {
		$(document).scrollTop(highlight['top']);
		highlight.trigger("mouseover");
	}
	highlight = null;
}
